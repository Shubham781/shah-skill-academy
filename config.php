<?php
$host = "localhost";
$username = "root";
$password = ""; // change if your DB has a password
$dbname = "shah-skill-academy";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
