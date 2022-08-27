<?php
include 'Connect.php';
if (isset($_POST['doimk']) && $_POST["username"] != '' && $_POST["pass_new"] != '' && $_POST["nhaplai_pass"] != '') {
    $username = $_POST["username"];
    $password = $_POST["pass_new"];
    $nhaplaimatkhau = $_POST["nhaplai_pass"];

    if ($password != $nhaplaimatkhau) {
        $message = "Mật khẩu không trùng khớp";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    $sql = "Select * from admin where username = '$username'";
    $sold = mysqli_query($conn, $sql);
    if (mysqli_num_rows($sold) > 0) {
        $sql_update = mysqli_query($conn, "update admin set password = '$password' where username = '$username' ");
        $message = "Mật khẩu đã được thay đổi";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        $message = "Admin không tồn tại";
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