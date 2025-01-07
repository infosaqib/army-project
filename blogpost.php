<?php
include 'config/config.php';
include 'template.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Prepare and execute the query to fetch the blog post
    $stmt = $conn->prepare("SELECT * FROM blog WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    $post = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($post) {
        // Output the blog post
        echo "<h1>" . htmlspecialchars($post['title']) . "</h1>";
        echo "<p>" . nl2br(htmlspecialchars($post['description'])) . "</p>";
        echo "<small>Posted on: " . $post['created_at'] . "</small>";
    } else {
        echo "Blog post not found.";
    }
} else {
    echo "Invalid post ID.";
}
?>
