<?php
//Start the session and get the Data.
session_start();
if(isset($_SESSION['username'])){
echo "Welcome ".$_SESSION['username'];
echo "<br> Your Favorite Category is ". $_SESSION['favCat'];
echo "<br>";
} else{
  echo "Please Login to Continue";
}
?>