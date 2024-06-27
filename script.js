function sendMail(){
    const params = {
        name: document.myForm.name.value,
        name: document.myForm.email.value,
        name: document.myForm.message.value,
    }
}

const serviceID = "service_zskwg9n";
const templateID = "";

emailjs.send(serviceID, templateID, params)
.then(
    res => {
        document.myForm.reset();
    }
)
.catch(err => console.log(err))