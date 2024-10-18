<?php
include "connect.php";

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobileno = $_POST['mobileno'];
  $password = $_POST['password'];
  echo "$name $email $password $mobileno";
  $sql = "insert into `crud` (name,email,password,mobileno) values('$name','$email','$password','$mobileno')";

  $result = mysqli_query($conn, $sql);

  if($result) {
    echo "data was inserted successfully";
    header("location:display.php"); 
  } else {
    die(mysqli_error($result));

  }
}
 
?>

<html>

<head>
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
 
<div class="container" >
<form method="POST">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"  autocomplete value="abdus samad"  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email"  autocomplete value="abdus@samad.com"  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" autocomplete value="abdus samad" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="mobileno">Phone Number</label>
    <input type="text" class="form-control" id="mobileno" name="mobileno"  autocomplete value="9870645161"  placeholder="Enter mobileno">
  </div> 
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div> 

</body>

</html>
