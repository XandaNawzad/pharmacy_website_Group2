<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Pharmacy";

// Create connection
$conn = mysqli_connect("localhost","root","","Pharmacy");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>


