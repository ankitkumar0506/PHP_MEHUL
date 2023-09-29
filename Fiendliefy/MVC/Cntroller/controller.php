<?php 


require_once("Model/model.php");

class controller extends model
{
    public $regurl = "http://localhost/PHP_MEHUL/Fiendliefy/MVC/Assets/";

    
public function __construct()
{
    // parent::__construct();

    if(isset($_SERVER['PATH_INFO']))
    {
        switch($_SERVER['PATH_INFO']) 
        {
            case "/register":
                require_once("View/register.php");
                break;

                     
        }
    }


}




}
























?>