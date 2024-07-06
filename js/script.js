document.addEventListener('DOMContentLoaded', () => {

    //AOS
    AOS.init({
        offset: 110,
        duration: 600,
    });

  

    //Navbar

})   
const overlay = document.getElementById('overlay');
const Header = document.getElementById('header');
console.log(Header)
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
