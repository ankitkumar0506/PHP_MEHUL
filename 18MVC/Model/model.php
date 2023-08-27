<?php



class model
{

        public $connection;

            

    public function __construct()
    {


        
        // try
        // {
                                                     
        //     $this->connection = new mysqli("localhost","root","","gym_data");
        //     // echo "Connection was  successful";
        // }
        // catch(\Throwable $th)
        // {
        //     // echo "Connection was not successful";
        // }
    }

    public function register($data)
    {




        array_pop($data);
        
        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);

        echo "<pre>";
        print_r($keysdata);
        echo "<br>";
        print_r($valuesdata);
        echo "<br>";
        print_r($data);
        echo "</pre>";


                       

       
            // $sql = "INSERT INTO gym_data ($keysdata) VALUES ('$valuesdata')";
            
            // echo $sql;

            // $this->connection->query($sql);

        // print_r(array_keys($data));
        // print_r(array_values($data));
        // print_r($data);
        // echo "</pre>";
    } 
}


// $model = new model;
// $model->register("Save Data");
// $model->register("<br>Update Data");













?>