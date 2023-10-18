<?php
// Define the database parameters
$servername = "localhost"; // The name of the server where the database is hosted
$username = "root"; // The username for accessing the database
$password = ""; // The password for accessing the database
$dbname = "studentsdb"; // The name of the database

// Create a new connection object using the mysqli class
$con = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful or not
if ($con->connect_error) {
  // If there was an error, display a message and exit the script
  die("Connection failed: " . $con->connect_error);
}


// Close the connection when you are done
// $con->close();
?>