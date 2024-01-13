<?php
/*
$con = mysqli_connect("localhost", "root", "", "detail", 8080);
if (!$con){
  echo "connection error";
}
if(isset($_POST['submit'])){
  $name = $file = "";
  if(isset($_POST['name'])){
    $name = $_POST['name'];
  }
  $sql = "INSERT INTO detail(name, email) VALUES ('$name', '$email')";
  $query = mysqli_query($con, $sql);
} */

$con = mysqli_connect("localhost", "root", "", "detail", 8080);
if (!$con){
  echo "connection error";
}
if(isset($_POST['submit'])){
  $name = $file = "";
  if(isset($_POST['name'])){
    $name = $_POST['name'];
  }
  $email =$file ="";
  if (isset($_POST['email'])){
    $email = $_POST['email'];
  }
  $age = $file = "";
  if (isset($_POST['age'])){
    $age = $_POST['age'];
  }

  echo "Uploaded Successfully.";

  $sql = "INSERT INTO detail(name, email, age) VALUES ('$name', '$email', '$age')";
  $query = mysqli_query($con, $sql);
}

?>