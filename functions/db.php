<?php
    $connection = mysqli_connect('127.0.0.1:3307', 'root', '', 'loginapp');

    if(!$connection){
        die("Connection failed!!" . mysqli_connect_error());
    }
?>