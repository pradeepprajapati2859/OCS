<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    

    $mysqli = new mysqli("localhost","root","");

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      else{
        echo "Successfully connected to MySQL ";
      }
    
?>