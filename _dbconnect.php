<?php 
// Connection to a database
$servername = "localhost";
$username = "root";
$password = "";
$database ="dbdeepak";

// Create a connection

$conn = new mysqli($servername, $username, $password, $database);

// Die if connection was not succesful

if(!$conn){
  die("Connection failed:".mysqli_connect_error());
}else {
  echo "Connection is Successful <br>"; 
}
?>