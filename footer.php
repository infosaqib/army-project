<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body>
    


<footer class="py-16 px-6 sm:px-14 bg-indigo-950 flex flex-col lg:flex-row lg:justify-evenly items-center">
    <div data-aos="fade-up">
        <h2 class="my-4 text-white font-bold text-2xl sm:text-6xl tracking-wider">Contact us</h2>
        <div class="py-8">
            <p class="my-3 text-orange-500 text-base sm:text-xl font-semibold tracking-widest">+923003006220</p>
            <p class="my-3 text-orange-500 text-base sm:text-xl font-semibold tracking-widest">+923332874135</p>
            <p class="my-3 text-orange-500 text-base sm:text-xl font-semibold tracking-widest">+923213096661</p>
            <p class="my-3 text-orange-500 text-base sm:text-xl font-semibold tracking-widest">+923456826761</p>
        </div>
        <div data-aos="fade-up">
            <p class="text-gray-400  text-sm sm:text-lg">wasimakram14071992@gmail.com</p>
        </div>
    </div>
    <form data-aos="fade-up" name="myForm" onsubmit="return sendMail()" class="my-4 py-8 flex flex-col gap-y-6">
        <div class="flex flex-col lg:flex-row gap-4">
            <div> <input type="text" name="" id="" placeholder="Name" required
                    class=" p-4 lg-p-4 rounded-lg outline-none placeholder:text-indigo-950 text-sm sm:text-lg font-semibold">
            </div>
            <div> <input type="email" name="" id="" placeholder="Email address" required
                    class=" p-4 rounded-lg outline-none placeholder:text-indigo-950 text-sm sm:text-lg font-semibold">
            </div>
        </div>
        <textarea rows="6" cols="12" name="" id="" placeholder="Message" required spellcheck="true"
            class="px-4 py-2 rounded-lg outline-none placeholder:text-indigo-950 text-sm sm:text-lg font-semibold"></textarea>
        <input type="submit" value="SUBMIT"
            class="bg-orange-500 hover:bg-orange-600 py-4 text-white text-sm sm:text-lg font-semibold tracking-widest cursor-pointer rounded-lg transition-all">
    </form>
</footer></body>
</html>