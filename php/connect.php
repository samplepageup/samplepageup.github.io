<?php
$servername = "localhost";
$username = "root";
$password = "nikhil111";
$dbname = "mitsacm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>