<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "netflix";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "netflix");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
