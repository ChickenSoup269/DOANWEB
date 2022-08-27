<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:DangNhap.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL="shortcut icon" href="/img/icon.png">
    <title>Games & Update</title>
    <link rel="stylesheet" href="/Styles/Movie.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <script src="https://code.nintendo.com/web-components/game-tile/game-tile.js" type="module"></script>
    <script src="https://code.nintendo.com/web-components/cta-mini-blade/cta-mini-blade.js" type="module"></script>
    <script src="https://code.nintendo.com/web-components/styled-button/styled-button.js" type="module"></script>
    <script src="https://code.nintendo.com/web-components/1.1.0/tile-slider/tile-slider.js" type="module"></script>
    <link rel="stylesheet" href="https://use.typekit.net/wyv1nqp.css">
    <link rel="stylesheet" href="/font/fontawesome-free-6.1.1/fontawesome-free-6.1.1-web/css/all.min.css">
    <script>
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
                document.getElementById("mynav").style.backgroundColor = "#000000";
            } else {
                document.getElementById("mynav").style.backgroundColor = "rgba(0,0,0,0.0)";
            }
        }
    </script>
    <style>
        h1 {
            font-size: 2.375rem;
            line-height: 1.32;
            margin: 0 0 0.5em;
        }

        game-tile h2[slot=title] {
            margin: 0;
            font-size: 1.25em;
            color: white;
        }

        game-tile {
            padding-left: 15px;
        }

        .wrapper12,
        .VBG {
            padding: 1.5em 0;
        }

        * {
            box-sizing: border-box;
        }


        :not(:defined) {
            opacity: 0;
        }

        .wrapper12 {
            max-width: 1180px;
            margin: 0 auto;
            width: 96%;
        }

        .abs,
        .tieudegame:after,
        .cards .card figcaption,
        .cards .card:after,
        .news .card figcaption,
        .news .card:after,
        .news .article figcaption {
            position: absolute;
        }

        .rel,
        h2,
        h2 strong,
        .cards .card,
        .news .card,
        .news .article {
            position: relative;
        }

        .fix {
            position: fixed;
        }

        .dfix {
            display: inline;
        }

        .dib {
            display: inline-block;
        }

        .db {
            display: block;
        }

        .dn {
            display: none;
        }

        .df,
        .cards,
        .news {
            display: flex;
        }

        .dif {
            display: inline-flex;
        }

        .dg {
            display: grid;
        }

        .dig {
            display: inline-grid;
        }

        .vm,
        .tieudegame,
        .tieudegame strong,
        .tieudegame span {
            vertical-align: middle;
        }

        body {
            background: #24282f;
            font-family: sans-serif;
            font-weight: 800;
        }

        .wrapperghn {
            padding: 15px;
        }

        .tieudegame {
            padding: 10px;
            padding-left: 25px;
            color: #ccc;
            margin: 0;
        }

        .tieudegame strong {
            z-index: 2;
            background: #24282f;
            padding: 4px 8px;
        }

        .tieudegame span {
            font-size: 0.7em;
            color: #aaa;
            margin-left: 10px;
        }

        .tieudegame:after {
            content: '';
            z-index: 1;
            bottom: 50%;
            margin-bottom: -2px;
            height: 2px;
            left: 0;
            right: 0;
            background: #373d47;
        }

        .cards,
        .news {
            flex-flow: row wrap;
        }

        .cards .card,
        .news .card {
            margin: 20px;
            width: 180px;
            height: 270px;
            overflow: hidden;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.8);
            transform-origin: center top;
            transform-style: preserve-3d;
            transform: translateZ(0);
            transition: 0.3s;
            border-radius: 10px;
        }

        .cards .card img,
        .news .card img {
            width: 100%;
            min-height: 100%;
        }

        .cards .card figcaption,
        .news .card figcaption {
            left: 0;
            right: 0;
            bottom: 0;
            padding: 20px;
            padding-bottom: 10px;
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            transform: translateY(100%);
            transition: 0.3s;
        }

        .cards .card:after,
        .news .card:after {
            content: '';
            z-index: 10;
            width: 200%;
            height: 100%;
            top: -90%;
            left: -20px;
            opacity: 0.1;
            transform: rotate(45deg);
            background: linear-gradient(to top, transparent, #fff 15%, rgba(255, 255, 255, 0.5));
            transition: 0.3s;
        }

        .cards .card:hover,
        .news .card:hover,
        .cards .card:focus,
        .news .card:focus,
        .cards .card:active,
        .news .card:active {
            box-shadow: 0 8px 16px 3px rgba(0, 0, 0, 0.6);
            transform: translateY(-3px) scale(1.05) rotateX(15deg);
            cursor: pointer;
        }

        .cards .card:hover figcaption,
        .news .card:hover figcaption,
        .cards .card:focus figcaption,
        .news .card:focus figcaption,
        .cards .card:active figcaption,
        .news .card:active figcaption {
            transform: none;
        }

        .cards .card:hover:after,
        .news .card:hover:after,
        .cards .card:focus:after,
        .news .card:focus:after,
        .cards .card:active:after,
        .news .card:active:after {
            transform: rotate(25deg);
            top: -40%;
            opacity: 0.15;
        }

        .news .article {
            overflow: hidden;
            width: 350px;
            height: 235px;
            margin: 20px;
        }

        .news .article img {
            width: 100%;
            min-height: 100%;
            transition: 0.2s;
        }

        .news .article figcaption {
            font-size: 14px;
            text-shadow: 0 1px 0 rgba(51, 51, 51, 0.3);
            color: #fff;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            padding: 40px;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
            background: rgba(6, 18, 53, 0.8);
            opacity: 0;
            transform: scale(1.15);
            transition: 0.2s;
        }

        .news .article figcaption h3 {
            color: #3792e3;
            font-size: 16px;
            margin-bottom: 0;
            font-weight: bold;
        }

        .news .article:hover img,
        .news .article:focus img,
        .news .article:active img {
            filter: blur(3px);
            transform: scale(0.97);

        }

        .news .article:hover figcaption,
        .news .article:focus figcaption,
        .news .article:active figcaption {
            opacity: 1;
            transform: none;
            cursor: pointer;
        }

        .nav-menu2 {
            padding-right: 380px;
        }

        .l-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 30px;
            width: 100%;
            max-width: 1200px;
            padding-left: 180px;
            cursor: pointer;

        }

        @media screen and (max-width: 760px) {
            .l-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .b-game-card {
            position: relative;
            z-index: 1;
            width: 100%;
            padding-bottom: 150%;
            perspective: 1000px;

        }

        .b-game-card__cover {
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            background-size: cover;
            perspective-origin: 50% 50%;
            transform-style: preserve-3d;
            transform-origin: top center;
            will-change: transform;
            transform: skewX(0.001deg);
            transition: transform 0.35s ease-in-out;
            border-radius: 15px;
        }

        .b-game-card__cover::after {
            display: block;
            content: "";
            position: absolute;
            z-index: 100;
            top: 0;
            left: 0;
            width: 100%;
            height: 120%;
            background: linear-gradient(226deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.4) 35%, rgba(255, 255, 255, 0.2) 42%, rgba(255, 255, 255, 0) 60%);
            transform: translateY(-20%);
            will-change: transform;
            transition: transform 0.65s cubic-bezier(0.18, 0.9, 0.58, 1);
        }

        .b-game-card:hover .b-game-card__cover {
            transform: rotateX(7deg) translateY(-6px);
        }

        .b-game-card:hover .b-game-card__cover::after {
            transform: translateY(0%);
        }

        .b-game-card::before {
            display: block;
            content: "";
            position: absolute;
            top: 5%;
            left: 5%;
            width: 90%;
            height: 90%;
            background: rgba(0, 0, 0, 0.5);
            box-shadow: 0 6px 12px 12px rgba(0, 0, 0, 0.4);
            will-change: opacity;
            transform-origin: top center;
            transform: skewX(0.001deg);
            transition: transform 0.35s ease-in-out, opacity 0.5s ease-in-out;
        }

        .b-game-card:hover::before {
            opacity: 0.6;
            transform: rotateX(7deg) translateY(-6px) scale(1.05);
        }

        @media only screen and (max-width: 1280px) {
            .nav-menu2 {
                padding-right: 150px;
            }
        }
    </style>
</head>

<body>
    <!-- NAV -->
    <div id="mynav" class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                    <div class="thing">
                        <img style="width: 25px;" src="/img/icon.png" alt="">
                    </div>
                    <img class="logogh" style="width: 150px; padding-top: 10px;" src="/img/logo.png" alt="">
                </a>
                <ul class="nav-menu" id="nav-menu GFVB">
                    <div class="nav-menu2">
                        <li><a class="MNB" href="/Php/Movie.php">Trang chủ</a></li>
                        <li><a class="MNB" href="/Php/Mylist.php">Danh sách</a></li>
                        <li><a class="MNB" id="MNB" href="#">Games & Update</a></li>
                        <li><a class="MNB TGV" href="#phim">Phim</i></a></li>
                    </div>
                    <li><a>
                            <div class="searchBox">
                                <input class="searchInput" id="searchInputid" type="text" name="" placeholder="Search" onkeyup="timkiem()">
                                <button class="searchButton" href="#">
                                    <i class="material-icons">
                                        <i style="font-size: 15px;" class="fa fa-search">
                                        </i>
                                </button>
                                <div class="searchbox2" id="searchbox2id">
                                    <!-- 8 -->
                                    <div data-modal-target="#modal47" class="movieimg">
                                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQHVhUDV5WYl-bNoTI6M6XQsFR1zJBlmUmOXtsV6asjtM5gyRVxHdSBiMO_KVbbtFfpi05UHO0wKbSMZsa0MUu3TxmSZu-YKDrV9.jpg?r=2b2" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                Game hay nè
                                            </h6>
                                            <p class="mieuta">
                                                2010
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 9 -->
                                    <div data-modal-target="#modal48" class="movieimg">
                                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABT-IVHXwTSXjuYeuCJOe0W6n2d4ff4SetccD3PAmrRit-1SAqMtRXqNtB9a66DGPI0h58-u5GSnnVUy0ToN6MDYRuI7zkqh2hX-bvex1MVLTWw5qJKFz4f3ao4O-pOZGpl_y3w.jpg?r=58c" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                Thủy Thủ Mặt Trăng
                                            </h6>
                                            <p class="mieuta">
                                                2021
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 10 -->
                                    <div data-modal-target="#modal49" class="movieimg">
                                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfp3hWvYerE0NkatzBw3zFyoiWI0-vQWfWQlm6n6TuIMDCYt43MRi0NPC0mJ-BYQWigCwhlkJ8yJOFcK7jT8f0kw9WVKcqerdjmZ.jpg?r=2e8" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                SPIRITED AWAY
                                            </h6>
                                            <p class="mieuta">
                                                2001
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 11 -->
                                    <div data-modal-target="#modal51" class="movieimg">
                                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWkZTZQNn3TP2JbGGaezRSLs3kbYfj1zlagfbuJuRrHFD9F2S9HMRZqpTv7Q4IJvmW8ERw-aWH7i1DT-VSj9SJ0q6gSSdEpN74hsIttWV7NMkQyex70kvWvjYJeaVn_VSLJ1ig.jpg?r=91a" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                Pokémon NEWTWO
                                            </h6>
                                            <p class="mieuta">
                                                2019
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 12 -->
                                    <div data-modal-target="#modal52" class="movieimg">
                                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVbByc8KsYyml4i8Ef3723IA-sZPi33WQy76rjY7Q3ymi34NVnP5bpbPUwUkpgzu4FsoGdt87mqnFQCL72_QeouTg5cLAwd7hWY.jpg?r=303" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                B E L L E
                                            </h6>
                                            <p class="mieuta">
                                                2021
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 13 -->
                                    <div data-modal-target="#modal" class="movieimg">
                                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfoTBFlJeXrirqo25Gs8ECUE9WlbBdkzVX5jVdFJw8L9pgxLz_KBdyP9_hAnos6-bHRdTqLDOi5kBCkCfPPsu8i5OSJOLzvU3P6J.jpg?r=70d" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                Học viện Diệt Qủy
                                            </h6>
                                            <p class="mieuta">
                                                2021
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 14 -->
                                    <div data-modal-target="#modal1" class="movieimg">
                                        <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABd_fESf5pqRH9t4Ynv4OsWrvZJiZhmAwKdhEsyRDVJJTK6npZyS6X0aXSGX8vD3atMyBTboez9akEZOU6-GhIzLvMaLJ5AFvg_zm.jpg?r=bcb" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                STAND BY ME 2
                                            </h6>
                                            <p class="mieuta">
                                                2020
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 15 -->
                                    <div data-modal-target="#modal2" class="movieimg">
                                        <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUnCUlhfJ_0yrHiFtebFRsjmWJi2_L9NCpLP0_XF5E1VAQSM0G6lYTpV_NdbXR32tP_JBJPyWjTxmon15AfOCocpBdeAXpEQd9sT.jpg?r=dcb" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                GunDam MOBILE SUIT
                                            </h6>
                                            <p class="mieuta">
                                                2010
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 16 -->
                                    <div data-modal-target="#modal3" class="movieimg">
                                        <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRnEiH33J-itCJMW3mqGvSYcrkzW2HZSIVcrsseATr9cK408GHs4gxsjo4mnWqUf3NphzC5lG7IsJX54hBfKFZxt0ySzyRrJIT3Z.jpg?r=17d" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                Nausicaä
                                            </h6>
                                            <p class="mieuta">
                                                1984
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 17 -->
                                    <div data-modal-target="#modal4" class="movieimg">
                                        <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUbOw2xy9ap-kXT0gzuVadyO0h22g9_TNFsLziiozha1TRxMU0QSU8NIHvCKlLBb7iwkugQUrrq76wcdtADnllf2JAi5Xt9j0_gJ.jpg?r=4b3" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                5 Centimeters Per Second
                                            </h6>
                                            <p class="mieuta">
                                                2007
                                            </p>
                                        </div>
                                    </div>
                                    <!-- 18 -->
                                    <div data-modal-target="#modal5" class="movieimg">
                                        <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABaHB5N1j2-sNuN7x7BmKcwxM4LbEDoDj1_aky2hpM8VJ1dkkeraG4Ai6fr0OAH7tt5StkGfdCqsaDgDzUT7SRMCaj8SyxV8tAkCw.jpg?r=3e0" alt="">
                                        <div class="noidungVGB">
                                            <h6 class="tuadesea">
                                                TALES from EARTHSEA
                                            </h6>
                                            <p class="mieuta">
                                                2006
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a></li>
                    <li><a href="#">
                            <div class="notification">
                                <a href="#">
                                    <div class="notBtn" href="#">
                                        <!--Tự động ẩn và hiện khi hover và không hover -->
                                        <div class="number"></div>
                                        <i class="fas fa-bell"></i>
                                        <div class="box">
                                            <div class="display">
                                                <div class="nothing">
                                                    <i class="fas fa-child stick"></i>
                                                    <div class="cent">Looks Like your all caught up!</div>
                                                </div>
                                                <div class="cont">
                                                    <!-- Div thông báo -->
                                                    <div class="sec1 new">
                                                        <a href="#">
                                                            <div class="profCont">
                                                                <i title="To fulfill his dreams of becoming a legendary Hunter like his dad, a young boy must pass a rigorous examination and find his missing father." class="fa-solid fa-circle-question"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="sec2 new">
                                                        <a href="#">
                                                            <div class="profCont">
                                                                <i title="With his days numbered, high schooler Yuji decides to hunt down and consume the remaining 19 fingers of a deadly curse so it can die with him." class="fa-solid fa-circle-question"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="sec3 new">
                                                        <a href="#">
                                                            <div class="profCont">
                                                                <i title="A peculiar girl transforms into a cat to catch her crush's attention. But before she realizes it, the line between human and animal starts to blur." class="fa-solid fa-circle-question"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="sec4 new">
                                                        <a href="#">
                                                            <div class="profCont">
                                                                <i title="Bored with life, popular high schooler Yatora Yaguchi jumps into the beautiful yet unrelenting world of art after finding inspiration in a painting." class="fa-solid fa-circle-question"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="sec5 new">
                                                        <div class="hello">
                                                            <a href="#">
                                                                <div class="profCont">
                                                                    <i title="An outgoing, popular girl who’s secretly a homebody bonds with her nerdy classmate who hides his tattoos and piercings while at school." class="fa-solid fa-circle-question"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="sec6 new">
                                                        <a href="#">
                                                            <div class="profCont">
                                                                <i title="After ending up in the outside world, two squabbling pet dogs find common ground against a gang of angry animals preparing an attack on humans." class="fa-solid fa-circle-question"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="sec7 new">
                                                        <a href="#">
                                                            <div class="profCont">
                                                                <i title="In Textopolis, where the emojis are expected to display just one emotion, Gene's multiple expressions are a problem. His solution: become " normal. class="fa-solid fa-circle-question"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="sec8 new">
                                                        <a href="#">
                                                            <div class="profCont">
                                                                <i title="A speed-obsessed snail who dreams of being the world's greatest race car driver gets his chance when an accident imbues him with high-octane speed." class="fa-solid fa-circle-question"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="sec9 new">
                                                        <a href="#">
                                                            <div class="profCont">
                                                                <i title="The How to Train Your Dragon adventurecontinues when a hunt for lost sheep turns into afierce, fun-filled competition." class="fa-solid fa-circle-question"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div></i>
                        </a></li>
                    <!-- user img -->
                    <!-- đổi ảnh khi chọn -->
                    <li><a>
                            <div class="dropdownGH">
                                <div onclick="myFunction()" class="dropbtnGH"><img id="GGH" style="width: 35px; margin-top: 8px;" src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Netflix-avatar.png" alt="user-img"></div>
                                <div id="myDropdownGH" class="dropdownGH-content">
                                    <a onclick="document.getElementById('GGH').src='https://upload.wikimedia.org/wikipedia/commons/0/0b/Netflix-avatar.png'" class="GB"><img class="GIM" style="width: 35px;" src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Netflix-avatar.png" alt="">Admin</a>
                                    <a onclick="document.getElementById('GGH').src='https://mir-s3-cdn-cf.behance.net/project_modules/disp/64623a33850498.56ba69ac2a6f7.png'" class="GB"><img class="GIM" style="width: 35px;" src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/64623a33850498.56ba69ac2a6f7.png" alt="">Thiện</a>
                                    <a onclick="document.getElementById('GGH').src='https://pbs.twimg.com/media/DmBraqkXcAA1Yco.jpg'" class="GB"> <img class="GIM" style="width:35px;" src="https://pbs.twimg.com/media/DmBraqkXcAA1Yco.jpg" alt="">
                                        Duy</a>
                                    <a onclick="document.getElementById('GGH').src='https://avatars3.githubusercontent.com/u/3025708?v=4'" class="GB"><img class="GIM" style="width: 35px;" src="https://avatars3.githubusercontent.com/u/3025708?v=4" alt="">Hoàng</a>
                                    <a href="/include/logout.php" class=" GB"><img src="/img/logout.png" class="GIM" style="width: 35px;" alt="">Logout
                                </div>
                            </div>
                        </a></li>
                    <i class="fa-solid fa-caret-down"></i>
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div onclick="off()" class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"><i class="fa-solid fa-bars fa-2x"></i></div>
                </div>
            </div>
        </div>
        <div class="netflix-nav netflix-nav-black">
            <div class="netflix-nav netflix-nav-red">
                <div class="netflix-nav netflix-nav-white">
                    <div class="netflix-nav-container">
                        <button class="netflix-nav-btn netflix-close-btn"><i onclick="showM()" class="fas fa-times"></i></button>
                        <img class="netflix-logo" src="/img/logo.png" alt="Netflix Logo" />
                        <ul class="netflix-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">My List</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#"><input type="search" id="search-box" placeholder="Search">
                                    <label for="search-box" class="fas fa-search"></label></a></li>
                            <li>
                                <ul>
                                    <li><a href="#">Netflix culture memo</a></li>
                                    <li><a href="#">Work life philosophy</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="wrapper12">

        <img style="width: 100%;" src="https://www.lifehacker.com.au/wp-content/uploads/sites/4/2021/11/03/Netflix-Australia-games-1-1.jpg?quality=80&resize=1280,720">
    </section>
    <div class="wrapper12">
        <h1>Most played games</h1>
    </div>
    <div class="l-container">
        <div class="b-game-card">
            <div class="b-game-card__cover" style="background-image: url(https://m.media-amazon.com/images/I/614ZKXVkrUL._AC_SL1000_.jpg);">
            </div>
        </div>
        <div class="b-game-card">
            <div class="b-game-card__cover" style="background-image: url(https://s2.gaming-cdn.com/images/products/826/orig-fallback-v1/age-of-empires-ii-hd-edition-hd-edition-pc-game-steam-cover.jpg?v=1650468641);">
            </div>
        </div>
        <div class="b-game-card">
            <div class="b-game-card__cover" style="background-image: url(https://images.launchbox-app.com/0d79fdf9-02b8-450b-abce-3ed8e6c864bc.png);">
            </div>
        </div>
        <div class="b-game-card">
            <div class="b-game-card__cover" style="background-image: url(https://i.pinimg.com/originals/46/de/29/46de29594fc638111b174f18695e736f.png);">
            </div>
        </div>
        <div class="b-game-card">
            <div class="b-game-card__cover" style="background-image: url(https://upload.wikimedia.org/wikipedia/vi/0/06/Counter-Strike_Global_Offensive_poster.jpg);">
            </div>
        </div>
        <div class="b-game-card">
            <div class="b-game-card__cover" style="background-image: url(https://i.pinimg.com/550x/78/f8/71/78f871a9b9186190f358252636c94cd4.jpg);">
            </div>
        </div>
        <div class="b-game-card">
            <div class="b-game-card__cover" style="background-image: url(https://www.mobygames.com/images/covers/l/672205-my-friend-pedro-nintendo-switch-extras.jpg);">
            </div>
        </div>
        <div class="b-game-card">
            <div class="b-game-card__cover" style="background-image: url(https://cdn-products.eneba.com/resized-products/AVzGqTQ_xLFZHbjfPOCsspyP8-uoyp-oKZ0TPciYtsw_350x200_1x-0.jpg);">
            </div>
        </div>
    </div>
    <section class="VBG">
        <div class="wrapper12">
            <h1>Popular Game</h1>
        </div>
        <tile-slider>
            <game-tile href="#" platform="STRANGER THINGS THE GAME" image="https://steamcdn-a.akamaihd.net/steam/apps/1097800/header.jpg">
                <h2 slot="title">Available now</h2>
            </game-tile>
            <game-tile href="#" platform="INTO THE BREACH" image="https://variety.com/wp-content/uploads/2022/07/Netflix-Into-the-Breach-Mobile-Advanced-Edition.jpg">
                <h2 slot="title">DLC Available now</h2>
            </game-tile>
            <game-tile href="#" platform="12 MINUTES" image=" http://twelveminutesgame.com/wp-content/uploads/2019/06/12M_KeyArt_LogoWithTagline.jpg">
                <h2 slot="title">Available now</h2>
            </game-tile>
            <game-tile href="#" platform="LOST SIGNALS" image="https://cdn.cloudflare.steamstatic.com/steam/apps/1574310/capsule_616x353.jpg?t=1650991388">
                <h2 slot="title">Available now</h2>
            </game-tile>
            <game-tile href="#" platform="Hextech Mayhem Netflix Edition" loading="auto" image="https://www.xda-developers.com/files/2022/02/Netflix-games-Hextech-Mayhem-featured.jpg">
                <h2 slot="title">Available now</h2>
            </game-tile>
            <game-tile href="#" platform="NETFLIX Moonlighter" loading="auto" image="https://sao.baophapluat.vn/ckfinder/userfiles/images/image-20220526103739-3.jpeg">
                <h2 slot="title">Available now</h2>
            </game-tile>
            <game-tile href="#" platform="STAR WAR BATTLEFRONT II" loading="auto" image="https://genk.mediacdn.vn/2017/prarrol8zbfakqktagjr-1492594912554.jpg">
                <h2 slot="title">Available now</h2>
            </game-tile>
            <game-tile href="#" platform="DOTA 2" loading="auto" image="https://images.fpt.shop/unsafe/filters:quality(5)/fptshop.com.vn/uploads/images/tin-tuc/132888/Originals/5-tua-game-esports-pho-bien-co-the-chien-tot-tren-laptop-hien-nay-7.jpg">
                <h2 slot="title">Free demo available</h2>
            </game-tile>
            <game-tile href="#" platform="VALORANT" loading="auto" image="https://www.10wallpaper.com/wallpaper/medium/2004/Valorant_Closed_Beta_2020_Game_HD_Poster_medium.jpg">
                <h2 slot="title">DLC available now</h2>
            </game-tile>
            <game-tile href="#" platform="LITTLE NIGHTMARES 2" loading="auto" image="https://bleedingcool.com/wp-content/uploads/2020/08/Little-Nightmares-2-Main-Art-1200x675.jpg">
                <h2 slot="title">Available now</h2>
            </game-tile>
            <game-tile href="#" platform="WARFACE" loading="auto" image="https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_Warface_AllodsTeam_S1_2560x1440-bf3c5da7b0239523117b1ff2bba16dc9">
                <h2 slot="title">Available now</h2>
            </game-tile>
            <game-tile href="#" platform="THE LEGEND OF ZELADA" loading="auto" image="https://ae01.alicdn.com/kf/HTB1lDOFJVXXXXcKXpXXq6xXFXXX4.jpg">
                <h2 slot="title">Free download</h2>
            </game-tile>
        </tile-slider>

    </section>
    <div class="wrapperghn">
        <h2 class="tieudegame"><strong>All Games news<span>( 15 )</span></strong></h2>
        <div class="cards">
            <figure class="card">
                <img src="https://i.ebayimg.com/images/g/~1kAAOSwAjlgLmmI/s-l500.png" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://cdn.shopify.com/s/files/1/0747/3829/products/mL4465_1024x1024.jpg?v=1591827152" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://gamein.wiki/wp-content/uploads/2022/06/GTA-5-Mobile-Poster.jpg" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://assets.mycast.io/posters/genshin-impact-live-action-show-fan-casting-poster-204788-large.jpg?1655031958" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://m.media-amazon.com/images/M/MV5BYmZiMWNlOWMtODMyNi00ZThiLTk0ZjYtOTQwMGRiNzE2NjFhXkEyXkFqcGdeQXVyNTgyNTA4MjM@._V1_FMjpg_UX1000_.jpg" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://m.media-amazon.com/images/I/61gEETe5-wL._AC_SL1024_.jpg" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://www.themoviedb.org/t/p/original/zm9TZFoqRtLoXuF3w2ZeL85TPZf.jpg" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://cdn.cdkeys.com/700x700/media/catalog/product/y/7/y78hf2dunjubasqnfktmwt2sqoicgnmugzlni6sk2be.jpg" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://m.media-amazon.com/images/I/6110RSDn3PL._AC_SY741_.jpg" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://upload.wikimedia.org/wikipedia/en/7/73/Minecraft_Dungeons_cover_art.jpg" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://cdn1.epicgames.com/salesEvent/salesEvent/amogusportrait_1200x1600-66ad0e4d363e1c92f9f8aae67a96dd31" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://thuvienhd.com/wp-content/uploads/2014/12/97db4b840c0fe218e64272394e102666.jpg" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://www.minecraft.net/content/dam/games/minecraft/key-art/MC_One-Vanilla_285x380px.jpg" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://cdn.shopify.com/s/files/1/0747/3829/products/mL2203_cc292fef-89e2-4ea0-a7ef-c8cf1cdc1fe3_1024x1024.jpg?v=1571445520" />
                <figcaption>Play Now!</figcaption>
            </figure>
            <figure class="card">
                <img src="https://m.media-amazon.com/images/M/MV5BNzE4NDBjMGEtODkwNC00NzBjLWI2ZGYtNmE1NmY5Y2Y4MmIwXkEyXkFqcGdeQXVyNTM0MjE5NTc@._V1_.jpg" />
                <figcaption>Play Now!</figcaption>
            </figure>
        </div>
        <h2 class="tieudegame"><strong>What's new in the update?</strong></h2>
        <div class="news">
            <figure class="article">
                <img src="https://mrreiha.keybase.pub/codepen/hover-fx/news1.jpg" />
                <figcaption>
                    <h3 class="new-item">New Item</h3>
                    <p class="chuthichvbh">
                        In today’s update, two heads are better than one, and three heads are better than that, as the
                        all-new Flockheart’s Gamble Arcana item for Ogre Magi makes its grand debut.
                    </p>
                </figcaption>
            </figure>
            <figure class="article">
                <img src="https://mrreiha.keybase.pub/codepen/hover-fx/news2.png" />
                <figcaption>
                    <h3 class="new-titem">Update</h3>
                    <p class="chuthichvbh">
                        Just in time for Lunar New Year and the Rat’s time in the cyclical place of honor, the Treasure
                        of
                        Unbound Majesty is now available.
                    </p>
                </figcaption>
            </figure>
            <figure class="article">
                <img src="https://cdn.sforum.vn/sforum/wp-content/uploads/2022/01/genshin-impact-guides-fan-art-fanart-cosplay-1.jpeg" />
                <figcaption>
                    <h3 class="new-titem">Update</h3>
                    <p class="chuthichvbh">
                        Genshin impact vừa cập nhật phiên bản mới nhất xuất hiện bản đồ mới và thuộc tính mới đã được
                        nói đến từ phiên bản đầu
                        tiên của tựa game này
                    </p>
                </figcaption>
            </figure>
        </div>
    </div>
</body>
<script>
    // Hiện menu
    const netflix_open_btn = document.querySelector('#hamburger-menu');
    const netflix_close_btn = document.querySelector('.netflix-close-btn');
    const netflix_nav = document.querySelectorAll('.netflix-nav');
    netflix_open_btn.addEventListener('click', () => {
        netflix_nav.forEach(nav_el => {
            nav_el.classList.add('visible')
        });
    });

    netflix_close_btn.addEventListener('click', () => {
        netflix_nav.forEach(nav_el => {
            nav_el.classList.remove('visible')
        });
    });
    // js cho bar menu reponsive
    function off() {
        var node = document.getElementById('hamburger-menu')
        node.style.visibility = 'hidden';
    }

    function showM() {
        var node = document.getElementById('hamburger-menu')
        node.style.visibility = 'visible';
    }
    // js cho user-img
    /* When the user clicks on the button, 
           toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdownGH").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

</html>