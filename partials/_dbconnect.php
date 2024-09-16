<?php



$server = "localhost";
$username = "root";
$password = "";
$database = "car_register";
$port = 3309; // Specify the port number

$conn = mysqli_connect($server, $username, $password, $database, $port);

if (!$conn) {
    die("Error: " . mysqli_connect_error());
}


?>



