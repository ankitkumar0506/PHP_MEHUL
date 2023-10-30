<?php


require_once("model/model.php");
class Controller extends model
{
public $baseurl = "http://localhost/PHP_MEHUL/Advance_PHP_Assignment/MVC/assets/";
public $adminurl = "http://localhost/PHP_MEHUL/Advance_PHP_Assignment/MVC/assets/admin/";
public $registerurl = "http://localhost/PHP_MEHUL/Advance_PHP_Assignment/MVC/assets/register_assets/";  
public $loginurl = "http://localhost/PHP_MEHUL/Advance_PHP_Assignment/MVC/assets/login_assets/"; 
    public function __construct()
    {
        parent::__construct();

        
        if (isset($_SERVER['PATH_INFO'])) 
        {
            switch ($_SERVER['PATH_INFO'])
            {
                case "/home":
                    require_once("view/header.php");
                    require_once("view/home.php");
                    require_once("view/footer.php");
                    break;

                case "/store":
                    $pharmacy = $this->select('pharmacy');
                    require_once("view/header.php");
                    require_once("view/store.php");
                    require_once("view/footer.php");
                    break;
                
                case "/register":
                    if(isset($_REQUEST['register']))
                    {
                        $data = $_REQUEST;
                        $this->register($data);
                    }
                    
                    require_once("view/register.php");
                    break; 
                    //register page ahithi bnva start thase pachii model ma quarry banse....1
                
                case "/login":
                    $data = $_REQUEST;
                    $this->login($data);
                    require_once("view/login.php");
                    break; 
                    //log in pagr phela ahithi banse pachhi model ma bdhi quarry banse....1


                case '/adminhome':
                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/adminhome.php");
                    require_once("view/admin/adminfooter.php");
                    break;

                case '/addproduct':
                    // admin side add products

                        if(isset($_REQUEST['add']))
                        {
                             echo "<pre>";
                             print_r($_REQUEST);
                             print_r($_FILES);
                             echo "</pre>";
                  
                             $image = "upload/products/".time().$_FILES['image']["name"];
                             move_uploaded_file($_FILES['image']['tmp_name'],$image);
                             
                             $data =array(
                             
                             "description" => $_REQUEST['description'],     
                             "price" => $_REQUEST['price'],     
                             "image" => $image,    
                  
                             );
                  
                  
                  
                             $this->insert("pharmacy",$data);
                        }
                        
                        
                        require_once("view/admin/adminheader.php");
                        require_once("view/admin/addproduct.php");
                        require_once("view/admin/adminfooter.php");
                        
                        break;
                        //aa cas databass ma product add krva mate chhe... step 2...


                        case '/adminproducts':
                            $pharmacy = $this->select("pharmacy");
                            if(isset($_REQUEST['delete_btn']))
                            {
                                $this->delete("pharmacy","$_REQUEST[delete_btn]"); //aa line admin data delete kri sake te mate chhe... step 2....
                            }

                            require_once("view/admin/adminheader.php");
                            require_once("view/admin/adminproduct.php");
                            require_once("view/admin/adminfooter.php");
                            
                            break;
                            //aa case admin ma products sow krva ke jova mate chhe.... step 2...

                        
                case '/allusers':
                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/allusers.php");
                    require_once("view/admin/adminfooter.php");
                    break; 
                        


            }
        }
        else
        {
            header("location:home");
        }
    }
}
$obj = new Controller();    






















?>