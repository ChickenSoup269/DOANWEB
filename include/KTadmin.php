<?php
session_start();
include 'Connect.php';
if (isset($_POST['dangnhap']) && $_POST["username"] != '' && $_POST["password"] != '') {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "select * from admin where username = '$username' and password = '$password'";
    $users = mysqli_query($conn, $sql);
    if (mysqli_num_rows($users) > 0) {
        $_SESSION['users'] = $username;
        header("location: /Php/Quanly.php");
    } else {
        $message = "Đăng nhập sai tài khoản hoặc mật khẩu";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
} else {
    header("location: /Php/Admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loaddiing</title>
</head>

<body>
    <script>
        setTimeout(() => {
            location.replace("/Php/Admin.php")
        }, );
    </script>
</body>

</html>