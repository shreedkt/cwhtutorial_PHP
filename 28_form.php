<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GET & POST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/cwhtutorial/21_get_post.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $desc =$_POST['desc'];
    // $password = $_POST['pass'];
    
  //submit these to a database

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
    // echo "Connection was Succesful";
    //Submit these to a database
    $sql = "INSERT INTO `contactus` (`name`, `email`, `concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
    $result = mysqli_query($conn, $sql);

    if($result){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Your Entery has been submited Succesfully.!</strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    } else{
      // echo "The Record was not inserted successfully because of this error--->".mysqli_error($conn);
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>We are faceing some technical issue and your entry was not submitted Successfully! We Regret the inconvinience caused!.</strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
  }
  }


?>
 <div class="container mt-3">
  <h2>Contact us for your concern </h2>
  <form action="/cwhtutorial/28_form.php" method="post">
  <div class="mb-3">
    <label for="name" >Name :-</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="email" >Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="desc">Description :-</label>
    <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
