const menuIcon = document.getElementById('menu-icon');
const navbar = document.querySelector('.navbar');

menuIcon.addEventListener('click', () => {
  navbar.classList.toggle('active');
});

menuIcon.onclick = () => {
  menuIcon.classList.toggle('bx-x');
  navbar.classList.toggle('active');
};

// ---------Push Message-------
const scriptURL = 'https://script.google.com/macros/s/AKfycbwtPNNueFzMHkSufOo00gHG2Q3BrYMyJLO-kbpyauuLssGVKQKoruabD5yQqiIy6bQX/exec';
const form = document.forms['submit-to-google-sheet'];
const msg = document.getElementById("msg");

form.addEventListener('submit', e => {
  e.preventDefault();
  fetch(scriptURL, { method: 'POST', body: new FormData(form) })
    .then(response => {
      msg.innerHTML = "Message sent successfully";
      msg.classList.add("success-message", "show"); // Add classes to style and show the message

      setTimeout(function () {
        msg.classList.remove("show"); // Hide message after 5 seconds
        msg.innerHTML = ""; // Clear text
      }, 5000);

      form.reset();
    })
    .catch(error => console.error('Error!', error.message));
});

// ---------Set Background Image (GIF)-------
function getBackgroundImage() {
  return 'url("public/background.gif")'; // Make sure to update the path
}

// Set the background when the page loads
document.addEventListener("DOMContentLoaded", () => {
  document.body.style.backgroundImage = getBackgroundImage();
});
