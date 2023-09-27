<?php 

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary mt-5">
            <a class="text-light" href="users.php">Add user</a>
        </button>
        <table class="table table-striped mt-1">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">username</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM `usersTb`";

                    $result = mysqli_query($con, $query);
                    if($result){
                        // $row=mysqli_fetch_assoc($result);
                        // echo $row['username'];
                        // $row=mysqli_fetch_assoc($result);
                        // echo $row['username'];
                        
                        // DRY(don't repeat your self) and use loop
                        while($row=mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $username = $row['username'];
                            $email = $row['email'];
                            $password = $row['password'];

                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$username.'</td>
                                <td>'.$email.'</td>
                                <td>'.$password.'</td>
                                <td>
                                    <button class="btn btn-success">
                                    <a href="#" class="text-light">Update</a>
                                    </button>
                                    <button class="btn btn-danger">
                                    <a href="#" class="text-light">Delete</a>
                                    </button>
                                </td>
                            </tr>';
                        }
                    }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>