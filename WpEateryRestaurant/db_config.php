<?php
$servername = "localhost";
$username = "wp_eatery";
$password = "password";
$dbname = "wp_Eatery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>