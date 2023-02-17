<?php
    function createUser(){
        global $connection;
        if(isset($_POST['submit'])){

            $name = $_POST['name'];
            $password = $_POST['password'];

            $error = [

                'name'=> '',
                'password'=>''
        
            ];


            //check input satify.
            if(strlen($name) < 2){
                $error['username'] = 'Username needs to be longer!';
            }

            if(strlen($password <6)){
                $error['password'] = 'Your password have to be more than 6 characters!';
            }
            //check input is duplicate with the database
            if(checkDuplicateDB($name)){
                $error['name'] = 'Username have been used!';
            }

            foreach($error as $key => $value ){
                
                if(empty($value)){
                    unset($error[$key]);
                      
                }
                

            }

            //if no error, conect to db and add new user
            if(empty($error)){
                    //query
                $query = "INSERT INTO users(userType, userName, password) ";
                $query .="VALUES ('Student', '$name', '$password')";

                //result
                if(mysqli_query($connection, $query)){
                    echo "<script type='text/javascript'>alert('Successful')</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Somethings went wrong!')</script>";
                }
            }
            

        }
    }

    function checkDuplicateDB($userName){
        global $connection;
        $query = "SELECT * FROM users ";
        $query .= "WHERE userName = '$userName'";

        $result = mysqli_query($connection, $query);

        if($result -> num_rows >0){
            return true;
        } else{
            return false;
        }
    }
    

?>