document.addEventListener('DOMContentLoaded', () => {

    //AOS
    AOS.init({
        offset: 110,
        duration: 600,
    });

  

    //Navbar

    // console.log(overlay, Header)
})   
 const overlay = document.getElementById('overlay');
    const Header = document.getElementById('header');
    function showMenu() {
        overlay.classList.toggle('show');
        Header.classList.toggle('flex');
        document.body.classList.toggle('overflow-y-hidden');
}
function hideMenu() {
    overlay.classList.remove('show');
    Header.classList.remove('show');
    document.body.classList.remove('overflow-y-hidden');

    }
