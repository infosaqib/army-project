<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="flex flex-col items-center justify-center text-center gap-4 p-4">
            <h2 class="my-4 text-teal-500 font-bold text-2xl sm:text-5xl tracking-wider">Get in touch </h2>
            <h3 class="text-lg sm:text-xl text-gray-800 font-semibold text-center">Contact us : 03003006220 / 03453406220</h3>
            <p class="mb-4 leading-relaxed text-gray-600 text-sm w-[75%] text-center">For inquiries or to learn more about our services, please reach out to us today.</p>
        </div>


        <div class="py-8 px-6 sm:px-14 flex flex-col lg:flex-row lg:justify-evenly items-center">
            <div data-aos="fade-up">
                <div class="py-8 px-6">
                    <p class="my-3 text-gray-600 text-xl sm:text-2xl font-semibold tracking-widest">03003006220</p>
                    <p class="my-3 text-gray-600 text-xl sm:text-2xl font-semibold tracking-widest">03332874135</p>
                    <p class="my-3 text-gray-600 text-xl sm:text-2xl font-semibold tracking-widest">03213096661</p>
                    <p class="my-3 text-gray-600 text-xl sm:text-2xl font-semibold tracking-widest">03456826761</p>
                    <a href="mailto:wasimakram14071992" class="flex items-center justify-start gap-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-8 shrink-0 text-gray-900" fill="none"
                        viewBox="0 0 24 24" stroke="#687280" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    
                    <span class="text-gray-500  text-base sm:text-xl">wasimakram14071992@gmail.com</span>
                </a>
            </div>
            </div>
            <form action="" class="my-8">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-x-8">
                    <div class="relative mb-6 ">
                        <input type="text" id="name" name="name"
                            class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none focus:border-teal-500 "
                            placeholder="Name..." required="Enter your name">
                    </div>
                    <div class="relative mb-6">
                        <input type="text" id="email" name="email"
                            class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none focus:border-teal-500"
                            placeholder="Email Address..." required="Enter your email address">
                    </div>
                </div>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-x-8">
                    <div class="relative mb-6">
                        <input type="text" id="number" name="number"
                            class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none focus:border-teal-500"
                            placeholder="Phone Number..." required="Enter your Phone number">
                    </div>
                    <div class="relative mb-6">
                        <input type="text" id="address" name="address"
                            class="block w-full h-11 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-full placeholder-gray-400 focus:outline-none focus:border-teal-500"
                            placeholder="City , Country..." required="Enter your address">
                    </div>
                </div>
                <div class="relative mb-6">
                    <textarea type="text" id="message" name="message"
                        class="block w-full h-40 px-5 py-2.5 bg-white leading-7 resize-none text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-2xl placeholder-gray-400 focus:outline-none focus:border-teal-500"
                        placeholder="Your Message..." required="Enter your message"></textarea>
                </div>
                <div class="flex items-center justify-center">
                    <input type="submit"
                        class="cursor-pointer w-52 h-12 bg-teal-500 hover:bg-teal-700 transition-all duration-700 rounded-full shadow-xs text-white text-base font-semibold leading-6" value="Send Message">
                </div>
            </form>
        </div>

    </main>
    <!-- JAVASCRIPT -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="mail.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function () {
            emailjs.init("hj0ktJGt8eMelJAtC");
        })();
    </script>    
</body>

</html>