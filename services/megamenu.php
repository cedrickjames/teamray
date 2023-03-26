
<style>
.main-navbar{
  transition: background-color 0.5s ease-in-out;
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



box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);



border: 1px solid rgba(0,0,0,.1);

border-radius: 16px;

margin: auto;



}

.mega-menu{

left: 0;

display: none;


width: 100%;

z-index: 1;

margin: auto;

position: absolute;



}

.row{


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


</style>
<nav
  class="main-navbar  hidden md:block  fixed flex w-full items-center justify-between   text-amber-600 shadow-lg  dark:text-neutral-200 dark:shadow-black/5 lg:flex-wrap lg:justify-start"
  style=" z-index: 1000; background-color: #2c2c2e" data-te-navbar-ref>
  <div class="h-full px-6 container flex flex-wrap items-center justify-between mx-0 md:mx-auto ">
    <a class="flex items-center">
      <img src="../resources/img/logo/teamlogo - Copy.png" class="mr-3 h-16 sm:h-16" alt="Flowbite Logo">
      <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Website Template1</span> -->
    </a>
    <!-- <button
      class="border-0 bg-transparent py-3 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
      type="button"
      data-te-collapse-init
      data-te-target="#navbarSupportedContentQ"
      aria-controls="navbarSupportedContentQ"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="[&>svg]:w-8">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="h-8 w-8">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </span>
    </button> -->
    <div class="flex sm:order-2">
      <!-- <div class="mytooltip">+63 9123456789</div> -->
      <div class="relative">
      <a href="../contact-us.php" type="button" id="cont2"
          class="hidden text-white bg-amber-500  focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 sm:mr-0 dark:bg-amber-500  dark:focus:ring-amber-800">+63
          9123456789</a>
        <button type="button" id="cont1"
          class=" text-white bg-transparent focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 sm:mr-0 dark:bg-transparent  dark:focus:ring-blue-800 ">
          <svg class=" w-10 h-full m-auto text-white" fill="none" stroke="currentColor" stroke-width="1.5"
            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
            class="h-32 w-32 [color]-$fill-color"
            style="stroke-width: var(--grid-item-icon-stroke-width); transform: scale(var(--grid-item-icon-scale));">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
            </path>
          </svg>
        </button>

      </div>
      <div>
        <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>


    </div>
    <div style="height: 65px" class="items-center justify-between hidden w-full sm:flex sm:w-auto sm:order-1"
      id="navbar-sticky" id="navbarSupportedContentQ" data-te-collapse-item>
      <ul class="justify-center h-full items-center flex flex-row space-x-12" data-te-navbar-nav-ref>
        <li class="mb-2 justify-center h-full items-center flex">
          <a class="block py-2 pr-2 transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-amber-400 dark:focus:text-amber-600 lg:px-2"
            href="../main.php" data-te-ripple-init data-te-ripple-color="light">Home</a>
        </li>
        <li class="mb-2 dropdown justify-center h-full items-center flex" >
          <a class="  flex items-center whitespace-nowrap py-2 pr-2 transition duration-150 ease-in-out hover:text-neutral-700 focus:text-amber-600 dark:hover:text-amber-400 dark:focus:text-amber-600 lg:px-2"
            href="../properties" data-te-ripple-init data-te-ripple-color="light" data-te-ripple-duration="100ms" type="button"
            id="dropdownMenuButtonQ" data-te-dropdown-toggle-ref aria-expanded="false" data-te-nav-link-ref
            es>Properties
            <span class="ml-2 w-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
              </svg>
            </span>
          </a>
          <div class="mega-menu top-16">
            <div
              class="dropdown-content -6 py-5 lg:px-8 w-3/4 xl:w-2/4 m-auto  rounded-lg border-none bg-white bg-clip-padding shadow-lg dark:bg-neutral-50">
              <div class="grid gap-6 md:grid-cols-3 xl:grid-cols-3  text-xs dark:text-black">
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 ">

                    Condominium
                  </p>

                  <a href="../properties" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Bloom Residences
                      </p>
                      <p>near Sucat Exit SLEX</p>
                    </div>
                  </a>
                  <a href="../properties" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower2.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Air Residences
                      </p>
                      <p>Brgy San Antonio, Makati City</p>
                    </div>
                  </a>
                  <a href="../properties" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower3.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Breeze Residences
                      </p>
                      <p>Roxas Boulevard, Pasay City</p>
                    </div>
                  </a>

                </div>
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 ">
                    House and Lot
                  </p>
                  <a href="../properties" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower2.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Calm Residences
                      </p>
                      <p>Sta. Rosa City, Laguna</p>
                    </div>
                  </a>
                  <a href="../properties" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Cheerful Homes
                      </p>
                      <p>Mabalacat City, Pampanga</p>
                    </div>
                  </a>
                  <a href="../properties" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower3.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Coast Residences
                      </p>
                      <p>Makati City</p>
                    </div>
                  </a>

                </div>
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 ">
                    Residential Offices
                  </p>
                  <a href="../properties" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower3.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Cool Suites and Wind Residences
                      </p>
                      <p>Tagaytay City, Cavite</p>
                    </div>
                  </a>
                  <a href="../properties" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower2.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Gem Residences
                      </p>
                      <p>C5, Pasig City</p>
                    </div>
                  </a>
                  <a href="../properties" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Field Residences
                      </p>
                      <p>beside SM Sucat, Quezon City</p>
                    </div>
                  </a>

                </div>

              </div>
            </div>
          </div>
        </li>
        <li class="mb-2 dropdown justify-center h-full items-center flex" id="activeNav">
          <a class="  flex items-center whitespace-nowrap py-2 pr-2 transition duration-150 ease-in-out hover:text-neutral-700 focus:text-amber-600 dark:hover:text-amber-400 dark:focus:text-amber-600 lg:px-2"
            href="#" data-te-ripple-init data-te-ripple-color="light" data-te-ripple-duration="100ms" type="button"
            id="dropdownMenuButtonQ" data-te-dropdown-toggle-ref aria-expanded="false" data-te-nav-link-ref
            es>Services
            <span class="ml-2 w-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
              </svg>
            </span>
          </a>
          <div class="mega-menu top-16">
            <div
              class="dropdown-content -6 py-5 lg:px-8 w-3/4 xl:w-2/4 m-auto  rounded-lg border-none bg-white bg-clip-padding shadow-lg dark:bg-neutral-50">
              <div class="grid gap-6 md:grid-cols-3 xl:grid-cols-2  text-xs dark:text-black">
                <div>
                  <p
                    class="block w-full  px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 ">

                    Real Estate Services
                  </p>

                  <a href="index.php" aria-current="true"
                    class="flex w-full items-center  px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        All Agent Services
                      </p>
                
                    </div>
                  </a>
                  <a href="buy-with-an-agent.php" aria-current="true"
                    class="flex w-full items-center  px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower2.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                       Buy with an Agent
                      </p>
                     
                    </div>
                  </a>
                  <a href="rent-with-an-agent.php" aria-current="true"
                    class="flex w-full items-center  px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower3.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Rent with an Agent
                      </p>
          
                    </div>
                  </a>
                  <a href="lease-with-an-agent.php" aria-current="true"
                    class="flex w-full items-center  px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower3.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Lease with an Agent
                      </p>
          
                    </div>
                  </a>
                </div>
                <div>
                  <p
                    class="block w-full  px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 ">
                    Other Services
                  </p>
                  <a href="mortgage.php" aria-current="true"
                    class="flex w-full items-center  px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower2.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                       Mortgage Services
                      </p>
                     
                    </div>
                  </a>
                 

                </div>
                

              </div>
            </div>
          </div>
        </li>
        <li class="mb-2 justify-center h-full items-center flex">
          <a class="block py-2 pr-2 transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-amber-400 dark:focus:text-amber-600 lg:px-2"
            href="../aboutus" data-te-ripple-init data-te-ripple-color="light">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<nav  style="background-color: #0f142a;z-index: 1000; height: 50px" class="block md:hidden bg-white px-2 sm:px-4 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="h-full container flex flex-wrap items-center justify-between mx-auto">
  <a class="h-full flex items-center" >
        <img src="../resources/img/logo/teamlogo - Copy.png" class="mr-3 h-16 sm:h-16" alt="Flowbite Logo" >
        <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Website Template1</span> -->
    </a>
  <div class="flex md:order-2">
      <a href="../contact-us.php" type="button" class="text-white bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Contact Us</a>
      <button data-drawer-target="sidebar" data-drawer-show="sidebar" aria-controls="sidebar"type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"  aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
      <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
          <a href="../main.php" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
        </li>
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center bg-amber-700  justify-between w-full py-2 pl-3 pr-4 font-medium text-white border-b border-gray-100  md:border-0 md:hover:text-white md:p-0 md:w-auto   dark:focus:text-white dark:border-white">Properties <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Condominuim</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">House and Lot</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Residential Offices</a>
                  </li>
                </ul>
               
            </div>
        </li>
        <li>
          <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="../aboutus" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- drawer component -->
<div style="z-index: 2000" id="sidebar" class="block md:hidden fixed top-0 left-0 z-40 h-screen p-0 overflow-y-auto transition-transform -translate-x-full bg-white w-full dark:bg-white" tabindex="-1" aria-labelledby="sidebar-label">
<div style="background-color: #0f142a; height: 50px" class="w-full">
<a class="h-full  items-center" >
        <img src="../resources/img/logo/teamlogo - Copy.png" class="mr-3 h-full" alt="Flowbite Logo" >
        <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Website Template1</span> -->
    </a>
</div>
    <button type="button"  data-drawer-toggle="sidebar" aria-controls="sidebar" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
<div class="h-4/6 p-4 grid grid-cols-2 md:grid-cols-3 gap-2">
  <a href="../main.php">  
    <div class="h-full rounded-lg"  style="background-image: url('../resources/img/Air-Residences-Mall-Facade.jpg'); background-position: center center;background-repeat: no-repeat;background-size: cover;">
    <div class=" rounded-lg p-4 grid grid-rows-4 grid-flow-col gap-4w-full h-full bg-gray-900 bg-opacity-50">

    <div class="row-start-4 row-span-2 text-white font-extrabold">Home <span class="m-2"><i class="fa-solid fa-greater-than"></i></span></div>
    </div>
    </div>
  </a>
  <a  data-drawer-target="properties" data-drawer-show="properties" aria-controls="properties"  >  
    <div class="h-full rounded-lg "  style="background-image: url('../resources/img/Air-Residences-Grand-Lobby-1.jpg'); background-position: center center;background-repeat: no-repeat;background-size: cover;">
    <div class=" rounded-lg p-4 grid grid-rows-4 grid-flow-col gap-4w-full h-full bg-gray-900 bg-opacity-50">

    <div  class="row-start-4 row-span-2 text-white font-extrabold">Properties <span class="m-2"><i class="fa-solid fa-greater-than"></i></span></div>
    </div>
  
 
    </div>
            </a>
            <a data-drawer-target="services" data-drawer-show="services" aria-controls="services" >  
    <div class="h-full rounded-lg "  style="background-image: url('../resources/img/condo1.png'); background-position: center center;background-repeat: no-repeat;background-size: cover;">
    <div class=" rounded-lg p-4 grid grid-rows-4 grid-flow-col gap-4w-full h-full bg-gray-900 bg-opacity-50">

    <div class="row-start-4 row-span-2 text-white font-extrabold">Services <span class="m-2"><i class="fa-solid fa-greater-than"></i></span></div>
    </div>
    </div>
            </a>
            <a href="../aboutus">  
    <div class="h-full rounded-lg "  style="background-image: url('../resources/img/air_14.jpeg'); background-position: center center;background-repeat: no-repeat;background-size: cover;">
    <div class=" rounded-lg p-4 grid grid-rows-4 grid-flow-col gap-4w-full h-full bg-gray-900 bg-opacity-50">

    <div class="row-start-4 row-span-2 text-white font-extrabold">About Us <span class="m-2"><i class="fa-solid fa-greater-than"></i></span></div>
    </div>
    </div>
            </a>
    
</div>

  
<!-- drawer init and toggle -->


<!-- drawer component -->
<div style="z-index: 2100" id="properties" class="block md:hidden fixed top-0 left-0 z-40 h-screen p-0 overflow-y-auto transition-transform -translate-x-full bg-white w-full dark:bg-white" tabindex="-1" aria-labelledby="sidebar-label">
<div style="background-color: #0f142a; height: 50px" class="w-full">
<a class="h-full  items-center" >
        <img src="../resources/img/logo/teamlogo - Copy.png" class="mr-3 h-full" alt="Flowbite Logo" >
        <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Website Template1</span> -->
    </a>
</div>
    <button type="button"   data-drawer-toggle="properties" aria-controls="properties" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
<div>
  <div class="grid gap-6   text-xs dark:text-black">
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 ">

                    Condominium
                  </p>

                  <a href="#" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Bloom Residences
                      </p>
                      <p>near Sucat Exit SLEX</p>
                    </div>
                  </a>
                  <a href="#" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower2.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Air Residences
                      </p>
                      <p>Brgy San Antonio, Makati City</p>
                    </div>
                  </a>
                  <a href="#" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower3.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Breeze Residences
                      </p>
                      <p>Roxas Boulevard, Pasay City</p>
                    </div>
                  </a>

                </div>
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 ">
                    House and Lot
                  </p>
                  <a href="#" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower2.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Calm Residences
                      </p>
                      <p>Sta. Rosa City, Laguna</p>
                    </div>
                  </a>
                  <a href="#" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Cheerful Homes
                      </p>
                      <p>Mabalacat City, Pampanga</p>
                    </div>
                  </a>
                  <a href="#" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower3.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Coast Residences
                      </p>
                      <p>Makati City</p>
                    </div>
                  </a>

                </div>
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 ">
                    Residential Offices
                  </p>
                  <a href="#" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower3.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Cool Suites and Wind Residences
                      </p>
                      <p>Tagaytay City, Cavite</p>
                    </div>
                  </a>
                  <a href="#" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower2.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Gem Residences
                      </p>
                      <p>C5, Pasig City</p>
                    </div>
                  </a>
                  <a href="#" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                        Field Residences
                      </p>
                      <p>beside SM Sucat, Quezon City</p>
                    </div>
                  </a>

                </div>

              </div>
    
</div>

</div>

<div style="z-index: 2100" id="services" class="block md:hidden fixed top-0 left-0 z-40 h-screen p-0 overflow-y-auto transition-transform -translate-x-full bg-white w-full dark:bg-white" tabindex="-1" aria-labelledby="sidebar-label">
<div style="background-color: #0f142a; height: 50px" class="w-full">
<a class="h-full  items-center" >
        <img src="../resources/img/logo/teamlogo - Copy.png" class="mr-3 h-full" alt="Flowbite Logo" >
        <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Website Template1</span> -->
    </a>
</div>
    <button type="button"   data-drawer-toggle="services" aria-controls="services" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
<div>
  <div class="grid gap-6   text-xs dark:text-black">
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 ">

                    Real Estate Services
                  </p>
                  <a href="index.php" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                      All agent services
                      </p>
                    </div>
                  </a>
                  <a href="buy-with-an-agent.php" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower1.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                      Buy with an Agent
                      </p>
                    </div>
                  </a>
                  <a href="rent-with-an-agent.php" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower2.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                      Rent with an Agent
                      </p>

                    </div>
                  </a>
                  <a href="lease-with-an-agent.php" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower3.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                      Lease with an Agent
                      </p>
              
                    </div>
                  </a>

                </div>
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 ">
                    Other Services
                  </p>
                  <a href="mortgage.php" aria-current="true"
                    class="flex w-full items-center border-b border-neutral-200 px-6 py-3 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700 dark:border-neutral-500 dark:hover:bg-neutral-400 dark:hover:text-black">
                    <div class="shrink-0">
                      <img src="../resources/img/natsutower2.jpg"
                        class="w-14 rounded-lg rounded shadow-lg dark:shadow-black/10"
                        alt="Hollywood Sign on The Hill" />
                    </div>
                    <div class="ml-4 grow">
                      <p class="mb-1 font-semibold ">
                      Mortgage Services
                      </p>
                    </div>
                  </a>
 

                </div>
                

              </div>
    
</div>

</div>

<style>
  
  .abc:hover .absolute {
  display: block;
}

.def {
  display: none;
}
</style>

</div>
<script>
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
  </script>