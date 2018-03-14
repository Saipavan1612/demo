<?php
$servername = "localhost:3306";
$username = "root";
$password = "12345678";
$db = "sample";
$conn = new mysqli($servername,$username,$password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

