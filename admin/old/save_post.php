<?php
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars($_POST['title']);
    $content = $_POST['content'] ?? '';
    $image = '';
    
    if (!empty($content)) {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($content);
        $images = $dom->getElementsByTagName('img');
        
        if ($images->length > 0) {
            $imagePath = $images->item(0)->getAttribute('src');
            $image = basename($imagePath);
            $content = str_replace('uploads/', '../uploads/', $content);
        }
    }
    
    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');
    
    $stmt = $conn->prepare("INSERT INTO blog (title, description, image, created_at, updated_at) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$title, $content, $image, $created_at, $updated_at]);
    
    header("Location: panel.php?" . ($stmt ? "success=1" : "error=1"));
    exit;
}
?>