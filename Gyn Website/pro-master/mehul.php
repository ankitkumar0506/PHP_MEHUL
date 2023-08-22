<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
ob_start();
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$OTP = rand(1000,9999);
if (isset($_REQUEST['register'])) {
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username   = 'mk561995@gmail.com';                     //SMTP username
    $mail->Password   = 'cazwyjoyheyrdnou';  // your password 2step varified 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                
    $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('mk561995@gmail.com', 'Name');
    $mail->addAddress($_REQUEST['email']);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    
    $bodyContent = "<h1>Subject: Your first week is on us!

    Hey!
    
    Do you want to kickstart your fitness journey, boost your energy levels, and have fun all at the same time?
    
    We’ve got something special just for you- a 7 Day Free Trial at our Club.
    
    We know that trying out a new gym can be intimidating. That’s why we’re offering you the opportunity to try it out free of cost or commitment! Mr & Mis BodyBilder has everything you need: state-of-the-art facilities, personal trainers, [add some specific amenities about your club here)and so much more.
    
    Come experience all our club has to offer. Call our front desk ta [Front Desk Number) or come in for a free tour! Or simply reply to this email.
    
    Let’s get you started soon!
    
    Best,
    
    [Mehul Kumar.]
    
    [Mr & Mis BodyBilder],</h1>:";

    // $image = "localhost\PHP ANKIT\Gyn Website\pro-master\MisBody.jpg";
    $bodyContent .= '<p>This is a email that send you From Gym Mr & Mis BodyBilder using PHPMailer</p>';
    $bodyContent .= "<h1 style='color:red;'>welcome to Uor Gym Mr & Mis BodyBilder</h1>";
    // $bodyContent .= "<img src='MisBody.jpg' alt='' height='400px' width='400px'>";
    $bodyContent .= "<img src='C:\xampp\htdocs\PHP ANKIT\Gyn Website\pro-master\MisBody.jpg' alt='no immage found'>";
// 

    $mail->Body    = $bodyContent."<br>".$_REQUEST["body"];
    $mail->Subject = 'Email from Mr & Mis BOdyBilder';
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
}

?>




<?php
if(isset($_REQUEST['register']))
{
    
    // echo "<pre>";
    // print_r($_REQUEST); 
    // echo "</pre>";
    
    setcookie("name",$_REQUEST['name'],time()+3600,"");
    setcookie("username",$_REQUEST['username'],time()+3600,"");
    setcookie("email",$_REQUEST['email'],time()+3600,"");
    setcookie("password",$_REQUEST['password'],time()+3600,"");
    setcookie("register",$_REQUEST['register'],time()+3600,"");
    
    header("location:index.php");
}

?>!

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <style>html {
    background-image: url("https://i.ibb.co/M1czT9x/wallpaper.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

h1 {
    font-family: 'Kanit', sans-serif;
    color: #fff;
    font-size: 40px;
}

#login_form {
    width: 408px;
    height: 650px;
    border-color: #fff;
    border-style: groove;
    border-radius: 25%;
    text-align: center;
    margin: auto;
    margin-top: 65px;
    backdrop-filter: blur(10px);
    transition: 0.3s;
}

#login_form:hover {
    box-shadow: 6px 10px 10px 10px rgba(255, 255, 255, 0.781);
}

h2 {
    font-family: 'Aoboshi One', serif;
    color: #fff;
    font-size: 25px;
    font-style: italic;
    text-align: center;
    cursor: pointer;
}

input {
    padding: 27px 23px;
    border-radius: 25px;
    background: inherit;
    border-style: none;
    box-shadow: 10px 10px 40px 20px rgba(0, 0, 0, 0.377);
    font-family: 'Work Sans', sans-serif;
    text-align: center;
    font-size: 19px;
    color: #fff;
    margin-bottom: 25px;
    transition: 0.2s;
}

input:hover {
    box-shadow: 10px 10px 40px 20px rgba(0, 0, 0, 0.616);
}

::placeholder {
    color: #ffffffa8;
    font-family: 'Work Sans', sans-serif;
    font-size: 20px;
    text-align: center;
    transition: 0.2s;
}

button {
    padding: 25px 40px;
    color: #000;
    background-color: #fff;
    border-style: none;
    border-radius: 25%;
    font-family: 'Nunito', sans-serif;
    font-size: 20px;
    transition: 0.3s;
}

button:hover {
    background-color: rgb(142, 196, 48);
    font-size: 24px;
    transform: scale(1, 1);
    box-shadow: 6px 6px 6px 6px rgba(255, 255, 255, 0.747);
    color: #fff;
    cursor: pointer;


}</style>
    <h2>YOUR LOGO</h2>
   <div id="login_form">
    <h1>Register</h1>
    <form action=""method="post">

        <input type="text" placeholder="name"name="name"><br>
        <input type="text" placeholder="username"name="username"><br>
        <input type="text" placeholder="email"name="email"><br>
        <input type="password" placeholder="Password"name="password"><br>
        <button name="register">Register</button>
    </form>
   </div>
</body>

</html>