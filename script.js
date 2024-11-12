let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x')
    navbar.classList.toggle('active');
};

// ---------Push Message-------
const scriptURL = 'https://script.google.com/macros/s/AKfycbwtPNNueFzMHkSufOo00gHG2Q3BrYMyJLO-kbpyauuLssGVKQKoruabD5yQqiIy6bQX/exec';
const form = document.forms['submit-to-google-sheet'];
const msg = document.getElementById("msg");

form.addEventListener('submit', e => {
  e.preventDefault();
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => {
      msg.innerHTML = "Message sent successfully";
      msg.classList.add("success-message", "show"); // Add classes to style and show the message
      
      setTimeout(function(){
          msg.classList.remove("show"); // Hide message after 5 seconds
          msg.innerHTML = ""; // Clear text
      }, 5000);
      
      form.reset();
    })
    .catch(error => console.error('Error!', error.message));
});

