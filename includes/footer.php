    <!-------- Stylesheets  -------->
 
  
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- Footer content goes here -->
<footer class="py-16 px-6 sm:px-14 bg-gray-100 flex flex-col lg:flex-row lg:justify-evenly items-center">
<div data-aos="fade-up">
    <h2 class="my-4 text-indigo-500 font-bold text-3xl sm:text-6xl tracking-wider">Contact us</h2>
    <div class="py-8">
        <p class="my-3 text-indigo-600 text-xl sm:text-2xl font-semibold tracking-widest">03003006220</p>
        <p class="my-3 text-indigo-600 text-xl sm:text-2xl font-semibold tracking-widest">03332874135</p>
        <p class="my-3 text-indigo-600 text-xl sm:text-2xl font-semibold tracking-widest">03213096661</p>
        <p class="my-3 text-indigo-600 text-xl sm:text-2xl font-semibold tracking-widest">03456826761</p>
    </div>
    <div data-aos="fade-up">
        <p class="text-gray-500  text-base sm:text-xl">info@armydogcenterpk.com</p>
    </div>
</div>
<div name="myForm" data-aos="fade-up" class="my-4 py-8 flex flex-col gap-y-6">
    <div class="flex flex-col lg:flex-row gap-4">
        <div> <input type="text" name="name" id="name" placeholder="Name" required
                class=" p-4 lg-p-4 rounded-lg outline-none placeholder:text-indigo-950 text-sm sm:text-lg font-semibold">
        </div>
        <div> <input type="email" name="email" id="email" placeholder="Email address" required
                class=" p-4 rounded-lg outline-none placeholder:text-indigo-950 text-sm sm:text-lg font-semibold">
        </div>
    </div>
    <textarea rows="6" cols="12" name="message" id="message" placeholder="Message" required spellcheck="true"
        class="px-4 py-2 rounded-lg outline-none placeholder:text-indigo-950 text-sm sm:text-lg font-semibold"></textarea>
    <button onclick="sendMail()"
        class="bg-indigo-500 hover:bg-indigo-600 py-4 text-white text-sm sm:text-lg font-semibold tracking-widest cursor-pointer rounded-lg transition-all">SUBMIT</button>
</div>
</footer>
 <!-- SCRIPTS  -->
<script src="./js/script.js"></script>
<script src="./js/mail.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script type="text/javascript">
    (function () {
        emailjs.init("hj0ktJGt8eMelJAtC");
    })();
</script>
