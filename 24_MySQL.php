<?php
echo "Welcome to the stage where we are ready to get connected to a database <br>";
  /*  
    Way to connect MySQL Database
    1. MySQLi extension
        a. Object method
        b. Procedural Method
    2. PDO
    */
    // Connecting to the database 
    $servername = "localhost";
    $username = "root";
    $password = "";
    

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password);

    //Die if connection was not succesful
    if(!$conn){
      die("Sorry we fail to Connect: ".mysqli_connect_error());
    } else{
      echo "Connection was succesful";
    }
    
    ?>
    