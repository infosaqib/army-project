document.addEventListener('DOMContentLoaded', () => {

    //AOS
    AOS.init({
        offset: 110,
        duration: 600,
    });

  

    //Navbar

})   
const overlay = document.getElementById('overlay');
const Menu = document.getElementById('headerMenu');
console.log(Menu)
    function showMenu() {
        overlay.classList.toggle('show');
        Menu.classList.toggle('show');
        document.body.classList.toggle('overflow-y-hidden');
}
function hideMenu() {
    overlay.classList.remove('show');
    Menu.classList.remove('show');
    document.body.classList.remove('overflow-y-hidden');

    }
