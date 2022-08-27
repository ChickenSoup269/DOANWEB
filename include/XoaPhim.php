<?php
include 'Connect.php';
$ID = $_GET['ID'];

$sql = "DELETE FROM phim WHERE ID = $ID";
$query = mysqli_query($conn, $sql);
header("location: /Php/QuanLyphim.php");
