<?php
session_start();
if (!isset($_SESSION['luongtruycap'])) $_SESSION['luongtruycap'] = 0;
else $_SESSION['luongtruycap'] += 0;

if (!isset($_SESSION['users'])) {
    header("location:/Php/Admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="/img/key.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Admin Phim</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            position: relative;
            width: 100%;
            background-color: #24292f;
        }

        /* css cho thanh trượt */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #181818;

        }

        ::-webkit-scrollbar-thumb {
            background: rgb(165, 165, 165);
            border-radius: 50px;
        }


        .header {
            height: 60px;
            width: 100%;
            display: flex;
            align-items: center;
            border-bottom: 2px solid #f1f1f1;
        }

        .logo {
            color: #f1f4f8;
            display: flex;
            align-items: center;
            width: 300px;
            padding-left: 40px;
            cursor: pointer;
        }

        .logo span {
            color: rgb(206, 19, 19);
        }


        .search--notification--profile {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: calc(100% - 300px);
            padding: 0 40px;
        }

        .search {
            background-color: #f1f4f8;
            border-radius: 50px;
            width: 400px;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            visibility: hidden;
        }

        .search input {
            background-color: transparent;
            outline: none;
            border: none;
            text-indent: 15px;
            width: 85%;
        }

        .search button {
            outline: none;
            border: none;
            border-radius: 50%;
            background-color: #fff;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .search button i {
            font-size: 1.1rem;
            color: #5073fb;
        }

        .notification--profile {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .picon {
            margin-left: 20px;
            font-size: 1.1rem;
            padding: 5px;
            border-radius: 5px;
            cursor: pointer;
        }

        .lock {
            color: #5073fb;
            background-color: rgba(80, 115, 251, .2);
            cursor: pointer;
        }

        .bell {
            color: #f1d243;
            background-color: rgba(241, 210, 67, .2);
            cursor: pointer;
        }

        .chat {
            color: #70d7a5;
            background-color: rgba(112, 215, 165, .2);
            cursor: pointer;
        }

        .profile {
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .main {
            position: relative;
            width: 100%;
            min-height: calc(100vh - 60px);
        }

        /* sidebar */
        .sidebar {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 300px;
            background-color: #fff;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-right: 2px solid #f1f1f1;
            transition: .3s;
        }

        .sidebar.active {
            width: 103px;
            overflow: hidden;
        }

        .sidebar.active .sidebar--item {
            display: none;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .sidebar--items a,
        .sidebar--bottom-items a {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 1.1rem;
            color: #000;
            padding: 10px;
            border-radius: 10px;
        }

        .sidebar--items a:hover,
        .sidebar--bottom-items a:hover {
            background-color: #5073fb;
            color: #fff;
        }

        #active--link {
            background-color: #5073fb;
            color: #fff;
        }

        .sidebar--bottom-items li:last-child a {
            margin-bottom: 0;
        }

        .icon {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 1.3rem;
        }

        .icon-0 {
            color: #5073fb;
        }

        .icon-1 {
            color: #c5bc58;
        }

        .icon-2 {
            color: #a280e9;
        }

        .icon-3 {
            color: #85ade3;
        }

        .icon-4 {
            color: #e36ac8;
        }

        .icon-5 {
            color: #70d7a5;
        }

        .icon-6 {
            color: #5f5ce0;
        }

        .icon-7 {
            color: #e86786;
        }

        .icon-8 {
            color: #f1d243;
        }


        /* main--content */
        .main--content {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: calc(100% - 300px);
            padding: 0 40px;
            overflow-y: scroll;
            transition: .3s;
        }

        .main--content.active {
            width: calc(100% - 103px);
        }

        .title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
            margin-top: 30px;
        }

        .section--title {
            font-weight: 700;
            color: white;
        }

        .dropdown {
            outline: none;
            border: none;
            background-color: #f1f4f8;
            border-radius: 5px;
            width: 150px;
            padding: 5px;
        }

        .cards {
            display: flex;
            gap: 20px;
        }

        .card {
            padding: 20px;
            border-radius: 20px;
            min-width: 230px;
            height: auto;
            transition: .3s;
            color: white;
        }

        .card:hover {
            cursor: pointer;
            transform: scale(0.95);
            border: 1px solid white;
            box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.5);
        }

        .card--data {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
        }

        .card h1 {
            font-size: 30px;
            margin-top: 10px;
        }

        .card--icon--lg {
            font-size: 80px;
        }

        .card--stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 5px;
        }

        .card--stats span {
            display: flex;
            align-items: center;
        }

        .card--icon {
            margin-right: 5px;
        }

        .stat--icon {
            color: #03a9f4;
        }

        .up--arrow {
            color: #6fbf73;
        }

        .down--arrow {
            color: #e74b53;
        }

        .card-1 {
            background-color: rgba(80, 115, 251, .5);
        }

        .card-1 .card--title {
            color: rgba(80, 115, 251, 1);
        }

        .card-1 .card--icon--lg {
            color: rgba(80, 115, 251, .9);
        }

        .card-2 {
            background-color: rgba(241, 210, 67, .5);
        }

        .card-2 .card--title {
            color: rgba(241, 210, 67, 1);
        }

        .card-2 .card--icon--lg {
            color: rgba(241, 210, 67, .9);
        }

        .card-3 {
            background-color: rgba(112, 215, 165, .5);
        }

        .card-3 .card--title {
            color: rgba(112, 215, 165, 1);
        }

        .card-3 .card--icon--lg {
            color: rgba(112, 215, 165, .9);
        }

        .card-4 {
            background-color: rgba(227, 106, 200, .5);
        }

        .card-4 .card--title {
            color: rgba(227, 106, 200, 1);
        }

        .card-4 .card--icon--lg {
            color: rgba(227, 106, 200, .9);
        }


        /* doctors */

        .doctors--right--btns {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .add {
            display: flex;
            align-items: center;
            padding: 5px 10px;
            outline: none;
            border: none;
            background-color: #5073fb;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: .3s;
        }

        .add:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.8);
        }

        .add i {
            margin-right: 10px;
            padding: 5px;
            background-color: #fff;
            border-radius: 50%;
            color: #000;
        }

        .doctors--cards {
            display: flex;
            gap: 20px;
        }

        .doctor--card {
            padding: 20px;
            border-radius: 20px;
            height: auto;
            transition: .3s;
            border: 2px solid #f1f1f1;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: .8rem;
        }

        .doctor--card:hover {
            box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.8);
        }

        .img--box--cover {
            border: 1px solid #5073fb;
            padding: 2px;
            border-radius: 50%;
            display: inline-block;
            margin-bottom: 10px;
        }

        .img--box {
            position: relative;
            width: 71px;
            height: 71px;
            overflow: hidden;
            border-radius: 50%;
        }

        .free {
            color: #70d7a5;
        }

        .scheduled {
            color: #5073fb;
        }

        .timkiem {
            background-color: white;
            outline: none;
            border: none;
            width: 200px;
            padding: 5px;
            border-radius: 10px;
        }

        .timkiem input {
            outline: none;
            border: none;
            text-indent: 15px;
            width: 85%;
        }

        .tim {
            width: 55px;
            height: 30px;
            font-weight: 500;
            border-radius: 10px;
            border: none;
            background-color: #5073fb;
            cursor: pointer;
            color: white;
            transition: ease-in-out 0.3s;
        }

        .tim:hover {
            transform: scale(1.1);
            background-color: #6fbf73;
            color: black;
            transition: ease-in-out 0.3s;
        }

        /* recent--patients */

        .recent--patients {
            margin-bottom: 20px;
        }

        .table {
            height: 200px;
        }

        .huhu {
            width: 150px;
            height: 10%;
            border-radius: 10px;
            border: 1px solid white;
            cursor: pointer;
            transition: ease-in 0.2s;
        }

        .huhu:hover {
            transition: ease-in-out 0.3s;
            transform: scale(1.1);
        }

        table {
            color: white;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }

        tr {
            border-bottom: 1px solid #f1f1f1;
        }

        td,
        th {
            padding-block: 10px;
        }

        th {
            color: #03a9f4;
        }

        .year {
            color: #6fbf73;
        }

        .edit {
            color: #70d7a5;
            margin-right: 10px;
        }

        .delete {
            color: #e86786;
        }

        .pending {
            color: #f1d243;
        }

        .confirmed {
            color: #70d7a5;
        }

        .rejected {
            color: #e86786;
        }

        /* Thêm phim */
        .show-btn {
            background: #fff;
            padding: 10px 20px;
            font-size: 20px;
            font-weight: 500;
            color: #3498db;
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .show-btn,
        .container {
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        input[type="checkbox"] {
            display: none;
        }

        .container {
            display: none;
            background: #fff;
            width: 410px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        #show:checked~.container {
            display: block;
        }

        .container .close-btn {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 18px;
            cursor: pointer;
        }

        .container .close-btn:hover {
            color: #3498db;
        }

        .container .text {
            font-size: 35px;
            font-weight: 600;
            text-align: center;
        }

        .container form {
            margin-top: -20px;
        }

        .container form .data {
            height: 45px;
            width: 100%;
            margin: 40px 0;
        }

        form .data label {
            font-size: 18px;
        }

        form .data input {
            height: 100%;
            width: 100%;
            padding-left: 10px;
            font-size: 17px;
            border: 1px solid silver;
        }

        form .data input:focus {
            border-color: #3498db;
            border-bottom-width: 2px;
        }

        form .forgot-pass {
            margin-top: -8px;
        }

        form .forgot-pass a {
            color: #3498db;
            text-decoration: none;
        }

        form .forgot-pass a:hover {
            text-decoration: underline;
        }

        form .btn {
            margin: 30px 0;
            height: 45px;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        form .btn .inner {
            height: 100%;
            width: 300%;
            position: absolute;
            left: -100%;
            z-index: -1;
            background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
            transition: all 0.4s;
        }

        form .btn:hover .inner {
            left: 0;
        }

        form .btn .themnguoidung {
            height: 100%;
            width: 100%;
            background: none;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
        }


        /* responsive starts here */

        @media screen and (max-width:1350px) {

            .cards {
                overflow-x: scroll;
            }
        }

        @media screen and (max-width:1024px) {
            table {
                min-width: 600px;
            }
        }

        @media screen and (max-width:768px) {
            .logo {
                padding-left: 30px;
                width: fit-content;
            }

            .timkiem {
                width: 150px;
            }

            .section--title {
                display: none;
            }

            .table {
                overflow-y: scroll;
            }

            .search--notification--profile {
                padding: 0 20px;
                margin-left: auto;
            }

            .main--content {
                padding: 0 20px;
            }

            .sidebar {
                padding: 20px;
            }

            .sidebar.active {
                width: 85px;
            }

            .main--content.active {
                width: calc(100% - 85px);
            }
        }

        @media screen and (max-width:590px) {

            .search,
            .lock,
            .chat {
                display: none;
            }

            .notification--profile {
                margin-left: auto;
            }

            .search--notification--profile {
                width: fit-content;
            }

            .sidebar {
                transform: translateX(-100%);
                z-index: 10;
                background-color: #fff;
            }

            .sidebar.active {
                transform: translateX(0);
                width: 300px;
            }

            .sidebar.active .sidebar--item {
                display: block;
            }

            .main--content {
                width: calc(100% - 0px);
            }

            .main--content.active {
                width: calc(100% - 0px);
            }
        }

        @media screen and (max-width:450px) {
            .main--content {
                padding: 0 10px;
            }

            .logo {
                padding-left: 10px;
            }

            .search--notification--profile {
                padding: 0 10px;
            }

            .sidebar {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2><span>Netflix</span>/Admin</h2>
        </div>

        <div class="search--notification--profile">
            <div class="search">
                <input type="text" name="tukhoa" placeholder="Tìm kiếm">
                <button><i class="ri-search-2-line"></i></button>
            </div>

            <div class="notification--profile">
                <div class="picon lock">
                    <i class="ri-lock-line"></i>
                </div>
                <div class="picon bell">
                    <i class="ri-notification-2-line"></i>
                </div>
                <div class="picon chat">
                    <i class="ri-wechat-2-line"></i>
                </div>
                <div class="picon profile">
                    <img class="img" src="https://cdn-icons-png.flaticon.com/512/4333/4333609.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="QuanLy.php">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Người dùng</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="active--link">
                        <span class="icon icon-2"> <i class="ri-film-line"></i></span>
                        <span class="sidebar--item">Phim</span>
                    </a>
                </li>
                <li>
                    <a href="QuanlyAdmin.php">
                        <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Admin</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-settings-3-line"></i></span>
                        <span class="sidebar--item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="/include/logout_admin.php">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                    <h2 class="section--title">Overview</h2>
                </div>
                <div class="cards">
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Lượt truy cập</h5>
                                <h1><?php
                                    if (isset($_SESSION['luongtruycap'])) echo $_SESSION['luongtruycap'];
                                    ?></h1>
                            </div>
                            <i class="ri-login-box-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>150</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>6</span>
                        </div>
                    </div>
                    <div class="card card-2">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Số lượng phim</h5>
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'netflix');
                                $result = $conn->query("select * FROM phim");
                                $rows = mysqli_num_rows($result);
                                echo "<h1>" . $rows . "<h1>";
                                mysqli_close($conn);
                                ?>
                            </div>
                            <i class="ri-film-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>82%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>38</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>12</span>
                        </div>
                    </div>
                    <div class="card card-3">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Số lượt xem</h5>
                                <h1> <?php
                                        $conn = new mysqli('localhost', 'root', '', 'netflix');
                                        $query = "SELECT * FROM phim";
                                        $query_run = mysqli_query($conn, $query);
                                        $qty = 0;
                                        while ($num = mysqli_fetch_assoc($query_run)) {
                                            $qty += $num['Luotxem'];
                                        }
                                        echo $qty;
                                        ?> </h1>
                            </div>
                            <i class="ri-eye-2-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>27%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>1023</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>13</span>
                        </div>
                    </div>
                    <div class="card card-4">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Số tài khoản người dùng</h5>
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'netflix');
                                $result = $conn->query("select * FROM user");
                                $rows = mysqli_num_rows($result);
                                echo "<h1>" . $rows . " <h1>";
                                mysqli_close($conn);
                                ?>
                            </div>
                            <i class="ri-user-3-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>8%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>11</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recent--patients">
                <div class="title">
                    <h2 class="section--title">Thông tin phim</h2>
                    <div class="center">
                        <input type="checkbox" id="show">
                        <label for="show" class="add"><i class="ri-add-line"></i>Thêm Phim</label>
                        <div class="container">
                            <label for="show" class="close-btn fas fa-times" title="close"></label>
                            <div class="text">
                                Thêm phim
                            </div>
                            <form action="/include/Themphim.php" method="POST" autocomplete="off">
                                <div class="data">
                                    <label>Link ảnh</label>
                                    <input name="img" type="text" autocomplete="off" required />
                                </div>
                                <div class="data">
                                    <label>Tên phim</label>
                                    <input name="Tenphim" type="text" autocomplete="off" required />
                                </div>
                                <div class="data">
                                    <label>Năm sản xuất</label>
                                    <input name="Nam" type="text" autocomplete="off" required />
                                </div>
                                <div class="data">
                                    <label>Thể loại</label>
                                    <input name="Theloai" type="text" autocomplete="off" required />
                                </div>
                                <div class="data">
                                    <label>Độ tuổi</label>
                                    <input name="Tuoi" type="text" autocomplete="off" required />
                                </div>
                                <div class="btn">
                                    <div class="inner"></div>
                                    <input namne="themphim" class="themnguoidung" type="submit" value="Thêm Phim" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Tìm kiếm -->
                <form method="POST">
                    <input class="timkiem" type="text" name="timkiem" placeholder="Tìm kiếm" />
                    <input class="tim" type="submit" name="Tim" value="Tìm">
                </form>
                <!-- end tìm kiếm -->
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                if (isset($_POST["Tim"])) {
                    $s = $_POST["timkiem"];
                    if ($s == "") {
                        $message = "Vui lòng nhập vào thanh tìm kiếm";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    } else {
                        $sql = "select * from phim where Tenphim Like '%$s%'";
                        $qr = mysqli_query($conn, $sql);
                        $count = mysqli_num_rows($qr);
                        if ($count <= 0) {
                            $message = "Không tìm thấy kết quả nào với từ khóa, " . $s;
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        } else {
                            $message = "Tìm thấy " . $count . " kết quả với từ khóa," . $s;
                            echo "<script type='text/javascript'>alert('$message');</script>";
                ?>
                            <div class="table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Ảnh</th>
                                            <th>Tên phim</th>
                                            <th>Lượt xem</th>
                                            <th>Năm sản xuất</th>
                                            <th>Thể loại</th>
                                            <th>Độ tuổi</th>
                                            <th>ID</th>
                                            <th>Settings</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while ($row = mysqli_fetch_array($qr)) {
                                    ?> <tbody>
                                            <tr>
                                                <td class='hehe'><img class='huhu' src=<?php echo $row['img'] ?>></td>
                                                <td><?php echo $row['Tenphim'] ?></td>
                                                <td><?php echo $row['Luotxem'] ?></td>
                                                <td class='year'><?php echo $row['Nam'] ?></td>
                                                <td><?php echo $row['Theloai'] ?></td>
                                                <td><?php echo $row['Tuoi'] ?> </td>
                                                <td class='pending'>#<?php echo $row["ID"] ?></td>
                                                <td><a onclick="return confirm('Bạn có muốn chỉnh sửa phim không');" href="/include/SuaPhim.php?ID=<?php echo $row['ID']; ?>" <span><i style=' cursor: pointer;' class='ri-edit-line edit'></i></a>
                                                    <a onclick="return confirm('Bạn có chắc đã muốn xóa phim này không');" href="/include/XoaPhim.php?ID=<?php echo $row['ID']; ?>"> <i style=' cursor: pointer;' class='ri-delete-bin-line delete'></i></span></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                    <?php
                        }
                    }
                } else {
                    ?>
                    <div class=" table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Tên phim</th>
                                    <th>Lượt xem</th>
                                    <th>Năm sản xuất</th>
                                    <th>Thể loại</th>
                                    <th>Độ tuổi</th>
                                    <th>ID</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <?php
                            $conn = new mysqli('localhost', 'root', '', 'netflix');
                            $sql = "select * from phim";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                            ?> <tbody>
                                    <tr>
                                        <td class='hehe'><img class='huhu' src=<?php echo $row['img'] ?>></td>
                                        <td><?php echo $row['Tenphim'] ?></td>
                                        <td><?php echo $row['Luotxem'] ?></td>
                                        <td class='year'><?php echo $row['Nam'] ?></td>
                                        <td><?php echo $row['Theloai'] ?></td>
                                        <td><?php echo $row['Tuoi'] ?> </td>
                                        <td class='pending'>#<?php echo $row["ID"] ?></td>
                                        <td><a onclick="return confirm('Bạn có muốn chỉnh sửa phim không');" href="/include/SuaPhim.php?ID=<?php echo $row['ID']; ?>" <span><i style=' cursor: pointer;' class='ri-edit-line edit'></i></a>
                                            <a onclick="return confirm('Bạn có chắc đã muốn xóa phim này không');" href="/include/XoaPhim.php?ID=<?php echo $row['ID']; ?>"> <i style=' cursor: pointer;' class='ri-delete-bin-line delete'></i></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <script>
        let menu = document.querySelector('.menu')
        let sidebar = document.querySelector('.sidebar')
        let mainContent = document.querySelector('.main--content')
        menu.onclick = function() {
            sidebar.classList.toggle('active')
            mainContent.classList.toggle('active')
        }
    </script>
</body>

</html>