<?php
include 'Connect.php';
$username = $_POST["Username"];
$password = $_POST["Password"];
$Email = $_POST["Email"];
$date = date("Y-m-d");
$_POST['date'] = $date;
$level = 0;
$sql = "select * from user where username = '$username'";
$sql2 = "select * from user where Email = '$Email'";
$sold = mysqli_query($conn, $sql);
$sold2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($sold) > 0) {
    $message = "Tên người dùng đã tồn tại";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else if (mysqli_num_rows($sold2) > 0) {
    $message = "Email đã tồn tại";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $sql = "insert into user(username, password,Email, Ngay ,level) Values ('$username', '$password', '$Email' , '$date' ,'$level')";
    mysqli_query($conn, $sql);
    $message = "Tạo thành công người dùng";
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
            location.replace("/Php/QuanLy.php")
        }, );
    </script>
</body>

</html>