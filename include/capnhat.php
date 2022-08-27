<?php
include 'Connect.php';
if (isset($_POST['doiMK'])) {
    $username = $_POST['username'];
    $passwordold = $_POST['passwordold'];
    $passwordnew = $_POST['passwordnew'];
    if ($passwordold == $passwordnew) {
        $message = "Lỗi: mật khẩu như nhau";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    $sql = "select * from user where username = '$username' and password = '$passwordold'";
    $rows = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($rows);
    if ($count > 0 && $passwordold != $passwordnew) {
        $sql_update = mysqli_query($conn, "update user set password = '$passwordnew' where username = '$username'");
        $message = "Mật khẩu đã được thay đổi";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        echo "Không thay đổi được mật khẩu";
    }
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
            location.replace("/Php/DangNhap.php")
        }, );
    </script>
</body>

</html>