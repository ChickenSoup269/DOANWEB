<?php
include 'Connect.php';
$username = $_POST["Username"];
$password = $_POST["Password"];
$sql = "select * from admin where username = '$username'";
$sold = mysqli_query($conn, $sql);
if (mysqli_num_rows($sold) > 0) {
    $message = "Tên Admin đã tồn tại";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $sql = "insert into admin(username, password) Values ('$username', '$password')";
    mysqli_query($conn, $sql);
    $message = "Thêm thành công admin";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loading</title>
</head>

<body>
    <script>
        setTimeout(() => {
            location.replace("/Php/QuanlyAdmin.php")
        }, );
    </script>
</body>

</html>