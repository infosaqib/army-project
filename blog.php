<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-------- META TAGS  -------->
  <meta name="description" content="03001690800 | 03332874135 | Our mission is to help you by using our trained dogs to find evidence
    and clues. You can rely on us because your safety is our top priority. We ensure we are available around the clock,
    anywhere and anytime you need us.">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://armydogcenterpk.com/blog">

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="Blog |03001690800 | 03332874135">
  <meta property="og:description" content="03001690800 | 03332874135 | Our mission is to help you by using our trained dogs to find
    evidence and clues. You can rely on us because your safety is our top priority. We ensure we are available around
    the clock, anywhere and anytime you need us.">
  <meta property="og:url" content="https://armydogcenterpk.com/blog">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://armydogcenterpk.com/images/logo.webp">
  <title>Blog |03001690800 | 03332874135</title>
  <!-- Favicon link -->
  <link rel="icon" href="https://armydogcenterpk.com/images/logo.webp" type="image/x-icon">
  <link rel="shortcut icon" href="https://armydogcenterpk.com/images/logo.webp" type="image/x-icon">
  <!------- JSON - LD ---------->
  <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "WebSite",
              "name": "Blog | 03001690800 | 03332874135",
              "url": "https://armydogcenterpk.com/blog",
              "potentialAction": {
                "@type": "SearchAction",
                "target": "https://armydogcenterpk.com/search?query={search_term_string}",
                "query-input": "required name=search_term_string"
              }
            }
            </script>
  <!-------- Stylesheets  -------->
  <link rel="stylesheet" href="dist/output.css">
  <link rel="stylesheet" href="stylesheets/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

</head>

<body>
  <div class="overflow-hidden w-full" id="container">
  <section id="" class=" flex flex-col items-center justify-center px-10 py-6">
    <h1 class="mb-6 text-left text-indigo-500 text-6xl text-center font-semibold">OUR BLOG</h1>
    <p class="text-lg text-gray-400 font-semibold text-center w-1/2">Discover the dedicated services of our Army Dog Center, showcasing the role of trained dogs in security, search and rescue, and defense operations.</p>

  </section>
 
   <section class="grid gap-4 px-12 py-8" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
    <?php
    include 'config/config.php';

    try {
        $stmt = $pdo->query("SELECT id, title, description, image, url FROM blog ORDER BY created_at DESC");
        while ($blog = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $title = htmlspecialchars($blog['title']);
            $description = strip_tags($blog['description']); // Remove HTML from content
            $image = htmlspecialchars($blog['image']);
            $url = $blog['url'] ?? '#';
            ?>
            <article class="overflow-hidden rounded-lg border border-gray-500 bg-white shadow-sm">
                <?php if ($image): ?>
                     <img alt="<?= $title ?>" src="admin/uploads/<?= $image ?>" class="h-52 w-full object-fill" />
                <?php endif; ?>
                
                <div class="p-4 sm:p-6">
                    <h3 class="text-lg font-medium text-gray-900"><?= $title ?></h3>
                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                        <?= substr($description, 0, 150) . '...' ?>
                    </p>
                    <a href="blogpost.php?id=<?= $blog['id'] ?>" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
    Read more
    <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">→</span>
</a>
                </div>
            </article>
            <?php
        }
    } catch(PDOException $e) {
        echo "<div class='text-red-500'>Error loading blog posts</div>";
    }
    ?>
</section>

  <section class="flex flex-col  py-16 px-6 sm:px-14 gap-y-12">
    <div data-aos="fade-up"
      class="grid grid-cols-1 sm:grid-cols-2 lg:flex lg:flex-row gap-6 lg:gap-12 p-6 justify-center items-center place-items-center">
      <img class="h-28 sm:h-44" src="images/dog-12.webp" alt="image">
      <img class="h-28 sm:h-44" src="images/dog-5.webp" alt="image">
      <img class="h-28 sm:h-44" src="images/dog-9.webp" alt="image">
      <img class="h-28 sm:h-44" src="images/dog-1.webp" alt="image">
    </div>
  </section>
  

  </div>
 <!-- SCRIPTS -->
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script src="https://cdn.tailwindcss.com"></script>
 <script type="text/javascript">
     (function () {
         emailjs.init("hj0ktJGt8eMelJAtC");
     })();
 </script>
</body>

</html>