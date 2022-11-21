<?php
$servername = "localhost";
$database='plytech';
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<script> alert( 'Connected slluccessfuy')</script>" ;

?>