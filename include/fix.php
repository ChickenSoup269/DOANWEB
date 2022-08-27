<?php
include 'Connect.php';
$ID = $_GET['ID'];
$sql = "select * from user where ID = $ID";
$query =  mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Styles/themnguoidung.css">
    <link rel="shortcut icon" href="/img/key.png" type="image/x-icon">
    <title>Sửa người dùng</title>
</head>

<body>
</body>
<div class="login-wrapper">
    <form action="KTfix.php" method="POST" class="form" autocomplete="off">
        <h2>CHỈNH SỬA</h2>
        <input type="hidden" name="ID" value="<?php echo $row['ID']  ?>">
        <div class="input-group">
            <input name="username" value="<?php echo $row['username']  ?>" autocomplete=" off" type="text" required>
            <label for="loginUser">Tên đăng nhập</label>
        </div>
        <div class="input-group">
            <input name="Email" value="<?php echo $row['Email']  ?>" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Nhập địa chỉ Email" autocomplete="off" type="text" required>
            <label for="Email">Email</label>
        </div>
        <div class="input-group">
            <input name="password" value="<?php echo $row['password']  ?>" autocomplete="off" type="text" required>
            <label for="loginPassword">Mật khẩu</label>
        </div>

        <input name="sua" type="submit" value="Sửa" class="submit-btn">
    </form>

</div>

</html>