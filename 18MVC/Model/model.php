<?php



class model
{

        public $connection;

            

    public function __construct()
    {


        
        try
        {
                                                     
            $this->connection = new mysqli("localhost","root","","gym_data");
            // echo "Connection was  successful";
        }
        catch(\Throwable $th)
        {
            // echo "Connection was not successful";
        }
    }

    public function register($data)
    {
        // array_pop($data);
        array_pop($data);
        
        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);

        // echo "<pre>";
        // print_r($keysdata);
        // echo "<br>";
        // print_r($valuesdata);
        // echo "<br>";
        // print_r($data);
        // echo "</pre>";
        // exit;

                       

       
            $sql = "INSERT INTO gym_data ($keysdata) VALUES ('$valuesdata')";
            
            echo $sql;
            // exit;

            $this->connection->query($sql);

        // print_r(array_keys($data));
        // print_r(array_values($data));
        // print_r($data);
        // echo "</pre>";


        // if(isset($_REQUEST['register']))
        // {
            header("location:login");
        
        // }


    } 

    public function login($data) 
    {   
        if(isset($data['login']))
        {
        //     echo "<pre>";
        //     print_r($_REQUEST);
        //     echo "</pre>";

            $SQL = "SELECT * FROM gym_data WHERE (Email = '$data[email]' OR Username = '$data[email]')
                AND Password = '$data[password]';";

                // echo "$SQL";
           
          $sqlex = $this->connection->query($SQL);
            // echo "<pre>";
            // print_r($sqlex);
            // echo "</pre>";
     
        }
        if($sqlex->num_rows > 0)
        {
            $userdata = $sqlex->fetch_object();
            //  echo "<pre>";
            // print_r($userdata);
            // echo "</pre>";
            
            if($userdata->role_as == 1)
            {
                echo "Admin side";
                header("location:admin-dashboard");
            }
            else
            {
                // echo "User side";
                header("location:home");
            }

        }
        // else
        // {
        //     // echo "Login Failed";
        //     echo "<script> alert('Invalid Username or Password')  </script>";

        // }
        


    }
    
    


}


// $model = new model;
// $model->register("Save Data");
// $model->register("<br>Update Data");













?>