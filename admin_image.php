<?php
session_start();
// Include the database connection file
include 'db_con.php';

// Handle form submission for uploading a new image
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle file upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $filename = basename($_FILES["file"]["name"]);
        $sql = "INSERT INTO images (filename, filepath) VALUES (?, ?)";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "ss", $filename, $target_file);
        
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = "Image uploaded successfully!";
        } else {
            $_SESSION['message'] = "Error: " . mysqli_error($con);
        }
    } else {
        $_SESSION['message'] = "Sorry, there was an error uploading your file.";
    }

    // Redirect after processing the form
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Handle image deletion
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    // First, get the filepath of the image
    $sql = "SELECT filepath FROM images WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $image = mysqli_fetch_assoc($result);
    
    if ($image) {
        $filepath = $image['filepath'];
        
        // Delete the file from the server
        if (file_exists($filepath) && unlink($filepath)) {
            // If file is successfully deleted, remove the database entry
            $sql = "DELETE FROM images WHERE id = ?";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            
            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['message'] = "Image deleted successfully from database and server!";
            } else {
                $_SESSION['message'] = "Error deleting from database: " . mysqli_error($con);
            }
        } else {
            $_SESSION['message'] = "Error deleting file from server or file not found.";
        }
    } else {
        $_SESSION['message'] = "Image not found in database.";
    }

    // Redirect after deleting
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Fetch images from the database
$sql = "SELECT * FROM images ORDER BY created_at DESC";
$result = mysqli_query($con, $sql);
$images = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <title>Image</title>
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
                            <div class="main-container new-blog">
                                <h2>Post a new Image</h2>
                                <div class="new-post-form blog">
                                    <form class="new-blog-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-field field-1 short">
                                            <label for="post-thumbnail">Post Image</label>
                                            <input id="post-thumbnail" type="file" name="file" required>
                                        </div>
                                        <div class="new-post-actions">
                                            <div class="button-container">
                                                <button class="publish" type="submit">Publish</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>"  name="listForm" class="form scrollX">
                            <div class="formHeader row">
                                <h2 class="text-1 fl">Image's</h2>
                            </div>
                            <div class="table">
                                <div class="row bg-1">
                                    <div class="cell cell-100p text-fff">IMAGE</div>
                                    <div class="cell cell-10 text-center text-fff">DATE</div>
                                    <div class="cell cell-100 text-center text-fff">DELETE</div>
                                </div>
                                <ul>
                                    <?php foreach ($images as $image): ?>
                                    <li class="row">
                                        <div class="cell cell-100p"><?php echo htmlspecialchars($image['filename']); ?></div>
                                        <div class="cell cell-10 text-center"><?php echo date('d/m/Y', strtotime($image['created_at'])); ?></div>
                                        <div class="cell cell-100 text-center">
                                            <div class="edit-remove">
                                                <a href="?delete=<?php echo $image['id']; ?>" class="btnRemove fa fa-remove bg-1 text-fff" onclick="return confirm('Do you really want to remove it ?')"></a>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>