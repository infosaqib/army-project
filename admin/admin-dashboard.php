<?php
// Start session and include authentication check
session_start();

// Redirect to login.php if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

include('../config/config.php');

if (isset($_POST['submit'])) {
    try {
        $title = $_POST['title'];
        $description = $_POST['content'];
        $image = '';
        
        // Update image `src` paths in the description to include `admin/uploads/`
        $description = preg_replace_callback(
            '/<img[^>]+src=["\'](?:uploads\/)([^"\']+)["\']/',
            function ($matches) {
                return '<img src="admin/uploads/' . $matches[1] . '"';
            },
            $description
        );
        
        // Extract the first image src for saving in the `image` column
        if (preg_match('/<img[^>]+src=["\']admin\/uploads\/([^"\']+)["\']/', $description, $matches)) {
            $image = $matches[1];
        }
        
        $created_at = date('Y-m-d H:i:s');
        
        // Insert the blog data into the database
        $query = "INSERT INTO blog (title, description, image, url, created_at) VALUES (:title, :description, :image, NULL, :created_at)";
        $stmt = $pdo->prepare($query);
        
        $stmt->execute([
            ':title' => $title,
            ':description' => $description,
            ':image' => $image,
            ':created_at' => $created_at
        ]);
        
        $msg = "Data inserted successfully!";
    } catch (PDOException $e) {
        $msg = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rich Text Editor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>
    <div class="container">
    <a href="logout.php" ><button class="btn btn-primary pull-right">Logout</button></a>
        <h3 align="center">Rich Text Editor</h3>
        <p class="intro-text">Create engaging content with our feature-rich editor. Add formatting and structure to make your posts stand out.</p>
        <br>
        <div class="box">
            <form method="post">
                <input type="text" name="title" class="title-input" placeholder="Enter blog title" required>
                
                <div class="form-group">
                    <textarea id="content" name="content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
            <div class="error"><?php if (!empty($msg)) { echo $msg; } ?></div>
        </div>
    </div>
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script> -->
    <script src="javascripts/ckeditor.js"></script>
    <script src="javascripts/script.js"></script>
</body>
</html>
