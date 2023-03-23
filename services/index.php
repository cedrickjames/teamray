
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teamray</title>
    
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->
    <link rel="stylesheet" href="../fontawesome-free-6.2.0-web/css/all.min.css">
  
     <!-- tailwind play cdn -->
    <script src="https://cdn.tailwindcss.com"></script>

     <!-- from flowbite cdn -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />


    <!-- browser logo -->
    <link rel="shortcut icon" href="resources/img/logo.png">
    <link rel="stylesheet" href="../css/style.css" />


    <script src="../node_modules/tw-elements/dist/js/index.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    background-image: url('../resources/img/sofa.png');

    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;

}
.elementor-background-overlay {
    /* background-color: transparent;
    background-image: linear-gradient(180deg,rgba(0,35,55,.17) 0%,rgba(0,35,55,.8) 100%);
    opacity: 1; */
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
<body  class="static  bg-white dark:bg-white"  >


<!-- button go to top -->





    <!-- nav -->
    <?php require_once 'megamenu.php';?>
    <script>
      var activepage = document.getElementById("activeNav");
activepage.classList.add("border-b-4");
activepage.classList.add("border-amber-600");
activepage.classList.add("text-amber-600");





    </script>


<!-- main -->







 <!--banner section start -->
 <!-- Container for demo purpose -->
<div>

<section class="mt-16 sm:mt-0 mb-22 "  >
  <div class=" px-0 bg-gray-50 text-center"  id="home">

    <div class="mx-0 xl:px-32 elementor-background-overlay">
    <br>

      
        <div class="text-center  lg:flex-auto lg:py-32 lg:text-center">
        <h6 class="text-sm  tracking-tight text-amber-500 sm:text-lg">Real Estate Agent Services</h6>

        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">We'll guide you to your dreamhome</h2>
        <p class="mt-6 text-lg leading-8 text-gray-900">End-to-end real estate services provided by top agents you can trust, be it for buying, selling, or renting, and more.</p>
        <div class="mt-10 flex items-center justify-center ">
          <a href="#" class="rounded-md bg-amber-600 px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Book an Agent</a>
          
        </div>
      </div>
      <br>
        <br>
        <br>
 
    </div>
  </div>
</section>

</div>
<!-- Container -->



<!-- about us -->

<!-- end of about us -->








<script src="index.js"></script>


    

<!-- flowbite javascript -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js">

  
</script>














</body>
</html>