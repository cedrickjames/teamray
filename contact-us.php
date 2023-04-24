
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';


if(isset($_POST["sendEmail"])){
$message = $_POST['senderMessage'];
$replyTo = $_POST['replyTo'];
$senderSubject = $_POST['senderSubject'];
$senderName = $_POST['senderName'];

  $mail = new PHPMailer(true);   
  // Passing `true` enables exceptions
try {
//Server settings
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ojtteam04@gmail.com';     // Your Email/ Server Email
$mail->Password = 'sgkycqwaincxncrh';                     // Your Password
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);                         
$mail->SMTPSecure = 'ssl';                           
$mail->Port = 465;                                   

//Send Email
//eto ang mag front  notificationsys01@gmail.com

//Recipients
$mail->addAddress('ojtteam04@gmail.com');              
$mail->addReplyTo($replyTo);

//Attachment

// if(!empty($filename)){
//     $mail->addAttachment($location, $filename); 
// }

//Content
$mail->isHTML(true);                                  
$mail->Subject = $senderSubject;
$mail->Body    = $senderName .'<br>'.$message;
$mail->send();
$_SESSION['message'] = 'Message has been sent';
// echo $_SESSION['message'];
echo '<script>alert("Message has been sent")</script>';
// header("location: form.php");
} catch (Exception $e) {
$_SESSION['message'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
echo '<script>alert("Message could not be sent. Mailer Error")</script>';


}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teamray</title>
    
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" /> -->
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  
     <!-- tailwind play cdn -->
    <script src="https://cdn.tailwindcss.com"></script>

     <!-- from flowbite cdn -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />


    <!-- browser logo -->
    <link rel="shortcut icon" href="resources/img/logo.png">
    <link rel="stylesheet" href="css/style.css" />


    <script src="node_modules/tw-elements/dist/js/index.min.js"></script>
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
    background-image: url('resources/img/sofa.png');

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
    <?php require_once 'megamenu-contact.php';?>
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

<section class="top-0 sm:top-10 relative mt-0 mb-22"   >


  <div class="px-0 sm:px-6  py-12 md:px-12 bg-white text-gray-800 text-center lg:text-left">
    <div class="container mx-auto xl:px-2">
      <div class="grid lg:grid-cols-2 gap-12 flex items-center">
        <div data-aos="fade-right" class="h-full mt-12 lg:mt-0 w-full">
        <div style="background-color: #0f142a"
                class="h-full w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Contact Agent</h5>
                    <h4 class="text-xl font-medium text-gray-900 dark:text-white">Mr. Raymond Salonga</h4>
                    <p class="text-lg font-medium text-slate-400 dark:text-slate-400">Property Agent</p>
                    <br>
                <form class="space-y-6" action="contact-us.php" method="POST">



                    <div>
                        <label for="email"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            Name</label>
                        <input type="text" name="senderName" id="fullname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="" required>
                    </div>                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            From</label>
                        <input type="email" name="replyTo" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="name@company.com" required>
                    </div>                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your 
                            Subject</label>
                        <input type="text" name="senderSubject" id="subject"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="" required>
                    </div>


                    <div><textarea id="message" name="senderMessage"rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a message"></textarea>
                    </div>
                    <button type="submit" name="sendEmail"
                        class="w-full text-white bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">Send Message</button>
          
                </form>
            </div>
        </div>
        <div  data-aos="fade-down" class="mx-2 sm:mx-0 mb-12 lg:mb-0">
          <img
            src="resources/img/sala.png"
            class="w-full h-max"
            alt=""
          />
        </div>
      </div>
    </div>
  </div>
</section>
<section >



      
</section>

</div>
<!-- Container -->



<!-- about us -->

<!-- end of about us -->








<script src="services/index.js"></script>


    

<!-- flowbite javascript -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js">

  
</script>














</body>
</html>