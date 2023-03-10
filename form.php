<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB ORDER: Main </title>


    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.min.css">
    
    

     <!-- tailwind play cdn -->
    <script src="https://cdn.tailwindcss.com"></script>

     <!-- from flowbite cdn -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
<!-- Script for jquery -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>


    <link rel="shortcut icon" href="resources/img/helpdesk.png">
    <link rel="stylesheet" href="css/style.css" />


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



<body  onload=navFuntion() class="static  bg-white dark:bg-gray-900"  >

    <!-- nav -->
    <?php require_once 'nav.php';?>



<!-- main -->

<div class="  flex mt-24   left-10 right-5    flex flex-col  px-14 sm:px-14  pt-6 pb-14 z-50 ">


<U class="text-gray-900 dark:text-gray-300">Job Order Form </U>



<form>
    <div class=" grid gap-6 mb-6 md:grid-cols-2">


        <div>
            <label for="section_request" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" >Request to </label>
            <select id="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"require>
            <option selected disabled>Choose Section:</option>
            <option value="FEM">FEM: Facility and Equipment Maintenance</option>
            <option value="MIS">MIS: Management Information System</option>
            
         </select>
         </div>

         <div>
            <label for="req_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category <a href="#" class="text-blue-600 hover:underline dark:text-blue-500" data-modal-toggle="small-modal">(reference)</a></label>
            <!-- <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400" data-modal-toggle="defaultModal">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label> -->

            <select id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            <option selected disabled>Choose Category:</option>
            <!-- <option value="na" data-val="na"></option> -->
            <option value="" data-val="FEM">Facilities</option>
            <option value="1" data-val="FEM">Electrical</option>
            <option value="1" data-val="FEM">Civil / Mechanical</option>
            <option value="1" data-val="FEM">Compliance</option>
            <option value="1" data-val="FEM">Relayout</option>
            <!-- <option  data-val="FEM">Others</option> -->
            <option value="1" data-val="MIS">Computer</option>
            <option value="1" data-val="MIS">Network</option>
            <option value="1" data-val="MIS">Telephone</option>
            <option value="1" data-val="MIS">Email</option>
            <option value="1" data-val="MIS">Relayout</option>
            <option value="1" data-val="MIS">Non Technical Related</option>
            
            </select>






            
        </div>


        <div>
            <label for="approving_head" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Approving Head </label>
            <select id="head" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected  disabled class="text-gray-900">Choose Head:</option>
            <option value="head">Gemma A. Calalo</option>
            <option value="head">Raymond SG. Reyes</option>
            
         </select>


         <!-- modal -->

         <div id="small-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Job Order Guidelines
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="small-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="small-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-toggle="small-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div>
        </div>
    </div>
</div>


         </div>




         <div>
         <label for="approving_head" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Request Schedule </label>
         
            <!-- <div date-rangepicker="" class="flex items-center"> -->
                <div class="flex items-center">
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input onchange="testDate()" id="datestart" name="start" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Request date start">
            </div>
            <span class="mx-4 text-gray-500">to</span>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input id="dateend" onchange = "endDate()" name="end" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Request date finish">
            </div>
            </div>

    

        </div>


        
      
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Request</label>
        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Details" required="">
    </div> 


<div class="mb-6">
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload file</label>
<input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

</div>
    
   
   
    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
        </div>
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400" data-modal-toggle="defaultModal">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
   
    <a href="#"  type="button"class="text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-400 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-400 dark:hover:bg-red-700 dark:focus:ring-red-800">Cancel</a>

</form>




<!-- Modal toggle -->
<!-- <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="defaultModal">
  Toggle modal
</button> -->

<!-- Main modal terms and condition -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <!-- close button -->

                <!-- <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button> -->
            </div>
            
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                   This system created as customer service tool that organizes all support interms of communications,computers and network and also for Building and Maintenance to help businesses share faster responses. Using an internal help desk system, agents can easily assign, track, prioritize, and resolve tickets together. 
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>

                <button data-modal-toggle="defaultModal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <a href="form.php" type="button"class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</a>
                <!-- <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"><a href="main.php">Decline</a></button> -->

            </div>

            <!-- end modal -->



      


          
         






            
           

</div>











<!-- end of main -->
<!-- 
datetime picker js -->

<script src="node_modules/flowbite/dist/datepicker.js"></script>
    

<!-- <script src="../path/to/flowbite/dist/flowbite.js"></script> -->
<script src="node_modules/flowbite/dist/flowbite.js"></script>





<!-- script for option code -->

<script>
     $('#section').change(function() {
  var $options = $('#type')
  .val('')
  .find('option')
  .show();
  if (this.value != '0')
  $options
  .not('[data-val="' + this.value + '"], [data-val=""]')
  .hide();
  $('#type option:eq(0)').prop('selected', true)
  // console.log("asd");

  })

  //blocking of error on refresh page
  var $options = $('#type')
  .val('')
  .find('option')
  .show();
  if (this.value != '0')
  $options
  .not('[data-val="' + this.value + '"], [data-val=""]')
  .hide();
  $('#type option:eq(0)').prop('selected', true)


//   end of script for category




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

</script>




<!-- script for valid request date schedule -->
<!-- <input type="date" id="birthdaytime" onchange="testDate()" name="birthdaytime"> -->
<script>
var setdate2;
function testDate(){
 var chosendate =  document.getElementById("datestart").value;

 
//  console.log(chosendate)
const x = new Date();
const y = new Date(chosendate);

if(x<y){
console.log("Valid");
var monthNumber = new Date().getMonth()+1;
const asf = new Date(chosendate);
 asf.setDate(asf.getDate() + 3);
 var setdate = asf.getFullYear()+"-"+monthNumber+"-"+asf.getDate();
 document.getElementById("dateend").value = setdate;

 setdate2 = asf.getFullYear()+"-"+monthNumber+"-"+asf.getDate();
 console.log(setdate)


// console.log(x)
}
else{
  alert("Sorry your request date is not accepted!")

  const z = new Date();
var monthNumber = new Date().getMonth()+1
z.setDate(z.getDate() + 1);
  console.log(z);
  var setdate = z.getFullYear()+"-"+monthNumber+"-"+z.getDate();
 document.getElementById("datestart").value = setdate;
 console.log(setdate)

 const asf2 = new Date(setdate);
 asf2.setDate(asf2.getDate() + 3);
 setdate2 = asf2.getFullYear()+"-"+monthNumber+"-"+asf2.getDate();
 document.getElementById("dateend").value = setdate2;

}
}

function endDate(){
    console.log(setdate2);
    

    var chosendate3 =  document.getElementById("dateend").value;
    console.log(chosendate3);

    const x = new Date(setdate2);
const y = new Date(chosendate3);

if(x<y){


// console.log(x)
}
else{
  alert("Sorry your request date is not accepted!")
  document.getElementById("dateend").value = setdate2;

}
}




var activepage = document.getElementById("joform");
 activepage.classList.remove("text-gray-700");
  activepage.classList.add("text-blue-700");
  activepage.classList.remove("dark:text-gray-400");
activepage.classList.add("dark:text-white");






</script>








</body>
</html>