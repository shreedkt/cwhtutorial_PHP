<?php

// Connection to a database
$servername = "localhost";
$username = "root";
$password = "";
$database ="notedown";

// Create a connection

$conn = new mysqli($servername, $username, $password, $database);

// Die if connection was not succesful

if(!$conn){
  die("Connection failed:".mysqli_connect_error());
}else{
  echo "Connected Successfully!";
}

?>