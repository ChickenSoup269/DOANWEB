<?php
include 'Connect.php';
if (isset($_POST['doiMK']) && $_POST["username"] != '' && $_POST["pass_new"] != '' && $_POST["nhaplai_pass"] != '') {
    $username = $_POST["username"];
    $password = $_POST["pass_new"];
    $Email = $_POST["Email"];
    $nhaplaimatkhau = $_POST["nhaplai_pass"];
    $sql = "Select * from user where username = '$username' and Email = '$Email' ";
    $sold = mysqli_query($conn, $sql);
    if ($password != $nhaplaimatkhau) {
        $message = "Mật khẩu không trùng khớp";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else if (mysqli_num_rows($sold) != 0 && $password == $nhaplaimatkhau) {
        $sql_update = mysqli_query($conn, "update user set password = '$password'  where username='$username'");
        $message = "Mật khẩu đã được thay đổi";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        $message = "Username hoặc Email không đúng";
        echo "<script type='text/javascript'>alert('$message');</script>";
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
    <title>Loaddiing</title>
</head>

<body>
    <script>
        setTimeout(() => {
            location.replace("/Php/DangNhap.php")
        }, );
    </script>
</body>

</html>