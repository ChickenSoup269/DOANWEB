<?php
include 'Connect.php';
if (isset($_POST['dangky']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["Email"] != '' && $_POST["nhaplaimatkhau"] != '') {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $Email = $_POST["Email"];
    $date = date("Y-m-d");
    $_POST['date'] = $date;
    $level = 0;
    $nhaplaimatkhau = $_POST["nhaplaimatkhau"];
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
    } else  if ($password != $nhaplaimatkhau) {
        $message = "Mật khẩu không trùng khớp";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        $sql = "insert into user(username, password,Email, Ngay ,level) Values ('$username', '$password', '$Email' , '$date' ,'$level')";
        mysqli_query($conn, $sql);
        header("location: /Php/DKthanhcong.php");
    }
} else {
    header("location: /Php/DangNhap.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>

<body>

</body>
<script>
    setTimeout(() => {
        location.replace("/Php/DangNhap.php")
    }, );
</script>

</html>