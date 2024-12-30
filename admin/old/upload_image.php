<?php
error_reporting(0);
ini_set('display_errors', 0);

header('Content-Type: application/json');

if (!isset($_FILES['image'])) {
    die(json_encode([
        'success' => false,
        'message' => 'No file uploaded'
    ]));
}

$upload_dir = '../uploads/';

if (!file_exists($upload_dir)) {
    if (!mkdir($upload_dir, 0777, true)) {
        die(json_encode([
            'success' => false,
            'message' => 'Failed to create upload directory'
        ]));
    }
}

$file = $_FILES['image'];
$file_extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
$allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

if (!in_array($file_extension, $allowed_extensions)) {
    die(json_encode([
        'success' => false,
        'message' => 'Invalid file type'
    ]));
}

$file_name = uniqid() . '.' . $file_extension;
$target_file = $upload_dir . $file_name;

if (move_uploaded_file($file['tmp_name'], $target_file)) {
    die(json_encode([
        'success' => true,
        'imageUrl' => $target_file
    ]));
} else {
    die(json_encode([
        'success' => false,
        'message' => 'Failed to move uploaded file'
    ]));
}
?>