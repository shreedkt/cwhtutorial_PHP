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

$sql = "DELETE FROM `phptrip` WHERE `dest` = 'Russia' LIMIT 3";
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br> Number of affected rows: $aff <br>";

if($result){
  echo "Deleted Successfully";
}else{
  echo "Error in Deleting : ".mysqli_error($conn);
}

?>