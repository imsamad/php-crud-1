<?php
include "connect.php";

if(isset($_GET['id']) && $_GET['id']) {
    $id = $_GET['id'];
        $sql = "delete from `crud` where id=$id";

        $result = mysqli_query($conn, $sql);
    
        if($result) {
            header("location:display.php");
        } else {
            die(mysqli_error($conn));
    
            echo "plz try again!";
        }    
} else {
    echo "not found!";
}

?>