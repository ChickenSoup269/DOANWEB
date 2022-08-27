<?php
include 'Connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$Email = $_POST['Email'];
$ID = $_POST['ID'];
$sql = "select * from user where username = '$username' and Email = '$Email'";
$sold = mysqli_query($conn, $sql);

$sql_update = "update user set username = '$username', password = '$password', Email = '$Email' where ID = $ID ";
mysqli_query($conn, $sql_update);
$message = "Cập nhật người dùng thành công";
echo "<script type='text/javascript'>alert('$message');</script>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
</head>

<body>

</body>
<script>
    setTimeout(() => {
        location.replace("/Php/QuanLy.php")
    }, );
</script>

</html>