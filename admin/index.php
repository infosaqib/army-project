<html>  
<head>  
    <title>Rich text Editor</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="stylesheets/style.css">
</head><?php 
include('../config/config.php');

if(isset($_POST['submit'])) {
    try {
        $title = $_POST['title'];
        $description = $_POST['content'];
        $image = '';
        
        // Modified regex pattern to be more flexible with paths
        if(preg_match('/<img[^>]+src=["\'](?:[^"\']*\/)?uploads\/([^"\']+)["\']/', $description, $matches)) {
            $image = $matches[1];
        }
        
        // Debug line - add this to check what's being matched
        error_log("Image matched: " . print_r($matches, true));
        
        $created_at = date('Y-m-d H:i:s');
        
        $query = "INSERT INTO blog (title, description, image, url, created_at) VALUES (:title, :description, :image, NULL, :created_at)";
        $stmt = $pdo->prepare($query);
        
        $stmt->execute([
            ':title' => $title,
            ':description' => $description,
            ':image' => $image,
            ':created_at' => $created_at
        ]);
        
        // Debug line - add this to verify the image value
        error_log("Image value being inserted: " . $image);
        
        $msg = "Data Inserted successfully!";
    } catch(PDOException $e) {
        $msg = "Error: " . $e->getMessage();
    }
}
?>
<body>
<div class="container">
  <h3 align="center">Rich text Editor</h3>
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
  <div class="error"><?php if(!empty($msg)){ echo $msg; } ?></div>
  </div>
</div> 
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="javascripts/script.js"></script>
 </body>  
</html>  


