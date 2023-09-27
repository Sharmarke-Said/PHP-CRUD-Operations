<?php 

include "connection.php";
$id = $_GET['updateid'];

$query = "SELECT * FROM `usersTb` WHERE id =$id";
$result = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($result);

$username = $row['username'];
$email = $row['email'];
$password = $row['password'];


if(isset($_POST['submit'])){    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE  `usersTb` SET username='$username', 
    email='$email', password='$password' WHERE id=$id";

    $result = mysqli_query($con, $query);
    if($result){
        // echo "Data inserted successfully";
        header("location:display.php");
    }
    else{
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form method="post">
            <div class="mb-3 w-75 mt-5">
                <label class="form-label">username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter username"
                    value="<?php echo $username ?>">
            </div>
            <div class=" mb-3 w-75">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder=" Enter Email Address"
                    value="<?php echo $email ?>">
            </div>
            <div class=" mb-3 w-75">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder=" Enter Password"
                    value="<?php echo $password ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Update</button>
        </form>
    </div>
</body>

</html>