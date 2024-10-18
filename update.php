<?php
include "connect.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    
    $sql = "select * from `crud` where id=$id";
    $result = mysqli_query($conn, $sql);
    $name = '';
    $email = '';
    $password = "";
    $mobileno = "";
    
  
    if($result) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $mobileno = $row['mobileno'];
    } else {
        header("location:display.php");
    }    
}

if(isset($_POST['submit'])) {
  echo "cjksndcksd";
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobileno = $_POST['mobileno'];

    $sql = "update `crud` set name='$name',email='$email',mobileno='$mobileno',password='$password' where id=$id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location:display.php");
    } else {
        echo "plz try again!";
    }
}

if(!isset($_POST['submit']) && !isset($_GET['id'])) {
    header("location:display.php");
}

?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Update</title>
</head>
<body>
<div class="container">
<form method="POST">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"  value="<?php echo $name;?>"  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email"  value="<?php echo $email;?>"  autocomplete  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password"  value="<?php echo $password;?>" autocomplete placeholder="Password">
  </div>
  <div class="form-group">
    <label for="mobileno">Phone Number</label>
    <input type="text" class="form-control" id="mobileno" name="mobileno"  value="<?php echo $mobileno;?>" autocomplete  placeholder="Enter mobileno">
  </div> 
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div> 
</body>
</html>  