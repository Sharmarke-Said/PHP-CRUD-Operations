<?php 

include 'connection.php';

if(isset($_POST['deleteId'])){
    $delid = $_POST['deleteId'];

        $query = "delete from `studentstb` where id = $delid";        
        $result = mysqli_query($con, $query);
}

// if(isset($_GET['deleteid'])){
//     $id = $_GET['deleteid'];

//     $query = "DELETE FROM `usersTb` WHERE id = $id";

//     $result = mysqli_query($con, $query);
//     if($result){
//         // echo "Deleted successfully";
//         header("Location:display.php");
//     }
//     else {
//         die(mysqli_error($con));
//     }
// }


?>