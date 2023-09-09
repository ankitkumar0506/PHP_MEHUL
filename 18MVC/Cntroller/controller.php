



<?php


require_once("Model/model.php");

class controller extends model
{       
    public $baseurl = "http://localhost/PHP_MEHUL/18MVC/Assets/";           
                        
public function __construct()
{

        parent::__construct();

        
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
                    // echo "Inside if";
                    // require_once("Templates/gymlife-Ankit/index.html");
                        require_once("View/Header.php");
                        require_once("View/home.php");
                        require_once("View/Footer.php");
                        break;


                    case "/about":
                        require_once("View/Header.php");
                        require_once("View/about.php");       
                        require_once("View/Footer.php");
                        break;
                    
                  
                    case "/class":
                        require_once("View/Header.php");
                        require_once("View/class.php");       
                        require_once("View/Footer.php");
                        break;


                    case "/services":
                        require_once("View/Header.php");
                        require_once("View/services.php");       
                        require_once("View/Footer.php");
                        break;

                 
                    case "/team":
                        require_once("View/Header.php");
                        require_once("View/team.php");       
                        require_once("View/Footer.php");
                        break;

                        
                    case "/pages":
                        require_once("View/Header.php");
                        require_once("View/team.php");
                        require_once("View/Footer.php");
                        break;

                        
                    case "/timetable":
                        require_once("View/Header.php");
                        require_once("View/timetable.php");       
                        require_once("View/Footer.php");
                        break;


                    case "/bmi-calculator":
                        require_once("View/Header.php");
                        require_once("View/bmi-calculator.php");       
                        require_once("View/Footer.php");
                        break;


                    case "/gallery":
                    require_once("View/Header.php");
                    require_once("View/gallery.php");       
                    require_once("View/Footer.php");
                    break;


                    case "/blog":
                        require_once("View/Header.php");
                        require_once("View/blog.php");       
                        require_once("View/Footer.php");
                        break;


                    case "/404":
                        require_once("View/Header.php");
                        require_once("View/404.php");       
                        require_once("View/Footer.php");
                        break;    


                    case "/contact":
                        require_once("View/Header.php");
                        require_once("View/contact.php");       
                        require_once("View/Footer.php");
                        break;
    





                    case "/register":
                        if(isset($_REQUEST['register']))
                            
                        {  
                            $data = $_REQUEST;
                            $this->register($data);
                            // echo "<pre>";
                            // print_r($_REQUEST);
                            // echo "</pre>";

                        }                                
                        require_once("View/register.php");
                        break;


                        case "/login":
                            
                                
                    
                                $data = $_REQUEST;
                                $this->login($data);
                                // echo "<pre>";
                                // print_r($_REQUEST);
                                // echo "</pre>";
    
                                                          
                            require_once("View/login.php");
                            break;
    
                            case "/admin-dasbord":
                                require_once("View/Admin/adminhome.php");
                                require_once("<View/Admin/header.php");
                                require_once("View/Admin/footer.php");       
                                break;


                    






            }
        }
        else
        {
            
            // echo "Inside else";
            header("location:home");
        }
   
    
}


}

$obj = new controller;


?>