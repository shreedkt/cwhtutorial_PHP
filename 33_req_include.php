<?php
//  include "_dbconnect.php";
require "_dbconnect.php";

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the numbers of records returned 
$num = mysqli_num_rows($result);
echo $num;
echo " Record Found in the database <br>";

// For showing  all data from table
while($row = mysqli_fetch_assoc($result)){
  echo $row['sno'].". Name:- ".$row['name']." Email:- ".$row['email']." Trip:- ".$row['destination'];
  echo "<br>";
}
/*he Basic differance between require and include  is that if a file required by using require statement cannot be found then it will produce Fatal error but in the case of include it proceed without giving error.

*/
?>