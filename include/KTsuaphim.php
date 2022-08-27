<?php
include 'Connect.php';
$ID = $_POST['ID'];
$img = $_POST['img'];
$Tenphim = $_POST['Tenphim'];
$Tuoi = $_POST['Tuoi'];
$Nam = $_POST['Nam'];
$sql = "select * from phim";
$sold = mysqli_query($conn, $sql);

$sql_update = "update phim set img = '$img', Tenphim = '$Tenphim', Nam = '$Nam' , Tuoi = '$Tuoi'where ID = $ID ";
mysqli_query($conn, $sql_update);
$message = "Cập nhật phim thành công";
echo "<script type='text/javascript'>alert('$message');</script>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
</head>

<body>

</body>
<script>
    setTimeout(() => {
        location.replace("/Php/QuanLyphim.php")
    }, );
</script>

</html>