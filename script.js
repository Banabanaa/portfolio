let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x')
    navbar.classList.toggle('active');
};


menuIcon.onclick = () => {
  menuIcon.classList.toggle('bx-x');
  navbar.classList.toggle('active');
};

// ---------Set Background Image (GIF)-------
function getBackgroundImage() {
  return 'url("public/background.gif")'; // Make sure to update the path
}

// Set the background when the page loads
document.addEventListener("DOMContentLoaded", () => {
  document.body.style.backgroundImage = getBackgroundImage();
});


