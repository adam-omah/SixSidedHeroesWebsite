'use strict'

const form = document.getElementById("js-contactForm");

// form.action = "mailto:support@digitalhammock.com"

window.submitForm = () => {
    form.submit();
}

//listens for submit button
form.addEventListener('submit', (event) => {


    event.preventDefault()
    event.stopPropagation()
    //adds a class to show validation sucesss
    form.classList.add('was-validated')

    // if form is valid
    if (form.checkValidity()) {
        //call recaptcha for check and submission
        grecaptcha.execute();
        //recapcha calls on
    }

}, false)
