document.addEventListener('DOMContentLoaded', () => {

    //AOS
    AOS.init({
        offset: 120,
        duration: 750,
    });

    // Email JS
    console.log(document.myForm)
    function sendMail() {
        const params = {
            name: document.myForm.name.value,
            email: document.myForm.email.value,
            message: document.myForm.message.value,
        }


    const serviceID = "service_92xlg96";
    const templateID = "template_vjk00vz";

    emailjs.send(serviceID, templateID, params)
        .then(
            res => {
                document.myForm.reset();
            }
        )
        .catch(err => console.log(err))
    }

    //Navbar

    // console.log(overlay, Header)
})   
 const overlay = document.getElementById('overlay');
    const Header = document.getElementById('header');
    function showMenu() {
        overlay.classList.toggle('show');
        Header.classList.toggle('show');
        document.body.classList.toggle('overflow-y-hidden');
}
function hideMenu() {
    overlay.classList.remove('show');
    Header.classList.remove('show');
    document.body.classList.remove('overflow-y-hidden');

    }
