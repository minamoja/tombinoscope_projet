const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})

// const message =
//     "Votre message a été envoyé ! Nous vous répondrons dès que possible.";

// document.getElementById("contactForm");
// document.addEventListener("submit", function (event) {
//     event.preventDefault();
//     alert(message);
// });