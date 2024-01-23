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

$sql = "SELECT * FROM phptrip WHERE dest = 'garhwa'";
// $sql = "SELECT * FROM phptrip WHERE dest regexp 'garhwa'";
$result = mysqli_query($conn, $sql);
  
// Find the numbers of record returned. Uses of WHERE Clause to fetch data from the database
  $num = mysqli_num_rows($result);
  echo $num." Records founds in the Database <br>";
  $no=1;
if($num>0){
  while($row = mysqli_fetch_assoc($result)){
    echo $no.". Hello ".$row['name']." Welcome to ".$row['dest'];
    echo "<br>";
    $no = $no+1;
  }
}
// Uses of WHERE Clause to Update data 

// $sql = "UPDATE `phptrip` SET `name` = 'Sahu' WHERE `phptrip`.`sno` = 3";
$sql=  "UPDATE `phptrip` SET `name` = 'Rangdaar' WHERE `dest` = 'garhwa'";
$result= mysqli_query($conn, $sql);
echo var_dump($result) ."<br>";
$aff = mysqli_affected_rows($conn);
echo "Number of affected row: $aff";
echo $result;
if($result){
  echo "Record is updated Successfully";
}else{
  echo "Record is not Updated Successfully";
}
?>