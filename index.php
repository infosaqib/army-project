<?php
$request = $_SERVER['REQUEST_URI'];

// Remove any query strings
$request = parse_url($request, PHP_URL_PATH);

// Remove project directory name from the request if it exists
$projectDir = dirname($_SERVER['SCRIPT_NAME']);
$request = str_replace($projectDir, '', $request);

// Include header before any content
require __DIR__ . '/includes/header.php';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . '/home.php';
        break;
        
    case '/blog':
        require __DIR__ . '/blog.php';
        break;

    case '/services':
        require __DIR__ . '/services.php';
        break;

    case '/about':
        require __DIR__ . '/about.php';
        break;

    case '/gallery':
        require __DIR__ . '/gallery.php';
        break;
        
    case '/contact':
        require __DIR__ . '/contact.php';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
}

// Include footer after content
require __DIR__ . '/includes/footer.php';
?>