<?php
$conn = new mysqli("localhost","root","","crud");

if($conn -> connection_error) {
die(mysqli_error($conn));
}
else {
}
?>