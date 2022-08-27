<?php
$conn = new mysqli('localhost', 'root', '', 'netflix');
$ID = $_GET['ID'];
$sql = "UPDATE  phim  SET luotxem = luotxem+1 WHERE ID = $ID";
$query =  mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL="shortcut icon" href="/img/icon.png">
    <link rel="stylesheet" href="/Styles/Mylist.css">
    <link rel="stylesheet" href="/Styles/Movie.css">
    <title>Xem phim</title>
</head>

<body>
    <div class="video-container">
        <div class="section-overlay"></div>
        <video class="video-background" autoplay="" muted="" loop="">
            <source src="" type="">
            <source src="" type="video/webm">
        </video>
        <!--popup-video-->
        <div class="popup-video">
            <video id="videostop10" controls autoplay="">
                <source src="/video/Netflix Original Films (2018).mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
</body>

</html>