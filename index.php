<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <link rel="stylesheet" href="./output.css">
    <title>Army Dog Center PK</title>
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">


    <style>
       
    </style>
</head>

<body>
    <!-- NAVBAR --> <?php include('header.php')?>
        <section id="hero" class="bg-indigo-950 flex flex-col items-center justify-center gap-y-4 py-16 pt-24 px-8">
            <h2 data-aos="fade-up" class="max-w-[60em] text-white text-xl sm:text-4xl">Army Dog Center PK</h2>
            <p data-aos="fade-up" class="max-w-[60em] text-white text-base lg:text-xl text-center">The Army Dog Center
                in
                Pakistan assists in emergencies such as robberies, murders, kidnappings, and other incidents. Our
                mission is
                to help you by using our trained dogs to find evidence and clues. You can rely on us because your safety
                is
                our top priority. We ensure we are available around the clock, anywhere and anytime you need us. Your
                satisfaction is important to us, and we have a dedicated team working to assist you.</p>
            <!-- <a href=""
            class="max-w-[60em] py-2 px-4 m-4 text-white text-lg rounded-md border border-white hover:border-transparent hover:bg-slate-100/40 transition-all cursor-pointer ">Click
            here</a> -->
        </section>

        <!-- MAIN --> <?php include('main.php')?>

            <section class="grid grid-cols-1 lg:grid-cols-2 bg-indigo-950  gap-x-12 justify-center items-center">
                <div data-aos="fade-right" class="flex flex-col gap-5 py-16 px-6 sm:px-14">
                    <h2 class="text-orange-500 font-semibold text-2xl sm:text-6xl">Why Army Dogs?</h2>
                    <p class="text-white text-base lg:text-xl leading-loose">You can trust our dogs because they are not
                        merely
                        seen as animals but valued and respected as soldiers on four legs. These dogs possess
                        exceptional skills
                        and abilities to search for evidence in cases of murder, theft, kidnapping, and other incidents.
                        Each
                        dog is trained for specific tasks, with remarkable capabilities and an incredible sense of smell
                        to
                        detect bombs before they detonate. Their contributions are invaluable, making them precious
                        assets.
                        These dogs perform like soldiers in every respect and are crucial in warfare. They are trained
                        to detect
                        decomposition, allowing them to locate body parts, bones, blood, and tissues. Our drug detection
                        dogs
                        use an aggressive alert mechanism to identify the presence of drugs by smell, making them an
                        essential
                        part of the armed forces.</p>
                </div>
                <div data-aos="fade-left" class="flex justify-center items-center">
                    <img class="h-48 sm:h-64" src="images/dog-2.webp" alt="image">
                </div>
            </section>
            <section class="text-gray-600 body-font bg-indigo-950  ">
                <div data-aos="fade-up" class="container px-5 py-24 mx-auto">
                    <div class="flex flex-wrap -m-4 text-center">
                        <div class="p-4 sm:w-1/4 w-1/2">
                            <h2 class="title-font font-medium sm:text-4xl tracking-wider text-3xl text-orange-500">2.7K
                            </h2>
                            <p class="leading-relaxed text-white text-xl">Users</p>
                        </div>
                        <div class="p-4 sm:w-1/4 w-1/2">
                            <h2 class="title-font font-medium sm:text-4xl tracking-wider text-3xl text-orange-500">1.8K
                            </h2>
                            <p class="leading-relaxed text-white text-xl">Subscribes</p>
                        </div>
                        <div class="p-4 sm:w-1/4 w-1/2">
                            <h2 class="title-font font-medium sm:text-4xl tracking-wider text-3xl text-orange-500">100%
                            </h2>
                            <p class="leading-relaxed text-white text-xl">Satisfaction</p>
                        </div>
                        <div class="p-4 sm:w-1/4 w-1/2">
                            <h2 class="title-font font-medium sm:text-4xl tracking-wider text-3xl text-orange-500">4
                            </h2>
                            <p class="leading-relaxed text-white text-xl">Awards</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- LOCAL --><?php include('local.php')?>

                <!-- GALLERY --><?php include('gallery.php')?>
                <!-- FOOTER --><?php include('footer.php')?>

                    <!-- OVERLAY -->
                    <div id="overlay" ></div>

                    <script type="text/javascript"
                    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
                        </script>
                    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                    <script type="text/javascript">
                        AOS.init({
                            offset: 120,
                            duration: 1000,
                        });
                        
                        (function () {
                            emailjs.init({
                                publicKey: "hj0ktJGt8eMelJAtC",
                            });
                        })();
                        
                        </script>
                    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
                    <script src="./javascripts/script.js"></script>
                </body>

</html>