<?php
$servername = "mariadb";
$username = "prateep";
$password = "65130660";
$database="myhobbies";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Set character set to utf8mb4
if (!$conn->set_charset("utf8mb4")) {
  die("Error setting character set: " . $conn->error);
}   
?>