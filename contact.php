<!DOCTYPE html>
<html lang="en">
<head runat="server">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Indiclone</title>
    <link rel="shortcut icon" href="images/favicon.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        rel="stylesheet" />
    <!-- external Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind:500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Scope+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/menu.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <!-- Mobile View CSS -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- Javascript -->
    <!-- Main JS -->
    <script src="js/jquery-2.1.1.js" type="text/javascript"></script>
</head>
<body>
   
    <div class="container-fluid">
        <!-- -----------------Menu Row---------------- -->
        <div class="row">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>  
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Indiclone Logo" /></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html" >About Us</a>
                            </li>  
                            <li>
                                <a href="products.html">Products</a>
                            </li> 
                            <li class="active">
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>  
                </div>
            </nav>
        </div>
        <div class="clearfix">
        </div>
        <!-- -----------------content Row---------------- -->
        <div class="row">
            <div class="general_row contact_row hidden_block">
                <div class="">
                    <div class="col-md-7">
                        <div class="form-block">
                            <h1 class="main_title">
                                Get In Touch</h1>
                            <div class="clearfix">
                            </div>
                            <p class="home_tag">
                                Leave us your inquiries and we will contact you or <br> call +91 97253 25462</p>
                            <div class="clearfix">
                            </div>
                            <form action=""  method="post" name="form1" class="contact-form text-left">
                            <div class="col-md-6">
                                 <input type="text" name="name" placeholder="Full Name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                 <input type="email" name="email" placeholder="Email Id" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                 <input type="text" name="phone" placeholder="Phone No" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="subject" placeholder="Subject" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" placeholder="Let us know what you need" name="enquiry" required></textarea>                 
                            </div>
                            <div class="col-md-12">
                                  <div class="g-recaptcha" data-sitekey="6Lcj2P0ZAAAAAIrnjpsibWmPDqVW2q4euN9e8Pt5" data-callback="recaptcha_callback"></div>               
                            </div>
                            <div class="col-md-12">
                                <input  type="submit" name="submit" id="submit"  class="btn gen_btn" value="submit" disabled/>
                            </div>
                        </form>
                        
                        <!-------------------------captcha---------------->
                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <script>
                    function recaptcha_callback()
                    {
                            var registerBtn = document.querySelector('#submit') ;
                            registerBtn.removeAttribute('disabled');
                            registerBtn.style.cursor = 'pointer'
                    }
                </script>
                <!-------------------------captcha---------------->
                        </div>
                    </div>
                    <div class="col-md-5 rm-padding">
                        <img src="images/mainSlider/contactus.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <!-- -----------------Map Row---------------- -->
        <div class="row">
            <div class="general_row map_row hidden_block">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.6758260921647!2d72.91080045681885!3d20.396251753883405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c02ba9f3bfe84e0!2sM%20cube%2C%20the%20business%20hub!5e0!3m2!1sen!2sin!4v1584186739010!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </iframe>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <!-- -----------------footer Row---------------- -->
              <div class="row">
            <div class="general_row footer_row hidden_block">
                <div class="container">
                    <div class="col-md-3 col-md-offset-1">
                        <div class="f_block">
                            <h2>
                                Quick Link</h2>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="f_block">
                            <h2>
                                Address</h2>
                            <p>
                                C-220, M Cube, N.H.8, <br> Nr Bombay Hotel, Balitha, Vapi,  <br>India. 396191</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <div class="f_block">
                            <h2>
                                Get In Touch</h2>
                            
                            <p><strong>P : </strong>
                                <a href="tel:+919725325462" target="_blank">+91 9725325462</a></p>
                            <!--<p><strong>E : </strong><a href="mailto:indiclonellp@gmail.com" target="_blank">indiclonellp@gmail.com</a></p>-->
                            <p><strong>E : </strong><a href="mailto:contact@indiclone.com" target="_blank">contact@indiclone.com</a></p>
                        </div>
                    </div>
                    
                    <!-- <div class="col-md-3">
                        <div class="f_block">
                            <h2>
                                Find Us Here</h2>
                                <div class="social">
                            <a href=""><i class="fa fa-facebook"></i></a><a href=""><i class="fa fa-linkedin"></i>
                            </a><a href=""><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
        <a href="#0" class="cd-top"><i class="fa fa-angle-double-up"></i></a>
        <div class="clearfix">
        </div>
        <!-- -----------------copyright Row---------------- -->
        <div class="row">
            <div class="general_row copyright_row">
                <div class="container">
                    <p>
                        &copy; Indiclone. Designed By : <a href="https://www.softyoug.com" target="_blank">Softyoug
                            Solutions</a></p>
                </div>
            </div>
        </div>
        <a href="https://api.whatsapp.com/send?phone=919725325462" title="WhatsApp" target="_blank"
            class="wa_btn">
            <img src="images/wa.png" />
            WhatsApp</a>
    </div>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
        $("document").ready(function ($) {
            var fh = $('.navbar-inverse');
            $(window).scroll(function () {
                if ($(this).scrollTop() > 0) {
                    fh.addClass("fixed-header");
                }
                else {
                    fh.removeClass("fixed-header");
                }
            });
        });
    </script>
    <!--Back to Top-->
    <script src="js/backtotop.js" type="text/javascript"></script>
   
</body>
</html>

<?php
if(isset($_POST["submit"])) {

$to = 'noreply.enquirymail@gmail.com';
$subject = 'Contact Enquiry';
$from = 'noreply.enquirymail@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];   
$enquiry = $_POST['enquiry'];
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'noreply.enquirymail@gmail.com';
$mail->Password = 'Softyoug@1234';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('noreply.enquirymail@gmail.com', 'INDICLONE LLP');
$mail->addReplyTo('noreply.enquirymail@gmail.com', 'INDICLONE LLP');
$mail->addAddress('contact@indiclone.com');
$mail->isHTML(true);
$mail->Subject = 'Contact Enquiry';
$message = '<html><body>';
    $message .= 'Name : '.$name."<br/>";
    $message .= 'Email Id : '.$email."<br/>";
    $message .= 'Phone No. : '.$phone."<br/>";
    $message .= 'Subject : '.$subject."<br/>";
    $message .= 'Enquiry : '.$enquiry."<br/>";
$message .= '</body></html>';
$bodyContent = $message;
$mail->Body    = $bodyContent;
if(!$mail->send()){
// error_reporting( E_ALL );
echo "<script type='text/javascript'>alert('Unable to send email. Please try again.');</script>";

} else{
echo "<script type='text/javascript'>alert('Your mail has been sent successfully.');</script>";

}
}
?>