

$('.relative').hover(
    function() {
      $(this).find('#cont1').fadeOut(0);
      $(this).find('#cont2').fadeIn(0);
    },
    function() {
      $(this).find('#cont1').fadeIn(0);
      $(this).find('#cont2').fadeOut(0);
    }
  );
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
    navbar.style.backgroundColor = '';
  }
});


// const home = document.getElementById('home');
// var animateText = document.querySelector('.animate-text');
// // Define the options for the Intersection Observer
// const options = {
//   root: null,
//   rootMargin: '0px',
//   threshold: 0.02 // Trigger when element is 1% visible in viewport
// };

// // Create a new Intersection Observer and pass in the callback function
// const observer = new IntersectionObserver(onIntersection, options);

// // Start observing the target element
// observer.observe(home);

// // Define the callback function to be triggered when the element intersects with the viewport
// function onIntersection(entries, observer) {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       window.addEventListener('scroll', () =>{

//       animateText.classList.add('animate-slide-up');

    
//     });
//       observer.unobserve(entry.target); // Stop observing the target element once it's visible
//     }
//   });
// }


// var skewed = document.querySelector('.skewed');
// window.addEventListener('scroll', () =>{
//     if (window.scrollY >= 1500) {
//         // Add the 'scrolled' class to the navbar
//         var value = -10 + window.scrollY/60;
//         skewed.style.transform = "skewY("+value+"deg)";


//         // navbar.classList.add('scrolled');
//       } 

// })
// var skewed2 = document.querySelector('.skewed2');
// window.addEventListener('scroll', () =>{
//     if (window.scrollY >=800) {
//         // Add the 'scrolled' class to the navbar
//         var value = -10 + window.scrollY/60;
//         skewed.style.transform = "skewY("+value+"deg)";
//         // navbar.classList.add('scrolled');
//       } 


// })





gsap.set('.main', {position:'static', background:'#fff'})
gsap.set('.scrollDist', {width:'100%', height:'200%'})
gsap.timeline({scrollTrigger:{trigger:'.scrollDist', start:'top top', end:'bottom bottom', scrub:1}})
    .fromTo('.sky', {y:0},{y:-200}, 3)
    .fromTo('.cloud1', {y:100},{y:-800}, 0)
    .fromTo('.cloud2', {y:-150},{y:-500}, 0)
    .fromTo('.cloud3', {y:-50},{y:-650}, 0)
    .fromTo('.mountBg', {y:-10},{y:-100}, 0)
    .fromTo('.mountMg', {y:-30},{y:-250}, 0)
    .fromTo('.mountFg', {y:0},{y:-600}, 0)
    .fromTo('.teamray', {y:0},{y:300}, 0)
    .fromTo('.welcome2', {y:0},{y:2000}, 0)
    .fromTo('.welcome', {y:0},{y:300}, 0)





$('#arrowBtn').on('mouseenter', (e)=>{ gsap.to('.arrow', {y:10, duration:0.8, ease:'back.inOut(3)', overwrite:'auto'}); })
$('#arrowBtn').on('mouseleave', (e)=>{ gsap.to('.arrow', {y:0, duration:0.5, ease:'power3.out', overwrite:'auto'}); })
$('#arrowBtn').on('click', (e)=>{ gsap.to(window, {scrollTo:innerHeight, duration:1.5, ease:'power1.inOut'}); }) // scrollTo requires the ScrollTo plugin (not to be confused w/ ScrollTrigger)