document.addEventListener('DOMContentLoaded', () => {

    //AOS
    AOS.init({
        offset: 110,
        duration: 600,
    });
    
})   
//Navbar
const overlay = document.getElementById('overlay');
const headerMenu = document.getElementById('headerMenu');
console.log(headerMenu)
    function showMenu() {
        overlay.classList.toggle('show');
        headerMenu.classList.toggle('show');
        document.body.classList.toggle('overflow-y-hidden');
}
 function hideMenu() {
    overlay.classList.remove('show');
    headerMenu.classList.remove('show');
    document.body.classList.remove('overflow-y-hidden');

    }

