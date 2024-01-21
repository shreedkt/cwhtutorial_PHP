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
  $name = "Vikrant";
  $destination = "Russia";

  // SQL Query to Be Executed
  $sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name','$destination')";
  $result = mysqli_query($conn,$sql);

// Add new Trip to the trip table in the DataBase
  if($result){
    echo "<br>Record is inserted successfully.";
  }else {
    echo "Record is not inserted Successfully: ".mysqli_error($conn)."<br>";
  }

?>