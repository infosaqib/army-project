
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="flex flex-col items-center justify-center text-center gap-4 p-4">
        <h2 class="my-4 text-teal-500 font-bold text-2xl sm:text-5xl tracking-wider uppercase">Our blog </h2>
        <h3 class="text-lg sm:text-xl text-gray-800 font-semibold text-center">Contact us : 03003006220 / 03453406220</h3>
        <p class="mb-4 leading-relaxed text-gray-600 text-sm w-[75%] text-center">Stay updated with our latest news, training tips, and success stories from the Army Dog Center.</p>
    </div>
    <section class="p-6 flex flex-row-reverse flex-wrap items-center justify-center gap-8 overflow-x-hidden">
        <!-- BLOG POST TEMPLATE -->
        <?php
        global $pdo;
include 'config/config.php';

try {
    $stmt = $pdo->query("SELECT id, title, description, image, url, created_at FROM blog ORDER BY created_at DESC");
    while ($blog = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Format the date
        $date = new DateTime($blog['created_at']);
        $formatted_date = $date->format('j F, Y'); // Will output like "12 December, 2024"
        
        // Strip HTML tags from description and limit length
        $description = strip_tags($blog['description']);
        $description = (strlen($description) > 200) ? substr($description, 0, 200) . '...' : $description;
        ?>
        <div class="bg-gray-100 h-full w-[550px]">
            <div class="flex justify-center items-center">
                <?php if ($blog['image']): ?>
                    <img class="object-cover h-[300px]" src="admin/uploads/<?= htmlspecialchars($blog['image']) ?>" alt="<?= htmlspecialchars($blog['title']) ?>">
                <?php endif; ?>
            </div>
            <div class="px-6 py-4 border">
                <h2 class="my-4 text-2xl font-semibold text-gray-800"><?= htmlspecialchars($blog['title']) ?></h2>
                <hr>
                <p class="my-4 text-sm font-semibold text-gray-500 dark:text-gray-400 flex flex-row items-center gap-2">
                    BLOG
                    <span>
                        <svg fill="none" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <clipPath id="a">
                                <path d="m0 0h24v24h-24z" />
                            </clipPath>
                            <g clip-path="url(#a)" clip-rule="evenodd" fill="#fff" stroke="#9ca3af" fill-rule="evenodd">
                                <path d="m16 2.41694v4.16668c0 .23021.224.41667.5.41667s.5-.18646.5-.41667v-4.16668c0-.2302-.224-.41667-.5-.41667s-.5.18647-.5.41667z" />
                                <path d="m7 2.41694v4.16668c0 .23021.224.41667.5.41667s.5-.18646.5-.41667v-4.16668c0-.2302-.224-.41667-.5-.41667s-.5.18647-.5.41667z" />
                                <path d="m3 6.47v14.06c0 1.364 1.103 2.47 2.463 2.47h13.074c1.36 0 2.463-1.106 2.463-2.47v-14.06c0-1.364-1.103-2.47-2.463-2.47-3.282 0-9.792 0-13.074 0-1.36 0-2.463 1.106-2.463 2.47zm5 10.53c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm4 0c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm4 0c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm-8-4c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm4 0c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm4 0c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm4.053-3h-16.106v-3.53c0-.84.679-1.51999 1.516-1.51999h13.074c.837 0 1.516.67999 1.516 1.51999z" />
                            </g>
                        </svg>
                    </span>
                    <span><?= $formatted_date ?></span>
                </p>
                <p class="my-4 text-sm text-gray-500"><?= $description ?></p>
                <a href="blogpost.php?id=<?= $blog['id'] ?>" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
    Read more
    <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">→</span>
</a>
            </div>
        </div>
        <?php
    }
} catch(PDOException $e) {
    echo "<div class='text-red-500'>Error loading blog posts: " . $e->getMessage() . "</div>";
}
?>
    </section>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>