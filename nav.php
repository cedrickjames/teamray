


<nav class="bg-blue-900 px-2 sm:px-4 py-2.5 dark:bg-blue-900 fixed w-full z-20 top-0  left-0 border-b border-gray-200 dark:border-gray-600">

<!-- <div class="flex items-center"> -->





<style>
/* Style the buttons */

* {

box-sizing: border-box;

}



body {

margin: 0;

}



.navbar {

overflow: hidden;

background-color: white;

font-family: Arial, Helvetica, sans-serif;

}



.navbar a {

float: left;

font-size: 16px;

color: white;

text-align: center;

padding: 14px 16px;

text-decoration: none;

}



.dropdown {

float: left;

overflow: hidden;

}



.dropdown .dropbtn {

font-size: 16px;  

border: none;

outline: none;

color: white;

padding: 14px 16px;

background-color: inherit;

font: inherit;

margin: 0;

}



.navbar a:hover, .dropdown:hover .dropbtn {

color: red;

}



.dropdown-content {

display: block;

background-color: #ffffff;

width: 60%;

box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);



border: 1px solid rgba(0,0,0,.1);

border-radius: 16px;

margin: auto;



}

.mega-menu{

left: 0;

display: none;

background-color: #ffffff00;

width: 100%;

z-index: 1;

margin: auto;

position: absolute;



}

.row{

background-color: #ffffff;

border-radius: 16px;

}

.dropdown-content .header {

background: red;

padding: 16px;

color: white;

}



.dropdown:hover .mega-menu {

display: block;

}



/* Create three equal columns that floats next to each other */

.column {

float: left;

width: 33.33%;

padding: 10px;

border-radius: 16px;

height: 250px;

}



.column a {

float: none;

color: black;

padding: 16px;

text-decoration: none;

display: block;

text-align: left;

}



.column a:hover {

background-color: #ddd;

}



/* Clear floats after the columns */

.row:after {

content: "";

display: table;

clear: both;

}



/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */

@media screen and (max-width: 600px) {

.column {

  width: 100%;

  height: auto;

}

}
.btn {
 border-radius:18px;
  border: none;
  outline: none;
  padding: 0px 20px;
  /* background-color: #f1f1f1; */
  cursor: pointer;
  font-size: 18px;
  color: white;
}

/* Style the active class, and buttons on mouse-over */
.active, .btn:hover {
  background-color: #FF8C00;
  color: white;
}
</style>


    
<div class="flex items-center">

   <!-- slidebar button -->

   <!-- <a data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"> 
   <i class="fa fa-list fa-xl"  style="color: gray;"></i>
   </a> -->


   


<div class="container flex flex-wrap justify-between items-center mx-auto pt-0 pl-4 z-40">

    <a class="flex items-center" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
        <img src="resources/img/logo/teamlogo - Copy.png" class="mr-3 h-16 sm:h-16" alt="Flowbite Logo" >
        <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Website Template1</span> -->
    </a>

   
      
  
<!-- mobile button expand nav -->

    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button> 

    <!-- <div id="myDIV"> -->

<div class="hidden w-full md:block md:w-auto " id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 bg-blue-900 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-md md:font-medium md:border-0 md:bg-blue-900 dark:bg-blue-900 md:dark:bg-blue-900 dark:border-blue-900">
        <li>
        <!-- class=" block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"  -->
          <a href="main.php" onclick="hideoption()"  class="btn active">Home</a>
        </li>
        <li >
        <!-- class=" block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"  -->
          <a href="#about" onclick="hideoption()" class="btn "  >About</a>
        </li>
        <li>
        <a href="#services" onclick="hideoption()" class="btn"  >Services</a>
        
        </li>


        <li class="dropdown">
        <a href="product.php" onclick="hideoption()" class="btn dropbtn"  >Our Properties</a>
        <div class="mega-menu">

 

<div class="dropdown-content">

 

  <div class="row">

    <div class="column">

      <h3>Category 1</h3>

      <a
                    href="#!"
                    aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white">
                    <div class="shrink-0">
                      <img
                        src="./resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Quezon City
                      </p>
                      <p><u>15.07.2021</u></p>
                    </div>
                  </a>
                  <a
                    href="#!"
                    aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white">
                    <div class="shrink-0">
                      <img
                        src="./resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Quezon City
                      </p>
                      <!-- <p><u>15.07.2021</u></p> -->
                    </div>
                  </a>
                  <a
                    href="#!"
                    aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white">
                    <div class="shrink-0">
                      <img
                        src="./resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Quezon City
                      </p>
                      <!-- <p><u>15.07.2021</u></p> -->
                    </div>
                  </a>

    </div>

    <div class="column">

      <h3>Category 2</h3>

      <a
                    href="#!"
                    aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white">
                    <div class="shrink-0">
                      <img
                        src="./resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Quezon City
                      </p>
                      <p><u>15.07.2021</u></p>
                    </div>
                  </a>
                  <a
                    href="#!"
                    aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white">
                    <div class="shrink-0">
                      <img
                        src="./resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Quezon City
                      </p>
                      <!-- <p><u>15.07.2021</u></p> -->
                    </div>
                  </a>
                  <a
                    href="#!"
                    aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white">
                    <div class="shrink-0">
                      <img
                        src="./resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Quezon City
                      </p>
                      <!-- <p><u>15.07.2021</u></p> -->
                    </div>
                  </a>
    </div>

    <div class="column">

      <h3>Category 3</h3>

      <a
                    href="#!"
                    aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white">
                    <div class="shrink-0">
                      <img
                        src="./resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Quezon City
                      </p>
                      <p><u>15.07.2021</u></p>
                    </div>
                  </a>
                  <a
                    href="#!"
                    aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white">
                    <div class="shrink-0">
                      <img
                        src="./resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Quezon City
                      </p>
                      <!-- <p><u>15.07.2021</u></p> -->
                    </div>
                  </a>
                  <a
                    href="#!"
                    aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-800 dark:hover:text-white">
                    <div class="shrink-0">
                      <img
                        src="./resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Quezon City
                      </p>
                      <!-- <p><u>15.07.2021</u></p> -->
                    </div>
                  </a>
    </div>

  </div>

</div>

</div>
        </li>

        <li>
        <a href="#contact" onclick="hideoption()" class="btn"  >Contact</a>
         
        </li>
        
      </ul>
    </div> 

    </div>

<!-- 
      </div> -->


    <!-- darkmode button -->
<!-- 
<button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-xs p-1.5">
    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
</button> -->

  </div>




 


</nav>


  







<!-- side bar drawer component -->

<!-- 

<div id="drawer-navigation" class="fixed z-40 h-screen p-4 overflow-y-auto bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">System Menu</h5>
    <button type="button" data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
  <div class="py-4 overflow-y-auto">
      <ul class="space-y-2">
         <li>
            <a href="index.php" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>

         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Approval Request</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">2</span>
            </a>
         </li>

        

         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Open Request</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
            </a>
         </li>

         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Acceptance Request </span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
            </a>
         </li>


         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Completed Request</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
            </a>
         </li>

         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Disapproved Request</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
            </a>
         </li>

         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Rating</span>
            </a>
         </li>

         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Reports</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
            </a>
         </li>
        
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
            </a>
         </li>
      </ul>
   </div>
</div> -->






<footer class="fixed bottom-0 left-0 z-40 p-4 w-full bg-amber-500 border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 bg-white dark:bg-amber-600"style="padding-top: 0.25px;">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-900">© <?php echo date('Y') ?> <a href="https://teamrayproperties.com/" class="hover:underline">Teamray International</a>: All Rights Reserved
    </span>
    
    <!-- <a href="mailto:j.nemedez@glory.com.ph" class="font-thin text-gray-400 text-left italic font-serif">Powered by: naith.<u class="text-blue-600">ph</u></a> -->
    
</footer> 



<!-- Hide option -->
<script>
function hideoption(){
   var element = document.getElementById("navbar-default");
  element.classList.add("hidden");
}
</script>





<script>
//   function mouseOver(){
//    document.getElementById("loginicon").style.display = "inline";
//    document.getElementById("logintext").style.display = "none";

//   }
//   function mouseOut(){
//    document.getElementById("logintext").style.display = "inline";
//    document.getElementById("loginicon").style.display = "none";

//   }




  // Add active class to the current button (highlight it)
var header = document.getElementById("navbar-default");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}


//   var homeoption = document.getElementById("homeoption");
//   homeoption.classList.remove("text-gray-700");
//   homeoption.classList.add("text-white");
//   homeoption.classList.remove("dark:text-gray-400");
//   homeoption.classList.add("dark:text-white");


</script>





  
 
