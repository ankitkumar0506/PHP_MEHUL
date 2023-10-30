<?php

class model
{
    public $connection;
    public function __construct()
    {
        try 
        {
            $this->connection = new mysqli("localhost","root","","pharmacy");
            
        }
        catch (\Throwable $th)
        {
            //throw $th;
        }
    }
    //aa function databass sathe connect krva mate chhe... step 1.....
  
    public function register($data)
    {
        array_pop($data);

        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",", $keysdata);
        $valuesdata = implode("','", $valuesdata); 

        $sql = "INSERT INTO register_data ($keysdata) VALUES ('$valuesdata')"; //aa register page ni qurry bani....2

        // echo $sql;
        $this->connection->query($sql); //aa na thi databass ma qurry connect thay 6....
        header("location:login");

    }

    public function login($data)
    {
        {   
            if(isset($data['login']))
            {
                // echo "<pre>";
                // print_r($_REQUEST);
                // echo "</pre>";
    
                
                $SQL = "SELECT * FROM register_data WHERE (email = '$data[email]' OR full_name = '$data[email]') AND password = '$data[password]';";
                //aa log in pagni qurry bani
                //aa na thi databass mathi email full_name ane password layn aavse 
                //email ma email add krse, full_name ma full_name add krse ane passwordma pasword add krse
                //dakhla tarike regiter pagema databass sathe email ane full_name mate fild bnavi jena email:mk561995gmail.com add kri
                //ane password:123456 add kryo to aa qurry thi log-in ni fild email ane password ni fil hase tema tame input email:mk5619952gmail.com ane
                //password:123456 aapso te bannse match thay ke na thay te joyn aagd vadhse 
            
                    // echo "$SQL";
               
              $farsql = $this->connection->query($SQL); // aa thi databass ma conntion bane chhe
                // echo "<pre>";
                // print_r($farsql);
                // echo "</pre>";
         
            }
            if($farsql->num_rows > 0)
            {
                $userdata = $farsql->fetch_object();
                //  echo "<pre>";
                // print_r($userdata);
                // echo "</pre>";
                
                if($userdata->role_as == 1)
                {
                    echo "Admin side";
                    header("location:adminhome");
                }
                else
                {
                    // echo "User side";
                    header("location:home");
                }
                
                
    
            }
            else
            {
                echo "login Failed";
                echo "<script> alert('Invalid Username or Password')  </script>";
            }
            
            
    
    
        }
    }
    public function insert($tbl, $data)   
    {
        //   array_pop($data);
     
        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);

                echo "<pre>";
                print_r($keysdata);
                echo "<br>";
                print_r($valuesdata);
            echo "<br>";
            echo "</pre>";
 
     
        $sql = "INSERT INTO $tbl ($keysdata) VALUES ('$valuesdata')";
                //  echo "<pre>";
                // print_r($sql);
                // echo "</pre>";
         
        $this->connection->query($sql);
        
        //aa funvtion databass ma data nakhva mate chhe.... step 1
 
        header("location:$_SERVER[PHP_SELF]"); 
        //aa krvathi page tyane tya rehse....

    }

    public function select($table)
    {
        $sql = "SELECT * FROM $table";

        $farsql = $this->connection->query($sql);

        if($farsql->num_rows > 0)
        {
            while($data = $farsql->fetch_object())
            {
                $datas[] = $data;
            }
            return $datas;
        }   
    }
          //aa function admin ma products sow(jova mate) chhe.... step 1

    public function delete($tbl, $id)
    {
        $sql = "DELETE FROM $tbl WHERE id = $id";
        $this->connection->query($sql);
        header("location:$_SERVER[PHP_SELF]");
    }
        //aa function admin data delete kri sate te mate chhe.... step 1
    
    // public function update($tbl, $data, $id)    


        








}

























?>