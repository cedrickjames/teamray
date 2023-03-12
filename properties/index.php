
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teamray</title>
    
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.min.css">
  
     <!-- tailwind play cdn -->
    <script src="https://cdn.tailwindcss.com"></script>

     <!-- from flowbite cdn -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />


    <!-- browser logo -->
    <link rel="shortcut icon" href="resources/img/logo.png">
    <link rel="stylesheet" href="css/style.css" />


    <script src="./node_modules/tw-elements/dist/js/index.min.js"></script>

    <!-- back on top button css -->

<style>
#myBtn {
      display: none; /* Hidden by default */
      position: fixed; /* Fixed/sticky position */
      bottom: 50px; /* Place the button at the bottom of the page */
      right: 30px; /* Place the button 30px from the right */
      z-index: 99; /* Make sure it does not overlap */
      border: none; /* Remove borders */
      outline: none; /* Remove outline */
      background-color: blue; /* Set a background color */
      color: white; /* Text color */
      cursor: pointer; /* Add a mouse pointer on hover */
      padding: 15px; /* Some padding */
      border-radius: 10px; /* Rounded corners */
      font-size: 18px; /* Increase font size */
    }
    
    #myBtn:hover {
         background-color: #555; /* Add a dark-grey background on hover */
    }
    @keyframes slide-up {
  from {
    transform: translateY(100%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

.animate-slide-up {
  animation: slide-up 0.5s ease-out;
}
#home{
    background-image: url('../resources/img/Air-Residences-Mall-Facade.jpg');

    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;

}
.elementor-background-overlay {
    background-color: transparent;
    background-image: linear-gradient(180deg,rgba(0,35,55,.17) 0%,rgba(0,35,55,.8) 100%);
    opacity: 1;
}
.title{
    font-family: var(--e-global-typography-583e54c-font-family),Sans-serif;
}
</style>
    











    <!-- darkmode -->
    <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>



</head>
<body  onload=navFuntion() class="static  bg-white dark:bg-white"  >


<!-- button go to top -->

<button onclick="topFunction()" id="myBtn" style="display:none" title="Go to top">Top</button> 





    <!-- nav -->
    <?php require_once 'megamenu.php';?>
    <script>
      var activepage = document.getElementById("navHome");
activepage.classList.add("border-b-4");
activepage.classList.add("border-amber-600");
activepage.classList.add("text-amber-600");





    </script>


<!-- main -->







 <!--banner section start -->
 <!-- Container for demo purpose -->
<div>

<!-- Section: Design Block -->
<section class="mb-22 m-2.5"  >
  <div class=" px-0 bg-gray-50 text-center"  id="home">

    <div class="mx-0 xl:px-32 elementor-background-overlay">
    <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      

      <div class="grid sm:grid-cols-1 gap-12 flex items-center">
  
        <div class="mt-12 lg:mt-0 animate-slide-up">
        <h1 class=" font-serif tracking-widest text-2xl md:text-2xl xl:text-2xl font-bold text-amber-400 mb-2">Condominium </h1>
  
          <h1 class="font-serif title text-4xl md:text-5xl xl:text-7xl text-white tracking-tight mb-12">Air Residence <br /></h1>
          <!-- <a class="inline-block px-7 py-3 bg-transparent text-blue-600 font-medium text-sm leading-snug uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Buy a home</a> -->
        </div>

      </div>
      <div class="grid sm:grid-cols-2 gap-4 flex items-center animate-slide-up">

          <div class="grid grid-cols-3 m-auto w-full lg:w-2/4">
              <div class="text-xl text-gray-900 dark:text-white text-center"> <svg class="w-10 h-full m-auto"  fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-32 w-32 [color]-$fill-color" style="stroke-width: var(--grid-item-icon-stroke-width); transform: scale(var(--grid-item-icon-scale));"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div>
              <div class="col-span-2 text-left w-full">
                  <p class="text-xl text-gray-900 dark:text-white"> 370,000+ to move-in! Monthly starts at P33k+ </p>
              </div>
          </div>
          <div class="grid grid-cols-3 m-auto w-full lg:w-2/4">
              <div class="text-xl text-gray-900 dark:text-white text-center"><svg class="w-10 h-full m-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-32 w-32 [color]-$fill-color" style="stroke-width: var(--grid-item-icon-stroke-width); transform: scale(var(--grid-item-icon-scale));"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path></svg></div>
              <div class="col-span-2 text-left w-full">
                  <p class="text-xl text-gray-900 dark:text-white"> Malugay and Yakal Street , Brgy. San Antonio Makati City </p>
              </div>
          </div>

      </div>
      <br>
        <br>
        <br>
 
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<!-- Container for demo purpose -->

</div>
<!-- Container -->



<!-- about us -->

<!-- end of about us -->









<script>
  
// Get the button
let mybutton = document.getElementById("myBtn");
// mybutton.style.display = "none";
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
// mybutton.style.display = "none";
function scrollFunction() {
 
  if (document.body.scrollTop >1000 || document.documentElement.scrollTop > 1000) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


</script>



    

<!-- flowbite javascript -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js">

  
</script>


<!-- darkmode script -->
<script>  


var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }
    
});







// Script for active page in nav

// var activepage = document.getElementById("1home");
// activepage.classList.remove("text-gray-700");
// activepage.classList.add("text-blue-700");
// activepage.classList.remove("dark:text-gray-400");
// activepage.classList.add("dark:text-white");


</script>














</body>
</html>