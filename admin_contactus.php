<?php
session_start();
include 'db_con.php';

// Handle form submission for adding a new address
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST['address'];
    $sql = "INSERT INTO addresses (address) VALUES (?)";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $address);
    
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['message'] = "Address added successfully!";
    } else {
        $_SESSION['message'] = "Error: " . mysqli_error($con);
    }

    // Redirect after processing the form
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Handle address deletion
if (isset($_GET['remove'])) {
    $id = $_GET['remove'];
    $sql = "DELETE FROM addresses WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['message'] = "Address removed successfully!";
    } else {
        $_SESSION['message'] = "Error: " . mysqli_error($con);
    }

    // Redirect after deleting
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Fetch addresses from the database
$sql = "SELECT * FROM addresses";
$result = mysqli_query($con, $sql);
$addresses = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Display message if set
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Us - Add Location</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/dashboard.css">
  </head>
  <body>
    <div class="backend-root">
      <header>
        <div class="header-section">
          <div class="header-content">
            <div class="header-container logo">
                <img src="background/swa.png" class="platform-logo">
            </div>
          </div>
        </div>
      </header>
      <div class="body-root">
        <div class="body-section">
          <div class="body-content">
            <div class="sidebar">
              <div class="sidebar-content">
                <div class="sidebar-container sidebar-menu">
                    <a href="admin_index.php" class="menu-item"><i class="fas fa-edit menu-icon"></i>Blog's</a>
                    <a href="admin_image.php" class="menu-item"><i class="fas fa-image menu-icon"></i>Image's</a>
                    <a href="admin_contactus.php" class="menu-item"><i class="fas fa-map-marker-alt menu-icon"></i>Contact Us</a>
                    <a href="admin_review.php" class="menu-item"><i class="fas fa-comment menu-icon"></i>Review</a>
                    <a href="logout.php" class="menu-item"><i class="fas fa-sign-out-alt menu-icon"></i>Log Out</a>
                </div>
              </div>
            </div>
            <div class="main">
              <div class="main-content">
                <?php if (isset($message)): ?>
                <div class="alert">
                    <?php echo $message; ?>
                </div>
                <?php endif; ?>
                <div class="main-container add-location">
                  <h2>Add a Location to the Contact Us Form</h2>
                  <div class="add-location-form">
                    <form class="location-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                      <div class="form-field field-1 medium">
                        <label for="branch-address">Branch Address</label>
                        <textarea id="branch-address" rows="3" name="address" placeholder="Enter branch address" required></textarea>
                      </div>
                      <div class="add-location-actions">
                        <div class="button-container">
                          <button class="add-location" type="submit">Add Location</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="table">
                <div class="row bg-1">
                  <div class="cell cell-10 text-center text-fff">ADDRESS</div>
                  <div class="cell cell-100 text-center text-fff">REMOVE</div>
                </div>
                <ul>
                  <?php foreach ($addresses as $address): ?>
                  <li class="row">
                    <div class="cell cell-10 text-center"><a href=""><?php echo htmlspecialchars($address['address']); ?></a></div>
                    <div class="cell cell-100 text-center">
                      <div class="edit-remove">
                        <a href="?remove=<?php echo $address['id']; ?>" class="btnRemove fa fa-remove bg-1 text-fff" onclick="return confirm('Do you really want to remove it ?')"></a>
                      </div>
                    </div>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>