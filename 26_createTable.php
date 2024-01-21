<?php
  //connecting to MySQL server using mysqli_connect() function.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="dbdeepak";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //Die if connection was not succesful
    if(!$conn){
      die("Sorry we fail to Connect: ".mysqli_connect_error());
    } else{
      echo "Connection was succesful";
    }

    //create db
    $sql = "CREATE DATABASE dbHarry3";
    $result = mysqli_query($conn, $sql);

    //create table in DB
    $sql = "CREATE TABLE`phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`sno`))";
    $result = mysqli_query($conn, $sql);

    // Check for Table Creation Success

    if($result){
      echo "<br>Table created successfully.";
    }else {
      echo "Error creating table: ".mysqli_error($conn)."<br>";
    }

    
    
    ?>
    