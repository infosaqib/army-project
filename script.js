// Email JS
// function sendMail(){
//     const params = {
//         name: document.myForm.name.value,
//         name: document.myForm.email.value,
//         name: document.myForm.message.value,
//     }
// }

// const serviceID = "service_zskwg9n";
// const templateID = "";

// emailjs.send(serviceID, templateID, params)
// .then(
//     res => {
//         document.myForm.reset();
//     }
// )
// .catch(err => console.log(err))


//Navbar
const overlay = document.getElementById('overlay');
const Header = document.getElementById('header');
console.log(overlay, Header)

function showMenu(){
overlay.classList.toggle('show');
Header.classList.toggle('show');

}
function hideMenu(){
overlay.classList.remove('show');
Header.classList.remove('show');

}