<?php
  //connecting to MySQL server using mysqli_connect() function.
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

    //create db
    $sql = "CREATE DATABASE dbHarry3";
    $result = mysqli_query($conn, $sql);

    //create for the database creation success

    if($result){
      echo "DB was created successfully";
    }else{
      echo "DB was not Created because of the erroe --->".mysqli_error($conn);
    }
    echo "THe Result is ";
    echo var_dump($result);
    echo "<br>";


    
    
    ?>
    