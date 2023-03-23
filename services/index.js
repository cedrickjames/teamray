

// const myDrawer = document.getElementById('sidebar');
// myDrawer.toggle();
// Get the navbar element
const navbar = document.querySelector('.main-navbar');

// Listen for scroll events on the window
window.addEventListener('scroll', () => {
  // Check if the scroll position is greater than or equal to 50 pixels
  if (window.scrollY >= 50) {
    // Add the 'scrolled' class to the navbar
    navbar.style.backgroundColor = '#0f142a';
    // navbar.classList.add('scrolled');
  } else {
    // Remove the 'scrolled' class from the navbar
    navbar.style.backgroundColor = '#2c2c2e';
  }
});

