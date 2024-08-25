<?php
session_start();
// Include the database connection file
include 'db_con.php';

$sql = "SELECT * FROM blogs ORDER BY created_at DESC";
$result = mysqli_query($con, $sql);
$blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    
    $sql = "INSERT INTO blogs (title, content, thumbnail) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $title, $content, $target_file);
    
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['message'] = "Blog post created successfully!";
    } else {
        $_SESSION['message'] = "Error: " . mysqli_error($con);
    }

    // Redirect after form submission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    // First, get the thumbnail path of the blog post
    $sql = "SELECT thumbnail FROM blogs WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $blog = mysqli_fetch_assoc($result);
    
    if ($blog) {
        $thumbnail_path = $blog['thumbnail'];
        
        // Delete the thumbnail file from the server
        if (file_exists($thumbnail_path) && unlink($thumbnail_path)) {
            // If file is successfully deleted, remove the database entry
            $sql = "DELETE FROM blogs WHERE id = ?";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            
            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['message'] = "Blog post and thumbnail deleted successfully!";
            } else {
                $_SESSION['message'] = "Error deleting blog post from database: " . mysqli_error($con);
            }
        } else {
            $_SESSION['message'] = "Error deleting thumbnail file or file not found. Blog post removed from database.";
            
            // Remove the database entry even if the file deletion fails
            $sql = "DELETE FROM blogs WHERE id = ?";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
        }
    } else {
        $_SESSION['message'] = "Blog post not found in database.";
    }

    // Redirect after deletion
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Check for messages in the session
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']); // Clear the message after displaying
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog</title>
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
                                <h2>Post a new blog</h2>
                                <div class="new-post-form blog">
                                    <form class="new-blog-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-field field-1 medium">
                                            <label for="post-title">Blog Title</label>
                                            <input id="post-title" type="text" name="title" required>
                                        </div>
                                        <div class="form-field field-2 medium">
                                            <label for="post-description">Blog Description</label>
                                            <textarea id="post-description" type="text" rows="4" name="content" required></textarea>
                                        </div>
                                        <div class="form-field field-3 short">
                                            <label for="post-thumbnail">Blog Thumbnail</label>
                                            <input id="post-thumbnail" type="file" name="file" accept="image/*" required>
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
                        <form method="GET" action=""  name="listForm" class="form scrollX">
                            <div class="formHeader row">
                                <h2 class="text-1 fl">Blog's</h2>
                            </div>
                            <div class="table">
                                <div class="row bg-1">
                                    <div class="cell cell-100p text-fff">BLOG</div>
                                    <div class="cell cell-10 text-center text-fff">DATE</div>
                                    <div class="cell cell-100 text-center text-fff">EDIT</div>
                                </div>
                                <ul>
                                    <?php foreach ($blogs as $blog): ?>
                                    <li class="row">
                                        <div class="cell cell-100p"><?php echo htmlspecialchars($blog['title']); ?></div>
                                        <div class="cell cell-10 text-center"><?php echo date('d/m/Y', strtotime($blog['created_at'])); ?></div>
                                        <div class="cell cell-100 text-center">
                                            <div class="edit-remove">
                                                <a href="?delete=<?php echo $blog['id']; ?>" class="btnRemove fa fa-remove bg-1 text-fff" onclick="return confirm('Do you really want to remove it ?')"></a>
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