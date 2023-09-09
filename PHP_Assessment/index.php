
<!DOCTYPE html>
<html>
<head>
<style>
.center {
  margin: auto;
  width: 49%;
  border: 3px solid #73AD21;
  padding: 10px;
  
}
</style>
</head>
<body>
    <div class="center">
        <h1>WELCOME TO THE PHP BANK MANAGEMENT</h1><br>
        
        <h2 style="text-align:center;">Select Your Role<h2>
        <h3 style="text-align:center; margin-right: 100px; " >(1) Banker<h3>
        <h3 style="text-align:center; margin-right: 80px; ">(2) Customer<h3>
        <h3 style="text-align:center; margin-right: 115px; ">(3) Exite<h3>
        
        <form action="" method="post">
            
            <div class="field">
            <div class="fas fa-lock"></div>

            <input type="" name="rol" placeholder="Choose Yor Role">
            <button name="btn">OK</button>
            </div> 
           
         </form>
    </div>
</body>
</html>


<?php

if (isset($_REQUEST['btn']))
{

 switch ($_REQUEST['rol'])
 {
  case 1:
    if(isset($_REQUEST['btn']))
    {
      header("location:bank.php");
    }
    break;


    case 2:
        echo"<div class='center'>";
        echo "<h4>WELCOME TO THE CUSTOMER's APP</h4>.<br>";
        
        echo"<h2 style='text-align:center;'>Operations Mene<h2>";
        echo"<h3 style='text-align:left;'>1) Withdraw Amount<h3>";
        echo"<h3 style='text-align:left;'>2) Deposite Amount<h3>";
        echo"<h3 style='text-align:left;'>3) View Balance<h3>";
        echo "<form action='' method='post'>";
            
       
        
        echo"<input type='' name='rol' placeholder='Choose Yor Role'>";
        echo"<button name='welcomebank'>OK</button>";
        echo"</div> ";
        echo"</form>";
        "</div>";
            
      break;


      case 3:
        
        echo "<br>3 selected";
        break;

        default:
        {

        }
        


  
  

}}




















?>