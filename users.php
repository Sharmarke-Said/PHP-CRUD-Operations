<?php 

include "connection.php";

extract($_POST);

if(isset($_POST['stdname']) && isset($_POST['stdemail']) && isset($_POST['stdaddress']) && isset($_POST['stdclass'])){
    
    $query = "insert into  `studentstb` (name, email, address, std_class) values('$stdname','$stdemail','$stdaddress', '$stdclass')";

    $result = mysqli_query($con, $query);
    if($result){
        echo "Data inserted successfully";
        // header("location:index.php");
    }
    else{
        die(mysqli_error($con));
    }
}

?>