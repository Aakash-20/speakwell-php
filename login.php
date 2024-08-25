<?php
session_start();
include "db_con.php";

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);        
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']); 

    if (empty($email)) {
        $error = "Email is required";
    } else if (empty($password)) {
        $error = "Password is required";
    } else {
        $stmt = $con->prepare("SELECT * FROM users WHERE user_email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['email'] = $row['user_email'];
            header("Location: admin_index.php");
            exit();
        } else {
            $error = "Incorrect email or password";
        }
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="body-root">
    <div class="body-section">
        <div class="container flex">
            <div class="login-page flex">
                <div class="text">
                    <img src="background/swa.png" alt="Image">
                </div>
                <form method="post" action="">
                    <h1>Admin Login</h1>
                    <?php
                    if (!empty($error)) {
                        echo "<p style='color: red;'>" . htmlspecialchars($error) . "</p>";
                    }
                    ?>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <div class="link">
                        <button type="submit" class="login">Login</button><br>
                    </div>
                    <hr>
                </form>
            </div>
        </div>
    </div>
    </div>
  </body>
</html>