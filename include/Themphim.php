<?php
include 'Connect.php';
$img = $_POST["img"];
$Tenphim = $_POST["Tenphim"];
$Theloai = $_POST["Theloai"];
$Tuoi = $_POST["Tuoi"];
$Nam = $_POST["Nam"];
$Modal = "#modal none";

$sql = "insert into phim(img,Tenphim,Theloai, Tuoi ,Nam, Modal) Values ('$img', '$Tenphim', '$Theloai' , '$Tuoi' ,'$Nam', '$Modal')";
mysqli_query($conn, $sql);
$message = "Thêm phim thành công";
echo "<script type='text/javascript'>alert('$message');</script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loadiing</title>
</head>

<body>
    <script>
        setTimeout(() => {
            location.replace("/Php/QuanLyphim.php")
        }, );
    </script>
</body>

</html>