<?php
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;   
if (isset($_POST['fname'])){



    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['message'];


    

    
    // use PHPMailer\PHPMailer\SMTP;
    $mail = new PHPMailer();

    // Settings
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';

    $mail->Host       = "mail1.test.com";    // SMTP server example
    $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->Port       = 465;                    // set the SMTP port for the GMAIL

    $mail->SMTPSecure = 'ssl';
    $mail->Username   = "lush@test.com";            // SMTP account username example
    $mail->Password   = "pass";            // SMTP account password example

    // Content
    $mail->setFrom("lush@test.com" , "Lush | ".$fname);   
    $mail->addAddress('testemail@gmail.com');

    $mail->isHTML(true);                       // Set email format to HTML
    $mail->Subject = 'New Message From ' . $fname;
    $mail->Body    = "Name: ".$fname."<br>Last Name: ".$lname."<br>Email: ".$email."<br>Phone: ".$phone ."<br><br>".$msg;
    $mail->AltBody = $msg;

   

if(!$mail->send()) 
{
$failed="true";

} 


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- meta tags for seo  -->
    <title>Book Your Appointment | Lush Beauty Salon</title>
    <meta name="title" content="Book Your Appointment | Lush Beauty Salon" />
    <meta name="description" content="If you want to book your appointment, kindly visit our contact page. For more information, check out our WhatsApp number." />
    <!-- Open Graph  -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://lushbeautysalon.com/contact" />
    <meta property="og:title" content="Book Your Appointment | Lush Beauty Salon" />
    <meta property="og:description" content="If you want to book your appointment, kindly visit our contact page. For more information, check out our WhatsApp number." />
    <meta property="og:image" content="/seo-img.jpeg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://lushbeautysalon.com/contact" />
    <meta property="twitter:title" content="Book Your Appointment | Lush Beauty Salon" />
    <meta property="twitter:description" content="If you want to book your appointment, kindly visit our contact page. For more information, check out our WhatsApp number." />
    <meta property="twitter:image" content="/seo-img.jpeg" />
    <!-- meta tags for seo end -->


    <!-- icons for seo  -->
    <!-- <link rel=“icon” href=”/favicon.ico” type=“image/x-icon”> -->
    <link rel=“shortcut icon” href=“/favicon.ico” type=“image/x-icon”>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    

    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/social-btn.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap.css"> -->
    
    <script src="https://kit.fontawesome.com/32278cd1a4.js" crossorigin="anonymous"></script>
    
</head>
<body>

<?php
    include("../assets/components/header.php")
    ?>


<?php

if (isset($_POST['fname'])){
    if(!isset($failed)){

        echo "<div class='email-sent'>
        Your message has been sent successfully. We'll get in touch with you soon.
        </div>";
    }
    else{
        echo "<div class='email-failed'>
        There has been some critical error in sending message. Please try again.
        </div>";
        
    }
}

?>
<section class="contact-section">

    <div class="contact-form">
        <div class="contact-heading">
            <h2>Contact us</h2>
            <p>Complete the form below and book your appointment.</p>
        </div>
        <form method="POST" action="./" id="myform">
            <input placeholder="Name" required name="fname" id="fname" type="text">
            <input placeholder="Last Name" required name="lname" id="lname" type="text">
            <input placeholder="Email" required name="email" id="email" type="email">
            <input placeholder="Mobile" required name="phone" id="phone" type="tel">
            <textarea required name="message" form="myform" placeholder="Message" spellcheck="false"></textarea>
            <input class="button" type="submit">
        </form>
    </div>

    <div class="contact-address">
        <div class="info-container">
        <i class="fa-solid fa-phone"></i>
            <h2>Get in touch</h2>
            <div class="links">
                <a target="_blank" href="tel:+920000000000">0300-0000000</a>
                
                <a target="_blank" href="mailto:testemail@gmail.com">testemail@gmail.com</a>
            </div>
        </div>
        <div class="info-container">
        <i class="fa-solid fa-house"></i>
            <h2>Address</h2>
            <div class="links">
                <ahref="">Pakistan</a>
            </div>
        </div>
        <div class="info-container">
        <i class="fa-solid fa-clock"></i>
            <h2>Opening hours</h2>
            <div class="links">
                <ahref="">Monday to Sunday 10:30 am - 8:00 pm
        24/7 Working Days</a>
            </div>
        </div>
    </div>

</section>
<!-- contact section  -->
<div class="location">
<iframe src="https://www.google.com/maps/" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
<!-- Social Media Buttons HTML -->
<div class="wrapper">
  <a target="_blank" href="https://www.facebook.com/" class="icon facebook">
    <div class="tooltip">Facebook</div>
    <span><i class="fab fa-facebook-f"></i></span>
  </a>
  <!-- <a href="#" class="icon twitter">
    <div class="tooltip">Twitter</div>
    <span><i class="fab fa-twitter"></i></span>
  </a> -->
  <a target="_blank" href="https://www.instagram.com/" class="icon instagram">
    <div class="tooltip">Instagram</div>
    <span><i class="fab fa-instagram"></i></span>
  </a>
  <a target="_blank" href="https://wa.me/92000000000" class="icon whatsapp">
    <div class="tooltip">Whatsapp</div>
    <span><i class="fab fa-whatsapp"></i></span>
  </a>
  <!-- <a href="#" class="icon github">
    <div class="tooltip">Github</div>
    <span><i class="fab fa-github"></i></span>
  </a> -->
  <!-- <a href="#" class="icon youtube">
    <div class="tooltip">Youtube</div>
    <span><i class="fab fa-youtube"></i></span>
  </a> -->
</div>
<!-- End Social Media Buttons HTML -->
<?php
    include("../assets/components/footer.php")
    ?>




    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <!-- main js  -->
    <script src="../assets/js/script.js"></script>
</body>
</html>