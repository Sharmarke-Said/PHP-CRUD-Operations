<?php 

include "connection.php";

if(isset($_POST['updateid'])){
    $std_id = $_POST['updateid'];

    $query = "select * from `studentstb` where id =$std_id";
    $result = mysqli_query($con, $query);

    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $data = $row;
    }
    echo json_encode($data);
}
else{
    $data['status'] = 200;
    $data['message'] = "Invalid!!";
}


if(isset($_POST['stdid'])){
    $id = $_POST['stdid'];
    $name = $_POST['studentname'];
    $email = $_POST['studentemail'];
    $address = $_POST['studentaddress'];
    $stdclass = $_POST['studentclass'];

    $query = "update `studentstb` set name = '$name', email = '$email', address = '$address', std_class = '$stdclass' where id = $id ";

    $result = mysqli_query($con, $query);
}

?>