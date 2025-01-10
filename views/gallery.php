<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="flex flex-col items-center justify-center text-center gap-4 p-4">
            <h2 class="my-4 text-teal-500 font-bold text-2xl sm:text-5xl tracking-wider">Army Dog Center Gallery </h2>
            <h3 class="text-lg sm:text-xl text-gray-800 font-semibold text-center">Contact us : 03003006220 / 03453406220</h3>
            <p class="text-sm text-gray-600 w-[75%] text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus a, alias ad ducimus porro voluptates animi facilis tempore voluptatum atque consequuntur quaerat sit asperiores repudiandae nobis officiis sunt veniam. Odit pariatur dolore sit! Dicta, blanditiis nesciunt.</p>
        </div>
        <div class="grid py-8 px-16 gap-1 gallery" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr))">
            <img class="object-cover w-full" src="public/images/dog-1.jpeg" alt="">
            <img class="object-cover w-full" src="public/images/dog-2.jpeg" alt="">
            <img class="object-cover w-full" src="public/images/dog-3.jpeg" alt="">
        </div>
    </main>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>