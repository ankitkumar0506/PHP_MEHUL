<?php





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" id="mfn-fonts-css" href="https://fonts.googleapis.com/css?family=Poppins%3A1%2C300%2C400%2C400italic%2C500%2C700%2C700italic&amp;display=swap&amp;ver=5.8" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
</head>
<body>
    <div class="login-main">
        <div class="left-side">
            <div class="logo">
                <img src="images/edited01.png" alt="">
            </div>
            <div class="img">
                <img src="images/reg-page-img-removebg-preview.jpg" alt="">
            </div>
        </div>
        <div class="right-side a">
             <div class="form">
                <h1>Login Form</h1>
                <p>If you are not registered? <a href="register.php">click here for Registration</a></p>
        
                <form action="" method="post">
                    
                    <span class="fa fa-text-width"> 
                        <input type="text" name="emailid" id="email_id" placeholder="Username/Phone/Email">
                    </span>
                    <br>
                    
                    <span class="fa fa-lock"> 
                        <input type="password" name="password" id="password" placeholder="Your password">
                    </span>
                    <br>
    
                    <input class="btn1" type="submit">
                    <br><br>
                    
                    <a href="">forgot password?</a>
                    <hr><br>
                
                </form>
    
                <h3>or you can join with</h3>
                    <div class="icons">
                        <a href="#" class="fa fa-google fa-2x" style="color: #db3236 ;"></a>
                        <a href="#"class="fa fa-facebook fa-2x" style="color: #0866FF;"></a>
                        <a href="#"class="fa fa-twitter fa-2x" style="color: #26a7de;"></a>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>

<style>
   body *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: poppins;
}
body{
    background: url(images/WhatsApp\ Image\ 2023-09-27\ at\ 15.50.26.jpg);
    background-size: cover;
    padding: 20px 0 0 65px;

}
.login-main{
    display: grid;
    grid-template-columns: 1fr 1fr;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 5px gray;
    height: 90vh;
    width: 90vw;
}
.logo img{
    position: absolute;
    top: 0;
    left: 0;
    height: 20vh;
    width: 20bw;
}
.img{
    padding-left: 30px;
}
.img img{
    height: 90%;
    width: 90%;
}
.a{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
}
.left-side{
    
    padding: 30px;
    position: relative;
    display: flex;
    align-items: center;
    text-align: center;
}
.right-side{
    padding: 10px 30px 0 30px;
}
.form h1
{
    color: #1d4353;
    margin-bottom: 6px;
    font-size: 35px;
}
.form p
{
    color: #26a7de;
    margin-bottom: 30px;
}
input
{
    border: none;
    outline: none;
    padding: 10px 15px;
    background: transparent;
}
span
{
    background: white;
    border: 1px solid black;
    padding: 10px 20px;
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
    text-align: left;
    box-shadow: 0 0 4px gray;
}
form
{
    text-align: center;
}
.btn1
{
    background: rgba(2,136,201,255);
    color: white;
    font-weight: bold;
    border-radius: 20px;
    padding: 10px 30px;
    font-size: 13px;
    cursor: pointer;
    font-size: 15px;
}
h3
{
    margin-bottom: 15px;
    text-align: center;
}
a
{
    margin-right: 10px;
}   
.fa-google,.fa-facebook,.fa-twitter{
    text-decoration: none;
}
.icons{
    width: 50%;
    text-align: center;
    margin:auto;
}
</style>