
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

<section class="top-2 sm:top-10 relative  mb-22"  >


  <div class="px-2 sm:px-6  py-12 md:px-12 bg-white text-gray-800 text-center lg:text-left">
    <div class="container mx-auto xl:px-32">
      <div class="grid lg:grid-cols-2 gap-12 flex items-center">
        <div data-aos="fade-right" class="mt-12 lg:mt-0 ">
        <h1 class="text-xl font-bold tracking-tight text-gray-600 sm:text-xl">PROPERTIES FOR RENT</h5>
        <br>
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Safe and Simple</h1>
        <h1 class="text-4xl font-bold tracking-tight text-amber-700 sm:text-6xl">Condominium For Rent in Manila and Nearby Provinces</h1>

        <p class="mt-6 text-lg leading-8 text-gray-600">Finding your next home is never easy. Our agents are here to find you the perfect apartments for rent.</p>
          <!-- <a class="inline-block px-7 py-3 bg-transparent text-blue-600 font-medium text-sm leading-snug uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Buy a home</a> -->
          <div class=" mt-10 flex  ">
          <a href="#" class="m-auto sm:m-0 w-3/4 sm:w-auto rounded-md bg-amber-600 px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Book an Agent</a>
          
        </div>
        </div>
        <div  data-aos="fade-down" class="mx-2 sm:mx-0 mb-12 lg:mb-0">
          <img
            src="../resources/img/coffee.png"
            class="w-full h-max"
            alt=""
          />
        </div>
      </div>
    </div>
  </div>
</section>
<section >

<div class="text-center relative top-10 sm:top-0  lg:flex-auto lg:py-10 lg:text-center">
        <h6 class="text-sm  tracking-tight text-amber-500 sm:text-lg">WHY RENT WITH US?</h6>

        <h2 class="text-3xl font-bold tracking-tight text-amber-700 sm:text-6xl">Your best rental support!</h2>
      
  <div class="px-2 sm:px-6  py-12 md:px-12 bg-white text-gray-800 text-center lg:text-left">
    <div class="container mx-auto xl:px-32">
      <div class="grid lg:grid-cols-2 gap-12 flex items-center">
      <div  data-aos="fade-down" class="mx-2 sm:mx-0 mb-12 lg:mb-0">
          <img
            src="../resources/img/phone3.png"
            class="w-full h-max"
            alt=""
          />
        </div>
        <div data-aos="fade-right" class="mt-12 lg:mt-0 ">
        <h1 class="text-xl font-bold tracking-tight text-amber-600 sm:text-xl">VIRTUAL HOME TOURS</h5>
        <br>
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">View homes everywhere, wherever you are</h1>

        <p class="mt-6 text-lg leading-8 text-gray-600">Browse through our listings to compare properties. You can even view homes straight from your mobile device.</p>
          <!-- <a class="inline-block px-7 py-3 bg-transparent text-blue-600 font-medium text-sm leading-snug uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Buy a home</a> -->
       
        </div>

      </div>
    </div>
  </div>



      </div>

      
</section>
<section >

<div class="text-center  lg:flex-auto lg:py-10 lg:text-center">

      
  <div class="px-2 sm:px-6  py-12 md:px-12 bg-white text-gray-800 text-center lg:text-left">
    <div class="container mx-auto xl:px-32">
      <div class="grid lg:grid-cols-2 gap-12 flex items-center">
      <div  data-aos="fade-down" class="block sm:hidden mx-2 sm:mx-0 mb-12 lg:mb-0">
          <img
            src="../resources/img/smile.png"
            class="w-full h-max"
            alt=""
          />
        </div>
        <div data-aos="fade-right" class="mt-12 lg:mt-0 ">
        <h1 class="text-xl font-bold tracking-tight text-amber-600 sm:text-xl">RENT WITHOUT STRESS</h5>
        <br>
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Get matched with good landlords</h1>

        <p class="mt-6 text-lg leading-8 text-gray-600">We know that both tenants and landlords each have their own preferences. And it’s our job to connect you with a landlord that fits your own situation and needs.</p>
          <!-- <a class="inline-block px-7 py-3 bg-transparent text-blue-600 font-medium text-sm leading-snug uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Buy a home</a> -->
       
        </div>
        <div  data-aos="fade-down" class="hidden sm-block mx-2 sm:mx-0 mb-12 lg:mb-0">
          <img
            src="../resources/img/smile.png"
            class="w-full h-max"
            alt=""
          />
        </div>
      </div>
    </div>
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