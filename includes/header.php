<!-------- Stylesheets  -------->
<style>
        
#headerMenu.show {
    opacity: 1;
    display: flex;
    z-index: 10;
}

@media (max-width: 800px) {
    #headerMenu {
        opacity: 0;
        display: none
    }
}

@media (min-width> 800px) {
    #menubar {
        opacity: 0;
        display: none
    }
}
</style>
<link rel="stylesheet" href="../dist/output.css">
<link rel="stylesheet" href="../stylesheets/style.css">
<!-- header content can go here -->
<header class="py-4 px-10 w-full bg-gray-200 flex flex-row justify-between fixed top-0 z-10">
<a href="/army/index.php"><img src="images/logo-armydog.webp" alt="error" class="size-12 bg-blue p-1 rounded-full"></a>        
<div id="headerMenu"
class="md:flex flex-col  md:flex-row justify-center items-start md:items-center md:gap-x-6 gap-y-8 md:gap-y-0 absolute top-20 right-0 md:static md:opacity-100">
<ul
class="flex flex-col md:flex-row bg-gray-300 md:bg-transparent justify-start md:justify-center items-start md:items-center gap-x-4 gap-y-5 md:gap-y-0 py-6 sm:py-10 md:py-0 px-12 sm:px-20 md:px-0 ">
<li> <a class="p-3 text-indigo-500 text-base lg:text-lg tracking-wide font-semibold" href="/army/index.php">
        Home</a>
</li>
<li> <a class="p-3 text-indigo-500 text-base lg:text-lg   tracking-wide font-semibold"
        href="/army/about.php">
        About us</a>
</li>
<li> <a class="p-3 text-indigo-500 text-base lg:text-lg   tracking-wide font-semibold"
        href="/army/blog.php">
        Blog</a></li>
<li> <a class="p-3 text-indigo-500 text-base lg:text-lg    tracking-wide font-semibold"
        href="/army/contact.php">
        Contact
        us</a></li>

<a href="tel:+923001690800"
    class="px-3 py-2 mx-4 rounded-[100px] bg-transparent md:bg-indigo-500 border-2  border-indigo-500 text-indigo-500 md:text-white text-sm md:text-base  tracking-wide font-semibold">Call
    Us: 03001690800</a>
</ul>
</div>
<button id="menubar" class="md:hidden button-one" id="button-one" aria-controls="primary-navigation"
aria-expanded="false">
<svg onclick="return showMenu()" class="size-6 cursor-pointer " xmlns="http://www.w3.org/2000/svg"
width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#6366f1" stroke-width="1.5"
stroke-linecap="round" stroke-linejoin="round">
<line x1="3" y1="12" x2="21" y2="12"></line>
<line x1="3" y1="6" x2="21" y2="6"></line>
<line x1="3" y1="18" x2="21" y2="18"></line>
</svg>
</button>
</header>

   <!-- OVERLAY -->
   <div id="overlay" onclick="return hideMenu()"></div>

 <!-- Call -->
 <a class="fixed z-[3] bottom-20 size-12 p-[7px] left-4 bg-green-400 rounded-lg flex justify-center items-center"
    href="tel:+923001690800">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class=" size-12 bi bi-telephone-fill"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
    </svg>
</a>
<!-- Whatsapp -->

<a class="fixed z-[3] bottom-4 left-4 size-12"
    href="https://wa.me/+923003006220">
    <svg class="wow flash bg-[#1dcf1d] hover:bg-[#09b709] rounded-xl" data-wow-delay="5s" data-wow-duration="2s"
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
        style="visibility: visible; animation-duration: 2s; animation-delay: 5s; animation-name: flash;">
        <path
            d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
            fill-rule="evenodd" fill="#fff"></path>
    </svg>
</a>
<!-- SCRIPTS -->
<script src="../js/script.js"></script>
<script src="../js/mail.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript">
    (function () {
        emailjs.init("hj0ktJGt8eMelJAtC");
    })();
</script>
