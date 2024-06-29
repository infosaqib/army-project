

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navbar</title>
        <link rel="stylesheet" href="./output.css">
</head>
<body>
        <nav id="navbar" class="py-4 px-10 w-full bg-orange-500 flex flex-row justify-between fixed z-10">
                <div class=""><img src="images/logo.webp" alt="error" class="size-12 bg-blue p-1 rounded-full"></div>
                <div id="header"
                    class="flex flex-col  md:flex-row justify-center items-start md:items-center md:gap-x-6 gap-y-8 md:gap-y-0 absolute top-20 right-0 md:static md:opacity-100">
                    <ul
                        class="flex flex-col md:flex-row bg-indigo-700 md:bg-transparent justify-start md:justify-center items-start md:items-center gap-x-4 gap-y-5 md:gap-y-0 py-6 sm:py-10 md:py-0 px-12 sm:px-20 md:px-0 ">
                        <li> <a class="p-3 text-white text-base lg:text-xl tracking-wide font-semibold" href="/"> Home</a></li>
                        <li> <a class="p-3 text-white text-base lg:text-xl  tracking-wide font-semibold" href="/about">
                                About us</a>
                        </li>
                        <!-- <li> <a class="p-3 text-white text-base  tracking-wide font-semibold" href=""> Our
                                Services</a></li> -->
                        <li> <a class="p-3 text-white text-base lg:text-xl  tracking-wide font-semibold" href="/blog">
                                Blog</a></li>
                        <li> <a class="p-3 text-white text-base lg:text-xl   tracking-wide font-semibold" href="/contact">
                                Contact
                                us</a></li>
            
                        <a href="tel:+923003006220"
                            class="px-3 py-2 mx-4 rounded-[100px] bg-transparent md:bg-indigo-950 border-2  border-indigo-950 text-white text-sm md:text-base  tracking-wide font-semibold">Call
                            Now: +923003006220</a>
                    </ul>
                </div>
                <div class="flex place-items-center" id="menubar"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff"
                        class="size-6 cursor-pointer ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
            </nav>
            <script src="./javascripts/script.js"></script>
</body>
</html>