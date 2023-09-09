<!DOCTYPE html>
<html lang="en">
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
    
</body>
</html>


<?php 

        session_start();

        echo"<div class='center'>";
        echo "<h4>WELCOME TO THE BANK's APP</h4>.<br>";

        echo"<h2 style='text-align:center;'>Option Menue<h2>";
        echo"<h3 style='text-align:left;'>1) Add Costomer<h3>";
        echo"<h3 style='text-align:left;'>2) Viwe Customer<h3>";
        echo"<h3 style='text-align:left;'>3) Search Customer<h3>";
        echo"<h3 style='text-align:left;'>4) Viwe All Customer<h3>";
        echo"<h3 style='text-align:left;'>5) Total Amounts in Bank<h3>";
        
        echo "<form action='' method='post'>";
        echo"<lable> Enter Operation which you want to perform: </labke>";
        echo"<input type='number' name='role' placeholder='Choose Yor Role'>";
        echo"<button name='ok'>OK</button>";
        echo"</div> ";
        echo"</form>";
        "</div>";
        
        echo "<br><br>";
        if(isset($_REQUEST['ok']))
        {
            switch ($_REQUEST['role']) 
            {
                case 1 :
                    
                    echo "<form action='bank.php' method='post'>";
                    echo"<lable> Enter Acount No: </labke>";
                    echo"<input type='' name='data' placeholder='Choose Yor Role'>";
                    // echo"<button name='name1'>OK</button> <br><br>";
                    // echo"</form>"; 
                    
                
                    // echo "<form action='' method='post'>";
                    echo"<lable> Enter Customer Name: </labke>";
                    echo"<input type='' name='ab2' placeholder='Choose Yor Role'>";
                    // echo"<button name='name2'>OK</button> <br><br>";
                    // echo"</form>";

                    // echo "<form action='' method='post'>";
                    echo"<lable> Enter Opening Balance: </labke>";
                    echo"<input type='' name='ab3' placeholder='Choose Yor Role'>";
                    echo"<button name='kaipan'>OK</button> <br><br>";
                    echo"</form>";
                    
                    
                    break;
                    
                    case 2 :
                    $arr = array($_REQUEST);
                     foreach($_SESSION['balance'] as $KEY => $value ) 
                    {  
                       echo "$KEY : $value <br>";
                    }
                        



                    

                
                }  

            }   
                


                if(isset($_REQUEST['kaipan']))
                {
                    $_SESSION['balance']=array("data"=>$_REQUEST['data'],"ab2"=> $_REQUEST['ab2'],"ab3"=>$_REQUEST['ab3']); 
                }
                


                    






            ?>