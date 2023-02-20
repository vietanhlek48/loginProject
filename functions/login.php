<?php
    function login(){
        global $connection;
        session_start();
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            
            $query = "SELECT * FROM users";
            $query .=" WHERE userName = '$name' AND password = '$password'";

            //connect db and query
            $result = mysqli_query($connection, $query);

            //count result to check user
            $count = mysqli_num_rows($result);

            //check userName&password vs DB
            if($count > 0){
                $_SESSION["userName"] = $name;
                $_SESSION["password"] = $password;

                header('Location: http://localhost/loginProject/home_page.php');
            } else{
                echo "<script>
                alert('Your username or password was wrong!');
                window.location.href='index.php';
                </script>";
            }
        }

        

    }
?>