<?php 

include 'connection.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $query = "DELETE FROM `usersTb` WHERE id = $id";

    $result = mysqli_query($con, $query);
    if($result){
        // echo "Deleted successfully";
        header("Location:display.php");
    }
    else {
        die(mysqli_error($con));
    }
}


?>