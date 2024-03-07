<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = 'sazinxyz@gmail.com';
    $subject = $message;

    $message = " Email: {$email} Phone: {$phone}  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: bravecoder@code.akhfasoft.net';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="center ">
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form"  >
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>United City, Madani Ave, Dhaka 1212</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>salam201133@bscse.uiu.ac.bd</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>01921238128</p>
            </div>
          </div>
          <div class = "center">
          <div class="social-media" >
            <div > Contact With Us Via  </div>
            <div class="social-icons ">
              <a href="https://www.facebook.com/messages/t/syed.sazin">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://instagram.com/_mithila_farjana_">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="mailto:salam201133@bscse.uiu.ac.bd">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </div>
        </div>
        </div>
 
          
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
