<?php
include 'Connect.php';
$ID = $_GET['ID'];
$sql = "select * from phim where ID = $ID";
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
    <title>Chỉnh sửa phim</title>
</head>

<body>
</body>
<div class="login-wrapper">
    <form action="KTsuaphim.php" method="POST" class="form" autocomplete="off">
        <h2>CHỈNH SỬA</h2>
        <input type="hidden" name="ID" value="<?php echo $row['ID']  ?>">
        <div class="input-group">
            <input name="img" value="<?php echo $row['img']  ?>" autocomplete=" off" type="text" required>
            <label for="loginUser">Địa chỉ ảnh</label>
        </div>
        <div class="input-group">
            <input name="Tenphim" value="<?php echo $row['Tenphim']  ?>" type="text" required>
            <label for="Email">Tên phim</label>
        </div>
        <div class="input-group">
            <input name="Tuoi" value="<?php echo $row['Tuoi']  ?>" autocomplete="off" type="text" required>
            <label for="loginPassword">Độ tuổi</label>
        </div>
        <div class="input-group">
            <input name="Nam" value="<?php echo $row['Nam']  ?>" autocomplete="off" type="text" required>
            <label for="loginPassword">Năm sản xuất</label>
        </div>
        <div class="input-group">
            <input name="Theloai" value="<?php echo $row['Theloai']  ?>" autocomplete="off" type="text" required>
            <label for="loginPassword">Thể loại</label>
        </div>
        <input name="sua" type="submit" value="Sửa" class="submit-btn">
    </form>

</div>

</html>