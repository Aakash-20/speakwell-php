<?php
session_start();
include 'db_con.php';





if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $widget_code = $_POST['url'];
  
  // First, try to update the existing row with id = 1
  $sql = "UPDATE widgets SET code = ? WHERE id = 1";
  $stmt = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($stmt, "s", $widget_code);
  
  if (mysqli_stmt_execute($stmt)) {
      // Check if any row was actually updated
      if (mysqli_affected_rows($con) > 0) {
          $_SESSION['message'] = "Widget code updated successfully!";
      } else {
          // If no row was updated, insert a new row with id = 1
          $sql = "INSERT INTO widgets (id, code) VALUES (1, ?) ON DUPLICATE KEY UPDATE code = ?";
          $stmt = mysqli_prepare($con, $sql);
          mysqli_stmt_bind_param($stmt, "ss", $widget_code, $widget_code);
          
          if (mysqli_stmt_execute($stmt)) {
              $_SESSION['message'] = "Widget code inserted successfully!";
          } else {
              $_SESSION['message'] = "Error: " . mysqli_error($con);
          }
      }
  } else {
      $_SESSION['message'] = "Error: " . mysqli_error($con);
  }

  // Redirect after processing the form
  header("Location: " . $_SERVER['PHP_SELF']);
  exit();
}

// Fetch widget code from the database
$sql = "SELECT code FROM widgets WHERE id = 1 LIMIT 1";
$result = mysqli_query($con, $sql);
if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $widget = $row['code'];
} else {
  $widget = "";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Review</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <style>
      .large-textarea {
        width: 100%;
        resize: vertical;
        box-sizing: border-box;
      }

      .add-widget-form {
        width: 100%;
      }

      .main-container.add-widget {
        width: 100%;
      }

      .body-content {
        display: grid;
        grid-template-columns: 1fr 3fr;
        gap: 20px;
      }
    </style>
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
            <div class="main-content">
              <?php if (isset($message)): ?>
              <div class="alert">
                  <?php echo $message; ?>
              </div>
              <?php endif; ?>
              <div class="main-container add-widget">
                <h2>Add Elfsight Widget HTML</h2>
                <div class="add-widget-form">
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-field field-1 medium">
                      <label for="widget-code">Elfsight Widget Code</label>
                      <textarea id="widget-code" rows="10" name="url" placeholder="Paste your Elfsight widget code here..." required class="large-textarea"><?php echo htmlspecialchars($widget); ?></textarea>
                    </div>
                    <div class="add-widget-actions">
                      <div class="button-container">
                        <button class="add-widget" type="submit">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="preview-container">
                <h2>Preview of the Widget</h2>
                <div id="elfsight-widget"><?php echo $widget; ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
C:\Users\aashi\Downloads\php\php\index.php