<?php
 // Connecting to a database
 $servername = 'localhost';
 $username ="root";
 $password ="";
 $database ="contacts";

 //create a connection
 $conn = new mysqli($servername, $username, $password,$database);
 //Die if connection was not succesful
 if(!$conn){
   die("Sorry we Failed to Connect".mysqli_connect_error());
 }else{
   echo "Connection was Succesful<br>";
  }

  $sql = "SELECT * FROM `contactus`";
  $result = mysqli_query($conn, $sql);

  //Find the numbers of record returned
  // echo mysqli_num_rows($result);
  $num = mysqli_num_rows($result);
  echo $num;
  echo "Records founds in the Database <br>";

  //Display the rows returned by the sql query
  if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //We can fetch in a better way using the while Loop

    while ($row = mysqli_fetch_assoc($result)) {
      // echo var_dump($row);
      echo $row['sno']." Your Name is :- ".$row['name']." Your Emil Address:- ".$row['email']." Entery Time :- ".$row['dt'];
      echo "<br>";
    }
  }
?>