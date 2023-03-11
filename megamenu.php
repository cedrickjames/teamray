<!-- 
<nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
  </a>
  <div class="flex md:order-2">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav> -->
<style>

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


width: 60%;

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
  class="bg-white dark:bg-black relative flex w-full items-center justify-between bg-neutral-50 py-2 text-amber-600 shadow-lg dark:bg-neutral-700 dark:text-neutral-200 dark:shadow-black/5 lg:flex-wrap lg:justify-start"
 style="background-color: #0f142a"
  data-te-navbar-ref>
  <div class="px-6 container flex flex-wrap items-center justify-between mx-auto ">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo">
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
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
    <div class="flex md:order-2">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
    <div
      class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky"
      id="navbarSupportedContentQ"
      data-te-collapse-item>
      <ul class="mr-auto flex flex-row" data-te-navbar-nav-ref>
        <li data-te-nav-item-ref>
          <a
            class="block py-2 pr-2 transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-amber-400 dark:focus:text-amber-600 lg:px-2"
            href="#!"
            data-te-ripple-init
            data-te-ripple-color="light"
            >Regular link</a
          >
        </li>
        <li class="dropdown " >
          <a 
            class="  flex items-center whitespace-nowrap py-2 pr-2 transition duration-150 ease-in-out hover:text-neutral-700 focus:text-amber-600 dark:hover:text-amber-400 dark:focus:text-amber-600 lg:px-2"
            href="#"
            data-te-ripple-init
            data-te-ripple-color="light"
            data-te-ripple-duration="100ms"
            type="button"
            id="dropdownMenuButtonQ"
            data-te-dropdown-toggle-ref
            aria-expanded="false"
            data-te-nav-link-ref
            >Mega menu
            <span class="ml-2 w-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="h-5 w-5">
                <path
                  fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
              </svg>
            </span>
          </a>
          <div
            class="mega-menu"
    >
            <div class="dropdown-content -6 py-5 lg:px-8 w-2/4 m-auto rounded-lg border-none bg-white bg-clip-padding shadow-lg dark:bg-neutral-700">
              <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3  text-xs">
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 dark:text-white">
                    Lorem ipsum
                  </p>
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
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 dark:text-white">
                    Explit voluptas
                  </p>
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
                <div>
                  <p
                    class="block w-full border-b border-neutral-200 px-6 py-2 font-semibold uppercase text-neutral-700 dark:border-neutral-500 dark:text-white">
                    Iste quaerato
                  </p>
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
      </ul>
    </div>
  </div>
</nav>
<style>
  .abc:hover .absolute {
  display: block;
}

.def {
  display: none;
}
</style>

</div>
