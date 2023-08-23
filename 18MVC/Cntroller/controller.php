<?php



class controller
{

public function __construct()
{



        
        // echo "<br>";
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
      
        if(isset($_SERVER['PATH_INFO']))
        {
            // echo "Inside if";
            switch($_SERVER['PATH_INFO'])
            {
                case "/home":
                    echo "Inside if";
                    require_once("Templates/gymlife-Ankit/index.html");
                    break;
            }
        }
        else
        {
            
            echo "Inside else";
            header("location:home");
        }
   
    
}


}

$obj = new controller;


?>