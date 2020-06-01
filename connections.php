<?php 

$server     = "localhost";
$username   = "root";
$password   = "root";
$db         = "my_first_database";

// create a connection
// put in variables as arguments
$conn   =   mysqli_connect($server, $username, $password, $db);

// Check connection
if (!$conn) {
    // mysqli error will store values and tell you what the error is
    die("connection failed: " . mysqli_connect_error() );
    
};

// echo "Connected successfully!";

?>