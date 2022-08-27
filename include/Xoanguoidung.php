<?php
include 'Connect.php';
$ID = $_GET['ID'];

$sql = "DELETE FROM user WHERE ID = $ID";
$query = mysqli_query($conn, $sql);
header("location: /Php/QuanLy.php");
