<?php

$con = new mysqli('localhost', 'root', '', 'usersdb');

if(!$con){
    die(mysqli_error($con));
}

?>