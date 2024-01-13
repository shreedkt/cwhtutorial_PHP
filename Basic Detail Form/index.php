<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Details Form</title>
</head>
<body>
  <header><h1>Basic Details Form</h1></header>
  <main>
    <div class="basic_details">
      <form method="POST" action="upload.php">
        <div class="name_details">
          <label for="name" class="form-label">Name :-</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <br>
        <div class="email_details">
          <label for="email" class="form-label">Email address :-</label>
          <input type="email" class="form-control" id="email" name="email" aria-des>
        </div>
        <br>
        <div class="age_detail">
          <label for="age" class="form-label">Age : -</label>
          <input type="number" class="form-control" id="age" name="age">
        </div>
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </main>
</body>
</html>