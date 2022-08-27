<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'netflix');
if (!isset($_SESSION['user'])) {
    header("location:DangNhap.php");
}
$img = $_GET['img'];
$sql = "select  * from phim  where img = '$img'";
$query =  mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách của tôi</title>
    <link rel="stylesheet" href="/Styles/Mylist.css">
    <link rel="stylesheet" href="/Styles/Movie.css">
    <link rel="stylesheet" href="/font/fontawesome-free-6.1.1/fontawesome-free-6.1.1-web/css/all.min.css">
    <link REL="shortcut icon" href="/img/icon.png">
    <style>
        @media only screen and (max-width: 1280px) {
            .nav-menu2 {
                padding-right: 150px;
            }
        }

        .nav-menu2 {
            padding-right: 380px;
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
                        <li><a class="MNB" id="MNB" href="#">Danh sách</a></li>
                        <li><a class="MNB" href="/Php/Game.php">Games & Update</a></li>
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
    <!--Mylist+Background-video-->
    <div class="video-container">
        <div class="section-overlay"></div>
        <video class="video-background" autoplay="" muted="" loop="">
            <source src="" type="">
            <source src="" type="video/webm">
        </video>
        <!--popup-video-->
        <div class="popup-video">
            <video src="/video/Netflix Original Films (2018).mp4" autoplay="" muted="" loop=""></video>
        </div>
    </div>
    </div>
    <div class="container10">
        <h1>Danh sách của tôi</h1>

        <div class="video-container10">
            <div class="video10 ">
                <img src="/img/5cmtrengiay - Copy.jpg" alt="">
            </div>
            <div class="video10">
                <img src="/img/A Whisker Away.jpg" alt="">
            </div>
            <div class="video10">
                <img src="https://occ-0-325-2774.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWBuZwljh8gjIVSHqleNJV3c2I3c3Y1dPCSE03DguFUim5_AM3AUkd9OZGkmlWvUYlg1sxYH375kMhDcUHmHmNMdVPcnXIaqoEA.jpg?r=c01" alt="">
            </div>
            <div class="video10">
                <img src="https://occ-0-325-2774.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbZ7OJj57xX_lUAANYdhLXiYHi0zbOLOT5NoHWhZVpJEuWNWyveX0qWHMnD61-5S923GwXtknJBqweoKF6TlIDaEb7m5cv4r9ZtSN-kb1S5r3e3AOr8NHp5PMHjhBTPCM9fo.jpg?r=fa6" alt="">
            </div>
            <div class="video10">
                <img src="https://occ-0-325-2774.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABaEVbkNQR-muAtu1jIIJ3HdGQ9KHGmFc4vLvWd-MKoN_CB_6TdQdjE0ulotSRi644CNIW-ZbmYVGPv8Ox7lMVcam75Zz61iu0z4.jpg?r=8d8" alt="">
            </div>
            <div class="video10">
                <img src="https://occ-0-325-2774.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfc-vppdut3-xzPf2jc5p_fPlqZphqLi22mJHUXt1DNbLoHjxrKb4uEWGIjgEMLZnNh8n7muMIw_gxIrPF4FBHnVyGFhPNGxsss.jpg?r=295" alt="">
            </div>
            <?php
            $conn = new mysqli('localhost', 'root', '', 'netflix');
            $sql_connect = "INSERT into luuphim(hinhanh) value ('$img')";
            $query2 =  mysqli_query($conn, $sql_connect);
            $sql2 = "select * from luuphim";
            $result = $conn->query($sql2);
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="video10">
                    <img src="<?php echo $row['hinhanh'] ?>" alt="">
                </div>
            <?php
            }
            ?>

        </div>
        <script>
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
                    document.getElementById("mynav").style.backgroundColor = "#000000";
                } else {
                    document.getElementById("mynav").style.backgroundColor = "#000000";
                }
            }

            document.querySelectorAll('.video-container10 img').forEach(vid => {
                vid.onclick = () => {
                    document.querySelector('.popup-video').style.display = 'block';
                    document.querySelector('.popup-video img ').src = vid.getAttribute('src')
                }
            });
            document.querySelector('.popup-video span').onclick = () => {
                document.querySelector('.popup-video').style.display = 'none';

            }

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

</body>

</html>