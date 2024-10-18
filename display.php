<?php
include "connect.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - Update</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Ops</th>
    </tr>
  </thead>
  <tbody>
  <?php
    include "connect.php";
    $sql = "select * from crud";


    $result = mysqli_query($conn,$sql);

    if($result) {

        while($row = mysqli_fetch_assoc($result)) {
          echo "<td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['mobileno']."</td><td>".$row['password']."</td><td>
          
          <button class='btn btn-primary'>
            <a href='update.php?id=".$row['id']."'>Update</a>
          </button>
          
          <button class='btn btn-danger'>
            <a href='delete.php?id=".$row['id']."'>Delete</a>
          </button>
          </td>
          </tr>";
        }
        // echo $row['name'];
    }
    // if(mysqli_num_rows($result) > 0) {

    // }
  ?>
    <!-- <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
</body>
</html>