<?php
session_start();
if (!isset($_SESSION['luongtruycap'])) $_SESSION['luongtruycap'] = 0;
else $_SESSION['luongtruycap'] += 1;

if (!isset($_SESSION['user'])) {
    header("location:/Php/DangNhap.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL="shortcut icon" href="/img/icon.png">
    <title>
        Netflix
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- APP CSS -->
    <link rel="stylesheet" href="/Styles/gird.css">
    <link rel="stylesheet" href="/Styles/Movie.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/font/fontawesome-free-6.1.1/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="/js/searchbox.js"></script>
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
                        <li><a class="MNB" id="MNB" href="#">Trang chủ</a></li>
                        <li><a class="MNB" href="/Php/Mylist.php">Danh sách</a></li>
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
                                    <?php
                                    $conn = new mysqli('localhost', 'root', '', 'netflix');
                                    $sql = "select * from phim";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "  <div data-modal-target='" . $row["Modal"] . "' class='movieimg'>                       
                                        <img src='" . $row["img"] . "' alt=''>
                                        <div class='noidungVGB'>
                                            <h6 class='tuadesea'>
                                            " . $row["Tenphim"] . "
                                            </h6>
                                            <p class='mieuta'>
                                              " . $row["Nam"] . "
                                            </p>
                                        </div>
                                    </div>";
                                    }
                                    ?>
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
                                    </a>
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
                            <li><a href="/Php/Mylist.php">My List</a></li>
                            <li><a href="/Php/Game.php">Game & Update</a></li>
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
    <!-- END NAV -->
    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <video src="/video/VideoBackgroup_Trim.mp4" autoplay="" playsinline="" muted="" loop="">
                        <source src="movie.ogg" type="video/ogg">
                    </video>
                    <div class=" overlay">
                    </div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABZxLPOUeK0H1f--inf57Y5LMpIlt2QmgOTD9fpY0GbS4Y-TI2XEYIQ9kPnGifZmVeS-EwdvNQxKYApukBjp42U8MQcPhPdeTpsHvfWty-u6L68rXGsAi0ox5rx0HrHVNt_rU2hcMNfCDLvvHERpCvl2kmrjn0zKddAV4VVPq_3bffBPoaqiJ5w.png?r=8cc" alt="">
                            </div>
                            <div>
                                <h2></h2>
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span> 2020 &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-clock"></i>
                                    <span> 1h 45m &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-high-definition"></i>
                                    <span> 1080p &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <span class="v">&nbsp; 7+ &nbsp; </span>
                                </div>
                                <div class="movie-info">
                                    <span>|</span>
                                    <span class="c">Anime Movies</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                A peculiar girl transforms into a cat to catch her crush's attention. But before she
                                realizes it, the line between human
                                and animal starts to blur.
                                <br><br>
                                Starring: Mirai Shida, Natsuki Hanae, Hiroaki Ogi
                            </div>
                            <div class="item-action top-down delay-6">
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'netflix');
                                $sql = "select * from phim where ID = 1";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                ?>
                                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>" class=" btn btn-hover">
                                    <i class="fa-solid fa-play"></i>
                                    <span>Play</span>
                                </a>
                                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>" class="btn btn-hover">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>My list</span>
                                </a>
                                <?php
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <video width="" src="/video/y2meta.com-Show của Đen (Trailer)-(1080p).mp4" autoplay="" playsinline="" muted="" loop=""></video>
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABdDtgg7RSn3JDTTnEjyA8FGNhbEeoC6WdkGkWFUKDUxAiySHcnBohlABkxRV6tQnDUus9deS7fPmNXZnP9lS7vfnHGxUVXZ828xFwsCBs1qn.png?r=e79" alt="">
                                <br>
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span> 2019 &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-clock"></i>
                                    <span> 1h 23m &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-standard-definition"></i>
                                    <span> 1080p &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <span class="v">&nbsp; Tất cả &nbsp; </span>
                                </div>
                                <div class="movie-info">
                                    <span>|</span>
                                    <span class="c">Concerts</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Kỷ niệm 10 năm làm nghề, rapper người Việt Đen Vâu trình diễn trong liveshow hoành
                                tráng ở Thành phố Hồ Chí
                                Minh cùng ban nhạc sống và các khách mời đặc biệt.
                                <br><br>
                                Starring: Đen
                            </div>
                            <div class="item-action top-down delay-6">
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'netflix');
                                $sql = "select * from phim where ID = 2";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                ?>
                                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>" class=" btn btn-hover">
                                    <i class="fa-solid fa-play"></i>
                                    <span>Play</span>
                                </a>
                                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>" class="btn btn-hover">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>My list</span>
                                </a>
                                <?php
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
                <!-- SLIDE ITEM -->
                <div class="hero-slide-item">
                    <div class="t1">
                        <video width="" src="/video/Best Cinematography Of Spirited Away 2001 (Japan)_Trim.mp4" autoplay="" playsinline="" muted="" loop=""></video>
                    </div>
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABaatU6OsPWoWTb56THpchKlThzK-94z0pWaWRGrXa7E62XdpdAcA4NgKgphQveb8LBLXinxoN4nCJm1kw-qvM5HyOGsr7td12Z8nNADRPEWC.png?r=35b" alt="">
                                <br>
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span> 2001 &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-clock"></i>
                                    <span> 2h 5m &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-standard-definition"></i>
                                    <span> 1080p &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <span class="v">&nbsp; 13+ &nbsp; </span>
                                </div>
                                <div class="movie-info">
                                    <span>|</span>
                                    <span class="c">Family Movies</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Chihiro lạc vào thế giới ma thuật nơi một phù thủy cai trị – và những ai không tuân theo
                                mụ ta sẽ bị biến thành động
                                vật.
                                <br><br>
                                Starring: Rumi Hiiragi, Miyu Irino, Mari Natsuki

                            </div>
                            <div class="item-action top-down delay-6">
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'netflix');
                                $sql = "select * from phim where ID = 3";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                ?>
                                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>" class=" btn btn-hover">
                                    <i class="fa-solid fa-play"></i>
                                    <span>Play</span>
                                </a>
                                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>" class="btn btn-hover">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>My list</span>
                                </a>
                                <?php
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide-item">
                    <video width="" src="/video/Howls Moving Castle Trailer_Trim.mp4" autoplay="" playsinline="" muted="" loop=""></video>
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABcjsBWtoyoB-yq0md3IR3YX1sC6ZeMRzvoth43yoptKiCtpVqPu-ZFv4kE-L77LpSjbcCPW2ZW8OYweKwUoe__g8v90yTnhm47a1o2WvvMU8.png?r=8b5" alt="">
                                <br>
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span> 2004 &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-clock"></i>
                                    <span> 1h 59m &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-standard-definition"></i>
                                    <span> 1080p &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <span class="v">&nbsp; 7+ &nbsp; </span>
                                </div>
                                <div class="movie-info">
                                    <span>|</span>
                                    <span class="c">Movies Based on Books</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Sophie vốn dĩ làm việc tại cửa hàng mũ do người cha quá cố để lại. Cuộc sống nơi thị
                                trấn buồn tẻ cứ thế trôi qua trong
                                lặng lẽ... cho đến ngày cô bỗng biến thành bà lão.
                                <br><br>
                                Starring: Chieko Baisho, Takuya Kimura, Akihiro Miwa
                            </div>
                            <div class="item-action top-down delay-6">
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'netflix');
                                $sql = "select * from phim where ID = 4";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                ?>
                                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>" class=" btn btn-hover">
                                    <i class="fa-solid fa-play"></i>
                                    <span>Play</span>
                                </a>
                                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>" class="btn btn-hover">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>My list</span>
                                </a>
                                <?php
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="hero-slide-item">
                    <video width="" src="/video/Flavors of Youth.mp4" autoplay="" playsinline="" muted="" loop=""></video>
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABQxG_E-woOH1tbj7VEM9zasJvFiageaJt5ZcDj2OCrp5b8D4iokQ3Sm2swc4RVjHwXcKkodBCQnMnQo1zAzeAmHiSg2uR9e_VjMJD-4o50T36tNrEnhX8KjoJlilJDhdqvv4zCcVcUN6eFWHsPafy6SD9oMVtr_mw6z-NWwPWuU3fFsJ_VCovw.png?r=632" alt="">
                                <br>
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span> 2018 &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-clock"></i>
                                    <span> 1h 14m &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-standard-definition"></i>
                                    <span> 1080p &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <span class="v">&nbsp; 13+ &nbsp; </span>
                                </div>
                                <div class="movie-info">
                                    <span>|</span>
                                    <span class="c">Anime Movies</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Memories in a bowl of steaming noodles, a fading beauty finding her way and a
                                bittersweet first love -- all in these
                                stories of city life in China.
                                <br><br>
                                Starring: Taito Ban, Mariya Ise, Minako Kotobuki
                            </div>
                            <div class="item-action top-down delay-6">
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'netflix');
                                $sql = "select * from phim where ID = 5";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                ?>
                                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>" class=" btn btn-hover">
                                    <i class="fa-solid fa-play"></i>
                                    <span>Play</span>
                                </a>
                                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>" class="btn btn-hover">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>My list</span>
                                </a>
                                <?php
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide-item">
                    <video src="/video/My Video.mp4" autoplay="" playsinline="" muted="" loop=""></video>
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABVU15PwrZIAWOEYHxexkYUvatuQDzR0z85sjhtQZBRFoaQDygbDswH4RMA2iXpPGtGvenpJCNBqqYmVUMna1IQu0KNhE-Sx6xIq-yl2ebBQn.png?r=a93" alt="">
                                <br>
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span> 2019 &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-clock"></i>
                                    <span> 1h 56m &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-standard-definition"></i>
                                    <span> 1080p &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <span class="v">&nbsp; 7+ &nbsp; </span>
                                </div>
                                <div class="movie-info">
                                    <span>|</span>
                                    <span class="c">Phim chính kịch</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Đi qua những đau khổ và phản bội, mối tình đơn phương của Ngạn dành cho cô bạn thân
                                thời thơ ấu Hà Lan kéo dài cả
                                một thế hệ trong bộ phim siêu lãng mạn này.
                                <br><br>
                                Starring: Trần Nghĩa,Trúc Anh,Trần Phong
                            </div>
                            <div class="item-action top-down delay-6">
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'netflix');
                                $sql = "select * from phim where ID = 6";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                ?>
                                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>" class=" btn btn-hover">
                                    <i class="fa-solid fa-play"></i>
                                    <span>Play</span>
                                </a>
                                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>" class="btn btn-hover">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>My list</span>
                                </a>
                                <?php
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide-item">
                    <video src="/video/y2meta.com-Street Food _ Official Trailer [HD] _ Netflix-(1080p).mp4" autoplay="" playsinline="" muted="" loop=""></video>
                    <div class="overlay"></div>
                    <div class="hero-slide-item-content">
                        <div class="item-content-wraper">
                            <div class="item-content-title top-down">
                                <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABQt0KiQC0TQGW0qrzV2d8O1thMbLaQd9XPM25X51jN74QzoN-5I_T0vysZPQAeRtDVbYS9vnxB-xIH815Iphwm-x32wWeAcJYCd56wXCA1SKYdlLyug3qqQ4CygHv2LHMEr0sHVvi0EwW56IC7Hn2wu3krpDuucTk6mv_ZXTTxpNADQ2FMtJSg.png?r=adc" alt="">
                                <br>
                            </div>
                            <div class="movie-infos top-down delay-2">
                                <div class="movie-info">
                                    <i class="fa-solid fa-calendar"></i>
                                    <span> 2019 &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-clock"></i>
                                    <span> 1 Season &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <i class="fa-solid fa-standard-definition"></i>
                                    <span> 1080p &nbsp;|</span>
                                </div>
                                <div class="movie-info">
                                    <span class="v">&nbsp; 7+ &nbsp; </span>
                                </div>
                                <div class="movie-info">
                                    <span>|</span>
                                    <span class="c">Food & Travel TV</span>
                                </div>
                            </div>
                            <div class="item-content-description top-down delay-4">
                                Hãy dấn thân vào hành trình khám phá văn hóa toàn cầu về ẩm thực đường phố và câu chuyện
                                ẩn sau những bàn tay đã làm nên
                                bao món ăn đậm đà hương vị.
                            </div>
                            <div class="item-action top-down delay-6">
                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'netflix');
                                $sql = "select * from phim where ID = 7";
                                $result = $conn->query($sql);
                                $row = $result->fetch_assoc();
                                ?>
                                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>" class=" btn btn-hover">
                                    <i class="fa-solid fa-play"></i>
                                    <span>Play</span>
                                </a>
                                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>" class="btn btn-hover">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>My list</span>
                                </a>
                                <?php
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SLIDE ITEM -->
            </div>
            <div class="rowslider">
                <div class="headerslider">
                    <h3 class="title">Phổ biến trên Netflix</h3>
                    <div class="progress-bar"></div>
                </div>
                <div class="noidungslider">
                    <button class="handle left-handle">
                        <div class="text">&#8249;</div>
                    </button>
                    <div class="slider">
                        <img data-modal-target="#modal41" src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABU8yJQlAwg4-Xq8QlsZ0HdTjMcrxs8hMn2FRFr4qXazfF8I5_wJ0KH3nwc9PkjsqRd8jHb92rvl0OVbZRnQf86DGa5p2emwakP55.jpg?r=ac4">
                        <img data-modal-target="#modal42" src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYXGPYGoDroj8abPVUbBI1gXwRlYpwu6gA-oTFQguSAYTboaGdyud7b7jSiz3Nzq5xPbkAS7lmmvGbj96kDGv2kaQrI9eJfpcPUh.jpg?r=cc3">
                        <img data-modal-target="#modal43" src="https://occ-0-325-2774.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfO7jyEbj8cMVF8aojbkxhH3FO2vuU4SmKg9lfR6pURdbaQHJTmWSKaUVvVNFjMx2RWnmAG2XuGJ8UXo_a3bRrwb_cuEzN-x9SoXmHbMjOGHhD7Uvtds-MPzop9UaTdiM1MK.jpg?r=ce7">
                        <img data-modal-target="#modal44" src="https://occ-0-325-2774.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABREBH9UH7XI5JmiFsoWWPZjs-ZUccwlvu3rcOGGosENO7hLGooadW4kgTWSs0LRWz4jTDHYwE-NAhfM9Pn_3boe1ylLSRWLLzNYpyHY1SK3RJPORC_cm-hHVYzOGBn3v24Hu.jpg?r=89a">
                        <img data-modal-target="#modal45" src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVoQTOQDV7ZjUAWBUe0ZBSA_PbIZrIIZlbwlHGgclfT-M3L4KWaHGDg68bE8dQRzh2Kx2C9y3JqQLcWGAB1euZBXyINFgCYlu5j1.jpg?r=597">
                        <img data-modal-target="#modal46" src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABb3xDmlpJOazzBbwuG4KaQLuW_ux--ykmsfBqMYY9JJ0FWSiJHdzQN3u93eOBGnI4ziy2Rt-XNPAHTauslcciuCGaLJAP3VNcULi.jpg?r=3b2">
                        <img data-modal-target="#modal47" src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQHVhUDV5WYl-bNoTI6M6XQsFR1zJBlmUmOXtsV6asjtM5gyRVxHdSBiMO_KVbbtFfpi05UHO0wKbSMZsa0MUu3TxmSZu-YKDrV9.jpg?r=2b2">
                        <img data-modal-target="#modal48" src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABT-IVHXwTSXjuYeuCJOe0W6n2d4ff4SetccD3PAmrRit-1SAqMtRXqNtB9a66DGPI0h58-u5GSnnVUy0ToN6MDYRuI7zkqh2hX-bvex1MVLTWw5qJKFz4f3ao4O-pOZGpl_y3w.jpg?r=58c">
                        <img data-modal-target="#modal49" src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfp3hWvYerE0NkatzBw3zFyoiWI0-vQWfWQlm6n6TuIMDCYt43MRi0NPC0mJ-BYQWigCwhlkJ8yJOFcK7jT8f0kw9WVKcqerdjmZ.jpg?r=2e8">
                        <img data-modal-target="#modal50" src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQwo-JXqLcH7-00PSMkMpI0kKNDOO2Ols9jNDkRcK7PWwe6Kn8j5wvzbWHUmw0PkgFFJ_io7rYDi7iW6PqxSdMbxfBmLmMEUX4I8.jpg?r=f20">
                        <img data-modal-target="#modal51" src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWkZTZQNn3TP2JbGGaezRSLs3kbYfj1zlagfbuJuRrHFD9F2S9HMRZqpTv7Q4IJvmW8ERw-aWH7i1DT-VSj9SJ0q6gSSdEpN74hsIttWV7NMkQyex70kvWvjYJeaVn_VSLJ1ig.jpg?r=91a">
                        <img data-modal-target="#modal52" src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVbByc8KsYyml4i8Ef3723IA-sZPi33WQy76rjY7Q3ymi34NVnP5bpbPUwUkpgzu4FsoGdt87mqnFQCL72_QeouTg5cLAwd7hWY.jpg?r=303">
                    </div>
                    <button class="handle right-handle">
                        <div class="text">&#8250;</div>
                    </button>
                </div>
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <section class="bangchuyen">
            <div class="tuaimg">
                &ensp;&ensp; <span class="phimbb">Phim hay trong tháng</span>
            </div>
            <div class="scroll-holder">
                <div class="scroll-tray">
                    <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABREBH9UH7XI5JmiFsoWWPZjs-ZUccwlvu3rcOGGosENO7hLGooadW4kgTWSs0LRWz4jTDHYwE-NAhfM9Pn_3boe1ylLSRWLLzNYpyHY1SK3RJPORC_cm-hHVYzOGBn3v24Hu.jpg?r=89a" />
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYFHfo5_sUZH4OBFVksJm3Vkd1kyPfnZmVZMyGsjZT5VyzdETQp8Yrs5A9LhcS7bJCaCaPlCPODKMGK5iTcqv2NwASsqmmgWePU.jpg?r=125" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABf6eb4uMwT4OzC1znjU8BH1E_X30MO2Xgr5Za5baQ8pMS7LfsvjQDoUdKYdWl7dVWDg9-COnoSvFJSRWUREgnYDKfsazgzU835V7xz78wHr6u-EPn_OWaNekLv9QbGi9gOA5.jpg?r=b21" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVtwD6d3BNttIXlyX9FMkggFYAhJWBcezEmQD_8dYyTelyopJCjJYt0McAMBB5_yY6sXo-YYB3p2x0TF_Nmg1254vH0P0Vb50Xc.jpg?r=782" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVuQ9kaF0_aaAPMks9RhViFBB3hYSrv-S_xY87WE4STOQcFA47UBi7W08ifsnz-WjCeEf4Lq_HqRf9WbeOT2DjLNsu7UtxNG-9E.jpg?r=855" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXRMlRXeg6VhCTZSwrofajihtQ-zVyxbwfbh1sqVB8Pu8EDDdxj4CmsyQctSa48E6etn3ge0rlOLSyhnR3iOfhKN_6WLaYM6Xto.jpg?r=7f9" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABciZjJDTDv8RTvAgRK1gM91emIaW2rYqyqeQzTcZhCGMZJ0lUfWjpyqDxd79UMA3BL_fV6eViYvlO7rLOn5tGagTRY6YRSR60is.jpg?r=9d8" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWaFp9AawSjPO49lUtwg6V7Pjt8wsMUPxhN7lfePszpDsMHOFdS7awtFkYXFfibkiDwZBZQ7Xf-_i63PPU87p4rEpBYfhzwv76V5rCzMO4UiSFtrCzscfTSTVQELLq5DQ8pa.jpg?r=359" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZFVK9UvYNvGev-Vlhd69hTsrDxTYZ9Q_swvwehySuVJdCn1h_OgK7MgnSOvK31MLnxIm6TxWKnqCDkXTakWQJi_NfVEXLXS2ws.jpg?r=8b0" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYuhPd9JMLPFWp103J-geOAMaOO00uvURyAs34tfBqw7rZtvZnUqp3dG5mSpr1K9jtt31MN-0KzXSj3_sR5r_fQnSYO-ISK6eCg.jpg?r=cfd" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABehY9tnu9KbVC0XZHVy6RxEBdLx7nU3E9TD1FLxFKeD69kntnJ8NaAJINCi3E52_BMNWt0gypzbZyYbHZ7PWNl8GjUARwadAsr8.jpg?r=d31" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcrJ_EfRn-7uzTjwbqEi7nU1nm5UGGgFw5b9jBbUaFNu0DjPNpq9CAMWmjo4zIKIjHw3olBCEq0h4pbISqFqNdyLJbkXGiM9lIY.jpg?r=0d2" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABaxZ4rjtnFGwdwxXIGXpntmWtgntR9sbPxhlco_6hZdVwF57XvQVpPRlHQqJMzu0EgI0RxTi26hHT8M3ur6-b_OGQX30vESGJ1M.jpg?r=28f" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYqsNz8SW2wJCHP1mRMeFdntdvvEcQSpL3FJuDL9Z4yh0eVwlO_p-lpF-EznLVn9Mq4ICaVv-IKAc5CqiSO1Y0uU9CEBsWyPWEY.jpg?r=e68" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXwP_djri4cK1gdY8XfhUuQBb9HyRQmR2TPZUxDIeZBwIflTpolLlZvKCEutFUHJ4ZO37oWy4F6su2aRhwl1h2KHT_gG5Dl4kkiAy5zC234aslS0ClpbBSuyDPLr1lyhH6py.jpg?r=c2b" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXfs9NhGvZg328bM4ZXGoCVY1kqDxaZStqSNEloK_mi_0AEmAvtRzYec-DB7P95P49qGAvVzno2kWk2tyHY3To0VTJwienJavxKbuRq54i9luB-PO_YvspLu3efjDI6nMmgs.jpg?r=4bc" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABT2Uk9GogBQcDyZsrWCWz4HgolUQhFgR504bSjMmqQwjTdPVhvjmHVTa1PDBm_E3uTEBGMXnlx6pHWBbgoEemVnDkwvrjaW0HOu9VWbjDc7GyZppaXSi97rMQvC5cZ-Z4h5q.jpg?r=e54" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABem_5e4Pn8D4cyTElstJQoFMGcYMPBuRp4IDhquQJRjGyb-RlghRbu39P3BpZM0n3fEWd0nNFH5qwQgb99SVYf5pzEDMW9ids93uiig7O6X4e1BDil9v-i1_whjOyf_QKHdz.jpg?r=c84" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZe2Sv4i5SW1-YohG-R44IMd1RB0bd9spxR_DtRP1jf1W1doZ4nrlz9Kwsf9avf4IsEIzhmN4bhN3Q3tG7Q8z9GnSAd4ognS91U.jpg?r=fe4" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABR5ZNUwjLS16gVBpUwfB893Gooh1g2a2H0qH0lycjzxf_SVtujhY3nT69q4FaGox8IIfD2KYd402Gmgly6zwPHeclphkSRheQzM3U6_PHkzve4KUnsO_GrQR7_zOCQIxnBwR.jpg?r=13f" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfO7jyEbj8cMVF8aojbkxhH3FO2vuU4SmKg9lfR6pURdbaQHJTmWSKaUVvVNFjMx2RWnmAG2XuGJ8UXo_a3bRrwb_cuEzN-x9SoXmHbMjOGHhD7Uvtds-MPzop9UaTdiM1MK.jpg?r=ce7" />
                    </div>
                </div>
                <div class="scroll-tray">
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWOHi9ZLzJadZ28A9vRbOEWm7CQocEnoUAiH_5A9Ks16S-GHo3sL_XIUHc5fwga-RGDuaTSO_9d0sWXeGntj8K-ONMsa2zNzqm815ppWPaOBxudJFifSoTe3xEp3_Azpcrta.jpg?r=897" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVuTeRKN0qXthWcJPzpb9thbgmE_UAuj1wf32J-UbVK2vPjXRzxkohwNimJo2r2ZKO0zjHjDpmTZMj8loukFW_Qz9m7ri5ynyHpHVlnBkY87QAv7RwrIvt5XFWMzP46PiELx.jpg?r=fff" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVlAF3tgIm9lO6XT0RK1XBuf8D95szVfdlukMgG5AZlWkptmdNTMZjus8Qol-AJX38UEIogdaV0SmoJMKw-nxOoTMsr9a-LVJyU.jpg?r=089" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbX2KLd5MnS8pcX-wNpynxN-sl-NSQOIFDx-JBmGudkrM23uSOk6Ilxr8YadDdE25m7z-ALNMj-2skbyxZn9oz6YfAAyDItOvJM.jpg?r=024" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcj3x_LjJ7o9ylRCBEZ4YSCC3TKEZDW0ktezTHEWLOiv9U88yPyWvJg9qzpJBRItMFI0ptc5EVpWJAdd4BMn-ruUi4O9kXg00e8.jpg?r=0e6" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRrlw4_6rpp6NaewmyvMmelqIJBv8yT69gN7N-adEd3G6-3pw9CDWYW9tVPB7DxxejUgKEhKT84u0aae-ALuMK7FnO2e5fvQJ_Y.jpg?r=b7d" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZ-52SG9xz1bYQ92aQRrdAkjkmRg9rxhKCNXvUwkMBTt1TI2GZzYv6IlXuSn3eOSqfa57hwVcD0EY7wysKt6LVlGCepMh8PImxdRNrd5xdf04tqBro1FOINdLFlcZt-e2B_E.jpg?r=4bd" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcI3IYkMUv3Bge6TXoMDxwr02bmXu_n7Kxx80dhWyPSQGXX0QOFJA3P-kgGlaYdX-tqjB16Df8gBgo2copJnN43sKtCA-kyybrA.jpg?r=935" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUQuckdILU1r97XcQBhaXfJqbJ96QWuCWcwfhhtCfDPKt3Twg2hP5aYNK1xh5s_z4lZ_hmdc9gi_rg7Tm0wFTv9Xeu163npNjcs.jpg?r=16d" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQpDkodrf-Y5_KJvb8dA-YzYdTOvBrpj7zSFDuvpP_77N-q87e5oSDZ3fU5B92Zl5RfU0mDGO1nrHD23a9-lU6Y0GS77FfPSrTc.jpg?r=856" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfjR8yi8ffVxvxnpXUH3cWmBrKjVgvhdw_MoEIqt34NrXop3JZXX5mrHZ-l29cBVchtvEmBXLkH1-yNYqRMCCWmhUZpO9aKO8MU.jpg?r=7a7" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbTk0qDPHV9ga01Hg5hxtYjuTt6xuLyBPV7wjR7B4J7lQXDX9rY3zp-dmJJEWYbELKXtaruKEUquj3vv0DmxjZHUck3fJUq3fGwc.jpg?r=97d" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcz_tymwVgzp_rzv-ZkSZ6HaaIbkvEhbDfncvveBIAU2hmf0DAu5l-IQ_PL_WGwG2dWHsauy4_HMOwGOLLsFvJcwtg02vOCQxRM-.jpg?r=024" />
                    </div>
                    <div>
                        <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZIPW0LupXXDbyVh8J7JzPFwkdIvXrCPaXlHGmXwLuehSXmGCMdXp12anl8E8YllHg8uXQBLFDdq7GDiuUtFUhw4FazeYzZahMZyZrf_w7ZpNBwNs_Z4ZDIzaY0kVl0FjkBeuw.jpg?r=b4b" />
                    </div>
                </div>
            </div>
            <div class="tuaimg">
            </div>
        </section>
        <br>
        <section>
            <h2>Trailer phim mới</h2>
            <div class="slider-outer">
                <div id="slider-01" class="slider-mid">
                    <div class="slider-inner">
                        <div class="nav-left" onclick="scrollSlider('slider-01','l')"><i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="card">
                            <div>
                                <img src="https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYrpvhQ4M963tisTKqWfBi3DX0Hd6A4_tNRKYpefkiPrgT53FTAZY-NoR7KtVjyooMp6mrHERhzayh_RbVVPQdCL3B_8.jpg?r=587" alt="yourname">
                                <div data-modal-target="#modal53" class="chuan">
                                    <div class="chuantext"><i class="fa-solid fa-play"></i></div>
                                    <div class="chuantextp">Xem ngay</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbUGQN5OSeM2hNdm5A432q298sLMFacqLYRctEkuUO9VxguQ4P8kzK6Kj1N_QWbEJauwtpD-HQD34o6gN1isfG1NickSHxbgUxuRpwjDy5IDO_jTgpZ2U8OBNZJNfT6I1-Eq.jpg?r=411" alt="">
                                <div data-modal-target="#modal54" class="chuan">
                                    <div class="chuantext"><i class="fa-solid fa-play"></i></div>
                                    <div class="chuantextp">Xem ngay</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="https://www.flixwatch.co/wp-content/uploads/80161371.jpg" alt="">
                                <div data-modal-target="#modal55" class="chuan">
                                    <div class="chuantext"><i class="fa-solid fa-play"></i></div>
                                    <div class="chuantextp">Xem ngay</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="https://gstatic.gvn360.com/2022/07/d463273c8e24e4933fa8a556a4f6ccb2.jpg" alt="">
                                <div data-modal-target="#modal56" class="chuan">
                                    <div class="chuantext"><i class="fa-solid fa-play"></i></div>
                                    <div class="chuantextp">Xem ngay</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="https://www.bt.com/content/dam/bt/portal/images/articles/tv/tv-comedy-netflix-man-vs-bee-new-keyart.jpg/jcr:content/renditions/landscape-desktop.764.430.jpg" alt="">
                                <div data-modal-target="#modal57" class="chuan">
                                    <div class="chuantext"><i class="fa-solid fa-play"></i></div>
                                    <div class="chuantextp">Xem ngay</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="https://www.elleman.vn/wp-content/uploads/2021/07/09/198753/phim-Godzilla-Singular-Point-he-thong-quai-vat-kaiju-elle-man-1.jpeg" alt="">
                                <div data-modal-target="#modal58" class="chuan">
                                    <div class="chuantext"><i class="fa-solid fa-play"></i></div>
                                    <div class="chuantextp">Xem ngay</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="https://gamek.mediacdn.vn/133514250583805952/2022/2/21/photo-1-1645443667443469118392.jpg" alt="">
                                <div data-modal-target="#modal59" class="chuan">
                                    <div class="chuantext"><i class="fa-solid fa-play"></i></div>
                                    <div class="chuantextp">Xem ngay</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbZoXt4WSEYnm-q7Ct-Z2q8Ll2fCqT8G_d-9F-DTnPftTlKg-QJKr3Kfjyl2LA_Ex2SdLcrQLAHZs9idLeVFdOlnfjDoWqJ-a2GB6Y1dcyc14Y89AXIbUN9Zof1f8PeywGCGgA.jpg?r=81a" alt="">
                                <div data-modal-target="#modal60" class="chuan">
                                    <div class="chuantext"><i class="fa-solid fa-play"></i></div>
                                    <div class="chuantextp">Xem ngay</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div>
                                <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXzRtGUPBbNlIRCD7TPPr8zwYzs_A5KYuPTVYnod9iTyco-hsDTKKIuPxmjDZjpFQNC4py428CQDWYdmAqvTkpjzPdx1KSlcMTehNk6UyKQdmXqhDYBlEVeCXAJPURQBEMWp.jpg?r=ef8" alt="">
                                <div data-modal-target="#modal61" class="chuan">
                                    <div class="chuantext"><i class="fa-solid fa-play"></i></div>
                                    <div class="chuantextp">Xem ngay</div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-right" onclick="scrollSlider('slider-01','r')"><i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
        </section>
    </div>
    <!-- END HERO SECTION -->
    <!-- Chọn thể loại -->
    <div class="body">
        <div class="gach"></div>
        <div class="luachon">
            <!-- filter Items -->
            <nav class="navchontheloai">
                <div class="luachonnho">
                    <?php
                    $conn = new mysqli('localhost', 'root', '', 'netflix');
                    $result = $conn->query("select * FROM phim");
                    $rows = mysqli_num_rows($result);
                    echo "  <span class='chontheloai kichhoat' data-name='all'>All (" . $rows . ")</span>";
                    mysqli_close($conn);
                    ?>
                    <span class="chontheloai" data-name="Anime Movies">Anime Movies</span>
                    <span class="chontheloai" data-name="Movies">Movies</span>
                    <span class="chontheloai" data-name="TV Shows">TV Shows</span>
                    <span class="chontheloai" data-name="Kid & Family">Kid & Family</span>
                    <span class="chontheloai" data-name="US Movies">US Movies</span>
                    <span class="chontheloai" data-name="Anime Series">Anime Series</span>
                </div>
            </nav>
            <!-- filter Images -->
            <div class="gallery">
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo " <div class='image' data-modal-target='" . $row["Modal"] . "' data-name='" . $row["Theloai"] . "'><span><img src='" . $row["img"] . "' alt=''></span></div>";
                }
                ?>
            </div>
        </div>
        <!-- fullscreen img preview box -->
        <div class="preview-box">
            <div class="chitietShow">
                <span class="titlesxc">Thể loại: <p></p></span>
                <span class="icon fas fa-times"></span>
            </div>
            <div class="image-box"><img src="" alt=""></div>
        </div>
        <div class="shadow"></div>
        <div class="gach"></div>
    </div>
    <!-- TOP MOVIES SLIDE -->
    <div class="top-movies-slide">
        <div style="margin-left: 15px;" class="section-header">
            Anime được yêu thích
        </div>
        <div class="owl-carousel" id="top-movies-slide">
            <!-- MOVIE ITEM -->
            <!-- Demon-salyer -->
            <div class="movie-item1">
                <img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfoTBFlJeXrirqo25Gs8ECUE9WlbBdkzVX5jVdFJw8L9pgxLz_KBdyP9_hAnos6-bHRdTqLDOi5kBCkCfPPsu8i5OSJOLzvU3P6J.jpg?r=70d" alt="">
                <div data-modal-target="#modal" class="chuan">
                    <div class="chuantext"><i class="fa-solid fa-circle-info"></i></div>
                    <div class="chuan3textp">Học viện diệt quỷ: Phim ngắn</div>
                </div>
            </div>
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <!-- Doraemon -->
            <div class="movie-item1">
                <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABd_fESf5pqRH9t4Ynv4OsWrvZJiZhmAwKdhEsyRDVJJTK6npZyS6X0aXSGX8vD3atMyBTboez9akEZOU6-GhIzLvMaLJ5AFvg_zm.jpg?r=bcb" alt="">
                <div data-modal-target="#modal1" class="chuan">
                    <div class="chuantext"><i class="fa-solid fa-circle-info"></i></div>
                    <div class="chuan3textp">Stand By Me 2</div>
                </div>
            </div>
            <!-- End doraemon -->
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <!-- Gundam Mobi Suit -->
            <div class="movie-item1">
                <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUnCUlhfJ_0yrHiFtebFRsjmWJi2_L9NCpLP0_XF5E1VAQSM0G6lYTpV_NdbXR32tP_JBJPyWjTxmon15AfOCocpBdeAXpEQd9sT.jpg?r=dcb" alt="">
                <div data-modal-target="#modal2" class="chuan">
                    <div class="chuantext"><i class="fa-solid fa-circle-info"></i></div>
                    <div class="chuan3textp">Gundam Mobi Suit</div>
                </div>
            </div>
            <!-- End Gundam Mobi Suit -->
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <!-- Nausicaä -->
            <div class="movie-item1">
                <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRnEiH33J-itCJMW3mqGvSYcrkzW2HZSIVcrsseATr9cK408GHs4gxsjo4mnWqUf3NphzC5lG7IsJX54hBfKFZxt0ySzyRrJIT3Z.jpg?r=17d" alt="">
                <div data-modal-target="#modal3"" class=" chuan">
                    <div class="chuantext"><i class="fa-solid fa-circle-info"></i></div>
                    <div class="chuan3textp">Nausicaä</div>
                </div>
            </div>
            <!-- End Nausicaä  -->
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <!-- 5 cm trên giây -->
            <div class="movie-item1">
                <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUbOw2xy9ap-kXT0gzuVadyO0h22g9_TNFsLziiozha1TRxMU0QSU8NIHvCKlLBb7iwkugQUrrq76wcdtADnllf2JAi5Xt9j0_gJ.jpg?r=4b3" alt="">
                <div data-modal-target="#modal4" class="chuan">
                    <div class="chuantext"><i class="fa-solid fa-circle-info"></i></div>
                    <div class="chuan3textp">5 Centimet Per Second</div>
                </div>
            </div>
            <!-- End 5 cm trên giây -->
            <!-- END MOVIE ITEM -->
            <!-- MOVIE ITEM -->
            <!-- Tales -->
            <div class="movie-item1">
                <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABaHB5N1j2-sNuN7x7BmKcwxM4LbEDoDj1_aky2hpM8VJ1dkkeraG4Ai6fr0OAH7tt5StkGfdCqsaDgDzUT7SRMCaj8SyxV8tAkCw.jpg?r=3e0" alt="">
                <div data-modal-target="#modal5" class="chuan">
                    <div class="chuantext"><i class="fa-solid fa-circle-info"></i></div>
                    <div class="chuan3textp">Tales from Earthsea</div>
                </div>
            </div>
            <!-- END Tales -->
            <!-- END MOVIE ITEM -->
        </div>
    </div>
    <!-- END TOP MOVIES SLIDE -->
    <!-- Ẩn hiện thông tin phim -->
    <!-- Cho Demon salyer -->
    <div class="modal Dem" id="modal">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABbZ2kLOUNq0xnHMLTsuE5S7UEX6qhPG2_QmLbwrOMHftmzBYgDWiclczraIHpENnZwD1jDIc1Z-lwdG4woGSM5-SqWcSiYWf6Usgn9UVB3Ex.png?r=f39" alt=""></h1>
                <p class="CTV">2021 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;|&nbsp; 1 Season
                    &nbsp;|&nbsp; Anime Series
                </p>
                <div class="VTV">
                    Trong các tập phim ngắn lấy bối cảnh ở vũ trụ thay thế này, các nhân vật của Thanh gươm diệt
                    quỷ bày đủ trò tinh
                    quái khi theo học tại học viện Kimetsu.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Hanae Natsuki,Kito Akari,Shimono Hiro
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 18";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Demon salyer -->
    <!-- Cho Doraemon -->
    <div class="modal Dora" id="modal1">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABcSmNX2GOH06A6c1cawgA7OaFAfm26f3PI6SaSDfdwOtY6miT3OtwClEntGu4TmSpF3lmQt0UATBc0ZLVkhSnRarRojx7ol3RnybI_mN2gI4.png?r=64b" alt=""></h1>
                <p class="CTV">2020 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;|&nbsp; 1h 37m
                    &nbsp;|&nbsp;Kid & Family
                </p>
                <div class="VTV">
                    Nobita travels to the future to show his beloved grandma his bride, but adult Nobita has fled
                    his
                    own wedding. Can he
                    ever be a good husband to Shizuka?
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Wasabi Mizuta, Megumi Oohara, Yumi Kakazu
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 19";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Doraemon -->
    <!-- Gundam Mobi suit -->
    <div class="modal Gun" id="modal2">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABTxD5IlJi7nrmq6atYN-YsXF_8Zgi9kZZoJXE5m0BqSKi2Xu8O4lWTGOTa-15zpwhnSc_jn4YKommHsPfLJAiuPuqbIGRm31CeGtHsFFIlcI.png?r=403" alt=""></h1>
                <p class="CTV">2010 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;|&nbsp; 1 Season
                    &nbsp;|&nbsp; Anime Series
                </p>
                <div class="VTV">
                    When Banagher Links meets the mysterious Audrey Burne, he inherits the Unicorn Gundam and is
                    swept
                    up into the battle
                    for space colony independence.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Koki Uchiyama, Ayumi Fujimura, Hiro Shimono
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 20";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Gundam Mobi suit -->
    <!-- Nausicaä  -->
    <div class="modal Nausi" id="modal3">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABZYJdwtQ6JRg6NTFGBSzletw1orq5PAZCZPv9tZDvVqEGi_B3oho62ruxA9HTrQquWPepvssU6wqUSCA5YzvrgNT-dsxReV-iLt60cvZ55_x.png?r=191" alt=""></h1>
                <p class="CTV">1984 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;|&nbsp; 1h 57m
                    &nbsp;|&nbsp;Kid & Family
                </p>
                <div class="VTV">
                    Facing the destruction of her planet's natural resources, warrior princess Nausicaa rallies her
                    people against an evil
                    queen's rampaging army.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Sumi Shimamoto, Mahito Tsujimura, Hisako Kyoda
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 21";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Nausicaä  -->
    <!-- 5 cm trên giây  -->
    <div class="modal fivecm" id="modal4">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABR-3JWTS1hKER4--BLAgPTk_k62NCJzJ_NdCyhApslUtzd9NIjGfzMSvN8riiFlKGhg9GpmceQ9koDVNX8FPpBF7CrPgD5_yI7ZQMMr6x1e1.png?r=48a" alt=""></h1>
                <p class="CTV">2007 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;|&nbsp; 1h 2m
                    &nbsp;|&nbsp; Romantic Movies
                </p>
                <div class="VTV">
                    Inseparable fourth-graders Takaki Tonoo and Akari Shinohara -- bonded by a love of books --
                    begin to
                    slowly drift apart
                    when their families relocate.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Kenji Mizuhashi, Yoshimi Kondou, Satomi Hanamura
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 22";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End 5 cm trên giây  -->
    <!-- Tales  -->
    <div class="modal Tales" id="modal5">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABbGUS0iypY7wwK2_imG0T4IrBwdPg1FY5G-V2zouV3enDxVcstOgvTTwRBekptRWcMkRgbgo8U-gciz_8uOeSOZcN1zSNt820jeFvJ8Uz5e2.png?r=007" alt=""></h1>
                <p class="CTV">2006 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;|&nbsp; 1h 55m
                    &nbsp;|&nbsp; Anime Movies
                </p>
                <div class="VTV">
                    As their world decays, an Archmage guides a troubled prince with a dark side on a journey to
                    find
                    the source of evil and
                    save the women they love.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Junichi Okada, Aoi Teshima, Bunta Sugawara
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 23";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Tales  -->
    <!-- Công chúa Monomoke   -->
    <div class="modal Mono" id="modal6">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABbaj1C3v9tKEEoqIiVRsHkP0K3gHUox6nc80mh2f26nTgSZTNYRxXQcMD1Z7YX45-BJIc6ajS1Cd_ALqw6QKCRThDM06SH5sbZ3ke7roDADp.png?r=173" alt=""></h1>
                <p class="CTV">1997 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;|&nbsp; 2h 14m
                    &nbsp;|&nbsp; Anime Movies
                </p>
                <div class="VTV">
                    A prince infected with a lethal curse sets off to find a cure and lands in the middle of a
                    battle
                    between a mining town
                    and the animals of the forest.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Yoji Matsuda, Yuriko Ishida, Yuko Tanaka
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 24";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Công chúa Monomoke  -->
    <!-- Movie Demon salyer   -->
    <div class="modal Train" id="modal7">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABYLkZSw0fzLpntAjdq7vx_sxcuzRP7fu-FZZpYO3MA_El4u4_RDe3P9fcyZI9wGr4jb6Xgo8cXh83X5DN3DSu62cmKEMqdMu2R1hApwMmH-q.png?r=309" alt=""></h1>
                <p class="CTV">2020 &nbsp;|&nbsp; <span class="old">&nbsp;16+&nbsp;</span> &nbsp;|&nbsp; 1h 56m
                    &nbsp;|&nbsp; Anime Movies
                </p>
                <div class="VTV">
                    With Kyojuro Rengoku, Tanjiro and the others board the Mugen Train to face a demon who traps his
                    victims in dreams so
                    sweet, they never want to wake up.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Natsuki Hanae, Akari Kito, Hiro Shimono
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 25";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Movie Demon salyer -->
    <!-- Erased   -->
    <div class="modal Erase" id="modal8">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABQsJEWClR7A8O3pA1vF_oJE8fYSvy737b3IqhT7UL1ZqnW8Axbp-xGCLj27x1lP5a4O1Jq3-co1zwhv70JY88tFPW7KX4DmUf3hCHTaqiXKt.png?r=3be" alt=""></h1>
                <p class="CTV">2016 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 1 Season &nbsp;|
                    &nbsp;TV
                    Thrillers
                </p>
                <div class="VTV">
                    Satoru Fujinuma can travel back in time to save others' lives. When he wakes up 18 years in the
                    past, he has a chance to
                    save his murdered classmates.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Tao Tsuchiya, Shinnosuke Mitsushima, Aoi Yuki
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 26";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Erased -->
    <!-- Fairy Tail   -->
    <div class="modal Fairy" id="modal9">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABY_kuvaOSscu6t3dLGO5T09hQGUo2Dl4m9BETO5x7wsdYxQMA5CDKUE3grSlJ4ZOGl0mbC8_UFYVHAv2MBfJL-L2TK60Y6r_e10QY0NJoFW4.png?r=d4a" alt=""></h1>
                <p class="CTV">2009 &nbsp;|&nbsp; <span class="old">&nbsp;16+&nbsp;</span> &nbsp;| 4 Season &nbsp;|
                    &nbsp;Anime Series
                </p>
                <div class="VTV">
                    When four young wizards team up to take jobs across the kingdom, they forge a bond more powerful
                    than any magic and grow
                    stronger with every mission.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Tetsuya Kakihara, Aya Hirano, Rie Kugimiya
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 27";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Fairy Tail -->
    <!-- My Hero Academia   -->
    <div class="modal  Academia" id="modal10">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABbnnqNE_9BWeGEEhE_LHVvu-Vtvvr2VjQBVUD2vsCE2UupfQhhAViKRemuMVDOdaDO-433H_RfrgzIsrStilVkvBzlgWSxk09tayIrbhxdfP.png?r=355" alt=""></h1>
                <p class="CTV">2019 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 1h 44m &nbsp;|
                    &nbsp;Anime Movies
                </p>
                <div class="VTV">
                    While putting their hero skills to use on the peaceful island of Nabu, the Class 1-A kids face a
                    sudden attack from a
                    formidable villain known as Nine.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Daiki Yamashita, Nobuhiko Okamoto, Ayane Sakura
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 28";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End My Hero Academia -->
    <!-- Hunter X Hunter    -->
    <div class="modal  Hunter" id="modal11">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABZDtstNkfLT-KCUcx25KC_Yyx7sby9jqAKJ04VUh1AQFOQ1vNh2ZtU9SDRX5RfjyVOPXyQjNA7tGpG8d7eotGE1yuB3A_z-j2WFMWXFPqGeD.png?r=fee" alt=""></h1>
                <p class="CTV">2011 &nbsp;|&nbsp; <span class="old">&nbsp;16+&nbsp;</span> &nbsp;| 6 Seasons &nbsp;|
                    &nbsp;Anime Series
                </p>
                <div class="VTV">
                    To fulfill his dreams of becoming a legendary Hunter like his dad, a young boy must pass a
                    rigorous
                    examination and find
                    his missing father.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Megumi Han, Mariya Ise, Keiji Fujiwara
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 29";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Hunter X Hunter  -->
    <!-- Record of Ragnarok    -->
    <div class="modal  Ragnarok" id="modal12">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABRTomxZh-VUDsitPAKbCPqLh-aV2a3uXVxPiQyj22vqOEevEdrPqfUhJrLvAMrqfmSnw7laabyNlTA1N9PmqTE1ZClNQ5Vu2rVi5pwPVYezAajHR2itKZZqWqKstGG1mEnA-n6Rk7PehSaQemd5QmC9263pEBTkheoGPaVSHxniqVBlkoYF69Q.png?r=807" alt=""></h1>
                <p class="CTV">2021 &nbsp;|&nbsp; <span class="old">&nbsp;16+&nbsp;</span> &nbsp;| 1 Season &nbsp;|
                    &nbsp;Fantasy Anime
                </p>
                <div class="VTV">
                    Before eradicating humankind from the world, the gods give them one last chance to prove
                    themselves
                    worthy of survival.
                    Let the Ragnarok battles begin!
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Miyuki Sawashiro, Tomoyo Kurosawa, Tomokazu Seki
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 30";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Record of Ragnarok   -->
    <!-- Mob Psycho 100    -->
    <div class="modal  Mob" id="modal13">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABTIFkoqEFfe06d7VguQlrmzeSRp0Sr2ru2ljej_4xMREhrcWfe0oKXBGTzDV6R8VZpgjZIwX1bdbq2foxgk7VhcPzzV9ROegfCV6RhsyjL4w.png?r=fc5" alt=""></h1>
                <p class="CTV">2016 &nbsp;|&nbsp; <span class="old">&nbsp;16+&nbsp;</span> &nbsp;| 1 Seasons &nbsp;|
                    &nbsp;Comedy Anime
                </p>
                <div class="VTV">
                    Middle schooler Shigeo looks normal, but he's secretly a formidable psychic whose powers
                    threaten to
                    break free unless
                    he represses his emotions.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Setsuo Ito, Takahiro Sakurai, Akio Otsuka
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 31";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Mob Psycho 100   -->
    <!-- SPY x FAMILY    -->
    <div class="modal  SPY" id="modal14">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABTfbCV82DkvdTRzL7SANzlCMsYR6yUU8R58qR40J1VFn9tmDVoxbw5uPaJhUZkRdM-xfNLrHTUesCPgLHbN7QJV_xVY66TvnbIfscTWk1ha_.png?r=bfc" alt=""></h1>
                <p class="CTV">2022 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 1 Seasons &nbsp;|
                    &nbsp;Comedy Anime
                </p>
                <div class="VTV">
                    A spy, an assassin and a telepath come together to pose as a family, each for their own reasons,
                    while hiding their true
                    identities from each other.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Takuya Eguchi, Atsumi Tanezaki, Saori Hayami
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 32";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End SPY x FAMILY   -->
    <!-- Money Heist    -->
    <div class="modal Heist " id="modal15">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABRYwssiYqFQk0AMTz6Sk2gJcynwEXm7Z63r-s6aIkwDimtUWoZefgzIsMjMumecjIZWEPE8uoixk_-Acjx57MGODKOw9AGpXTDdPwzwBjSTR2U4COxyFlrtRISIBmHYYtyuEUIvm__G6eMlm0HfP2gEJeq6LnU5O8cdpioXzGlMxJWq1c-qikw.png?r=768" alt=""></h1>
                <p class="CTV">2017 &nbsp;|&nbsp; <span class="old">&nbsp;18+&nbsp;</span> &nbsp;| 5 Seasons &nbsp;|
                    &nbsp;TV Thrillers
                </p>
                <div class="VTV">
                    Eight thieves take hostages and lock themselves in the Royal Mint of Spain as a criminal
                    mastermind
                    manipulates the
                    police to carry out his plan.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Úrsula Corberó, Álvaro Morte, Itziar Ituño
                    <p><span class="Chuthich">Creators:</span> Álex Pina</p>
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 33";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Money Heist   -->
    <!-- Stranger Things    -->
    <div class="modal Stranger" id="modal16">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABYO7qfxROfC2zXPyp6FeMWAmk4j4JeAJDJA23UdvSeJ2-fJYDbHwWdE24Vrgp_JFtFNzwbnCvsgBxtwlS_4F1XdTTDaXLS-BZXTXJrS80YAFSZ263hbDqFhOaRYeO8TW0g4HpLQIhTQiJ_mQXxZpYt6H5eMYdA7SFABRAlwm85DjDCXEmk-VLQ.png?r=23b" alt=""></h1>
                <p class="CTV">2016 &nbsp;|&nbsp; <span class="old">&nbsp;16+&nbsp;</span> &nbsp;| 4 Seasons &nbsp;|
                    &nbsp;Teen TV Shows
                </p>
                <div class="VTV">
                    When a young boy vanishes, a small town uncovers a mystery involving secret experiments,
                    terrifying
                    supernatural forces
                    and one strange little girl.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Winona Ryder, David Harbour, Millie Bobby Brown
                    <p><span class="Chuthich">Creators:</span> The Duffer Brothers</p>
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 34";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Stranger Things   -->
    <!-- Sing "Yesterday" for Me   -->
    <div class="modal Sing" id="modal17">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABQ3WOoeer183oBsYvJp-XqAs7HYBjyxQsumlQLOcPJXvXFX1yb-5qrR5YUMPFXjM5TCxcihkDwbN50ZYNoNYHX6PuiBO3Bi5v-HLszSsZ5JQ.png?r=82c" alt=""></h1>
                <p class="CTV">2020 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 1 Seasons &nbsp;|
                    &nbsp;Drama Anime
                </p>
                <div class="VTV">
                    A listless college grad passes the days in mediocrity. But his boring existence transforms after
                    he
                    meets a mysterious
                    girl and her pet crow.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Chikahiro Kobayashi, Yume Miyamoto, Kana Hanazawa
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 35";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Sing "Yesterday" for Me   -->
    <!-- Pacific Rim: The Black   -->
    <div class="modal Pacific" id="modal18">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABcOzRr12F3nQiOp9tqmazXVIsJT5rKdo7v2pjJxKkDuBfYl6xI0ottUQKf9Q_d0EisDpQ5zuqI_2HsqmgFvCoJdHh6hH86gKjTjUClGvcVJAtc3EAmm2-O0WUlNDlj2YEXhs5nBuA1wgBfer66ZUO3w22R3q21tV1mTmUwXZHHBYeaM1FLOq3w.png?r=88b" alt=""></h1>
                <p class="CTV">2021 &nbsp;|&nbsp; <span class="old">&nbsp;16+&nbsp;</span> &nbsp;| 2 Seasons &nbsp;|
                    &nbsp;Anime Series
                </p>
                <div class="VTV">
                    After Kaiju ravage Australia, two siblings pilot a Jaeger to search for their parents,
                    encountering
                    new creatures, seedy
                    characters and chance allies.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Gideon Adlon, Calum Worthy, Erica Lindbeck
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 36";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Pacific Rim: The Black-->
    <!-- Ultraman   -->
    <div class="modal Ultraman" id="modal19">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABVTKfeRvRm-DAitSX0LVlhIbZae6rssM2VD_Bj0pvE1RTrIhg9Gu2F_6w69VCOAipLcLDXO6aG43VZQSe1MSPTEJnmAYgydhHL5EcddOOV2_WmyVyGPvuCFbZSF0sZdX1ATabjjmLIGmox9hmAMSCNJaHKgPf__Ro9-lpOls0RfMZ3alfWY47A.png?r=30c" alt=""></h1>
                <p class="CTV">2019 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 2 Seasons &nbsp;|
                    &nbsp;Anime Series
                </p>
                <div class="VTV">
                    Decades ago, a hero from the stars left this world in peace. Now, the son of Ultraman must rise
                    to
                    protect the Earth
                    from a new alien threat.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Ryohei Kimura, Takuya Eguchi, Megumi Han
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 37";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Ultraman -->
    <!-- Super Crooks   -->
    <div class="modal Crooks" id="modal20">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABSI0Yy7QgkKbyWOAn1p_KEcmNq4c6f_p9ybqRkuWzplQbA6pPetB3fIWXEsFbFQPnPKUsKd3uiakuxwRctWZFdVRiwkFRAuQ_9DBHr7JFtuTLMifseNezjfN-jVTjUNkOQ3rAyv1aXE1QgNZQxvtlsCYoSzNgdhrzE3QC61HKzbSnbMioho8-w.png?r=661" alt=""></h1>
                <p class="CTV">2021 &nbsp;|&nbsp; <span class="old">&nbsp;18+&nbsp;</span> &nbsp;| 1 Seasons &nbsp;|
                    &nbsp;Anime Series
                </p>
                <div class="VTV">
                    Johnny Bolt recruits a group of ragtag supervillains for one last heist. Their target: A
                    ruthless
                    super-powered crime
                    boss. What can go wrong?
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Kenjiro Tsuda, Maaya Sakamoto, Hiroshi Yanaka
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 38";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Super Crooks -->
    <!-- The End of Evangelion   -->
    <div class="modal Evangelion" id="modal21">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABXq2uC47s13ciN2NiXwz23cnewV396GngA0x7Ux2UNF-Tx5WF7P-5844knKsbVZyKHAD1SKWUHIzzN-aTgApWjUeq28097Zf64wLElqFTyaN.png?r=a9c" alt=""></h1>
                <p class="CTV">1997 &nbsp;|&nbsp; <span class="old">&nbsp;18+&nbsp;</span> &nbsp;| 1h 27m &nbsp;|
                    &nbsp;Anime Movies
                </p>
                <div class="VTV">
                    Seele orders an all-out attack on NERV, aiming to destroy the Evas before Gendo can trigger
                    Third
                    Impact and
                    Instrumentality under his control.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Megumi Ogata, Kotono Mitsuishi, Megumi Hayashibara
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 39";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End The End of Evangelion -->
    <!-- Godzilla Singular Point   -->
    <div class="modal Singular" id="modal22">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABeVOG4je8dI_nTRBp2v_BH9wvhD5qwxfOrL1m5CjgCKvPt8NU8enbsP-das5-gGOAZh2bbNpxT9CEHaFC9QQpd15Ja1Zt5We_xHu-ZC0p4bi4MWCrNv3WORDavus5mhQ36kTqAZCVaRmJBdDOW8saN3EtOd2Jw3wlf04aSb5qpryckJA6CjEfw.png?r=d5c" alt=""></h1>
                <p class="CTV">2021 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 1 Season &nbsp;|
                    &nbsp;Anime Series
                </p>
                <div class="VTV">
                    Brought together by a mysterious song, a grad student and an engineer lead the fight against an
                    unimaginable force that
                    may spell doom for the world.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Yume Miyamoto, Shoya Ishige, Misaki Kuno
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 40";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Godzilla Singular Point -->
    <!-- Transformers: Age of Extinction  -->
    <div class="modal Transformers" id="modal23">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABYpAVe8hkKW8xJ016aS8XMNaOaPTFayvDeZ-kVZHS5dUSnoy8h9uOmKVdQzCmV3rQYpnCvVc7ts8mbFuoLntWZ-Wb14OhZnE1nntLSspg-QE.png?r=4ae" alt=""></h1>
                <p class="CTV">2014 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 2h 46m &nbsp;|
                    &nbsp;US Movies
                </p>
                <div class="VTV">
                    Five years after Chicago was destroyed, humans have turned against all robots. But a single dad
                    and
                    inventor resurrects
                    one that may save the world.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Mark Wahlberg, Stanley Tucci, Kelsey Grammer
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 41";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End GTransformers: Age of Extinction -->
    <!-- Spider-Man: Homecoming  -->
    <div class="modal Spider" id="modal24">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABfizSBlGBW6Nf0-g7ySmwFD5ELblPcGd_EPkpxL8BQ6no2iEAyfCAO5LFJKYX5kYBmf4JDVpShgB7_9UloKVwtegrOmUzBDrMGnVrc1CGHT5.png?r=441" alt=""></h1>
                <p class="CTV">2017 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 2h 13m &nbsp;|
                    &nbsp;Sci-Fi Movies
                </p>
                <div class="VTV">
                    Peter Parker returns to routine life as a high schooler until the Vulture's arrival gives him
                    the
                    chance to prove
                    himself as a web-slinging superhero.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Tom Holland, Michael Keaton, Robert Downey Jr.
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 42";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Spider-Man: Homecoming -->
    <!-- Godzilla: King of the Monsters  -->
    <div class="modal Godzilla" id="modal25">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABdSi3VEkS5nX_2e9uET2HMH8iXLku60RKyjzPsezj7SRqNnLq573x35NkYJ5PfUZFfP9awyGxNcxmdBPyXpA5_o9BP8dXEFeBbvSVxU35f5w.png?r=98d" alt=""></h1>
                <p class="CTV">2019 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 2h 11m &nbsp;|
                    &nbsp;US Movies
                </p>
                <div class="VTV">
                    When rogue scientists set out to reset the balance of humanity by awakening the world's
                    monsters,
                    Godzilla must rise to
                    fend off these chaotic titans.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Kyle Chandler, Vera Farmiga, Millie Bobby Brown
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 43";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Godzilla: King of the Monsters -->
    <!-- Pacific Rim  -->
    <div class="modal Rim" id="modal26">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABYhJAM1ykhpcgDNccTz9I7mi3zVfbTRdlfjVWFmi8gC1vaUNm6I9aNekuYGEE1uz5db-3js2MFvN3C684Zr_l_pLdtIPNeWGvKoyC64NxYIu.png?r=438" alt=""></h1>
                <p class="CTV">2013 &nbsp;|&nbsp; <span class="old">&nbsp;16+&nbsp;</span> &nbsp;| 2h 11m &nbsp;|
                    &nbsp;US Movies
                </p>
                <div class="VTV">
                    When the world's defenses fail against the threat of alien sea creatures, the task of saving the
                    planet falls to a
                    former pilot and a raw trainee.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Charlie Hunnam, Idris Elba, Rinko Kikuchi
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 44";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End GPacific Rim -->
    <!-- The Sea Beast  -->
    <div class="modal Beast" id="modal27">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABZMtnV6g6IrohNWLR0d21ih3ZP4_kCvIwUQwHNTHU3Uw2n_HRgVCP9mfiN8vts6GcLgv3FY7Jhx_z6wpu1hfCcRcqHrIFlvetVJCNCXXB956Re5ACj6mqb6pp9moJ7uBIx8bWUqhdsarTToCrdzNryjEmbOp4ADf_KnzcCW_ICNQXV1ObvuEKA.png?r=bb6" alt=""></h1>
                <p class="CTV">2022 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 1h 59m &nbsp;|
                    &nbsp;Kid & Family
                </p>
                <div class="VTV">
                    When a young girl stows away on the ship of a legendary sea monster hunter, they launch an epic
                    journey into uncharted
                    waters — and make history to boot.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Karl Urban, Zaris-Angel Hator, Jared Harris
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 45";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End The Sea Beast-->
    <!-- Over the Moon  -->
    <div class="modal Over" id="modal28">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABZ-HRtah5Pn55VUgAWtsIavse9LuWAvaRojSzzmKgtM1XYsfCBwUL47AAaRrtIVnYyEYiV81TFKZxkrLWu1Z1sqUISFfwx56n_R3L_w1kcO0dwNl2ZN4vMhR2Kf8twXU2rpT51hsK_KRP3-Vm3Yv0sNjchgMlEKeHKpwGfUSDlqgcszbg048tQ.png?r=f33" alt=""></h1>
                <p class="CTV">2022 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 1h 40m &nbsp;|
                    &nbsp;Musicals
                </p>
                <div class="VTV">
                    Fueled by memories of her mother, resourceful Fei Fei builds a rocket to the moon on a mission
                    to
                    prove the existence of
                    a legendary moon goddess.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Cathy Ang, Phillipa Soo, Ken Jeong
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 46";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Over the Moon -->
    <!-- The SpongeBob Movie: Sponge on the Run  -->
    <div class="modal SpongeBob" id="modal29">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABbSwGix-QGhVEmY-KM06WpQ0VA79vU53LA0iY9lMdxefUTRIpLe0QJkCYfzCHJn9-YAxRl0gIJ2lkttq17xDaiq0DRqokDPmVj5pDxllxmbweHlrXotMzaVPQdMHlyYL9gcrq5B7z11x5ris8v2cZcFSxXy_YwWRw_QcvgJIWL5YuCI0yJTZqg.png?r=e95" alt=""></h1>
                <p class="CTV">2022 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 1h 35m &nbsp;|
                    &nbsp;
                </p>
                <div class="VTV">
                    When his best friend Gary is suddenly snatched away, SpongeBob takes Patrick on a madcap mission
                    far
                    beyond Bikini
                    Bottom to save their pink-shelled pal.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Cathy Ang, Phillipa Soo, Ken Jeong
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 47";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End The SpongeBob Movie: Sponge on the Run -->
    <!-- Peaky Blinders  -->
    <div class="modal Peaky" id="modal30">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABTu-cSOrhncekG-on7pGKLEY2Ucc8DpaoeOXCXdFv_MHO6As8yI8Ern19pEHM3Wxk-CN-NsubsTknFJl67PUAw2TnKZbALOrxXpuSyKjHtAINURdodi_kduVsS_F4JzGzSNxARylJYpGoalSK-k31jbzfEBhmUlpL--ZXIKuahfdMih8JoU9wg.png?r=f38" alt=""></h1>
                <p class="CTV">2013 &nbsp;|&nbsp; <span class="old">&nbsp;18+&nbsp;</span> &nbsp;| 6 Seasons &nbsp;|
                    &nbsp;Period Pieces
                </p>
                <div class="VTV">
                    A notorious gang in 1919 Birmingham, England, is led by the fierce Tommy Shelby, a crime boss
                    set on
                    moving up in the
                    world no matter the cost.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Cillian Murphy, Sam Neill, Helen McCrory
                    <p><span class="Chuthich">Creators:</span> Steven Knight</p>
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 48";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Peaky Blinders -->
    <!-- The Liberator -->
    <div class="modal Liberator" id="modal31">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABbRQo87xNzGjj2J39MSaYkvrtNXceDvMZ6yBGrqAqTK4chRXYnNlvbhxBE-NL9uMSP2eal0HSips3irnsIy2D5IRWQCCiR9gORSUoCK--FHZfMICmTFK-7b7bb8ef67o31q7UkmJjgYFr3ndecBKf_scpnkerToIaqQ-AvaSeJ7NWGjEbtuI1A.png?r=f30" alt=""></h1>
                <p class="CTV">2020 &nbsp;|&nbsp; <span class="old">&nbsp;16+&nbsp;</span> &nbsp;| 1 Season &nbsp;|
                    &nbsp;US TV Shows
                </p>
                <div class="VTV">
                    A diverse, deeply brave crew of ragtag soldiers become some of the most heroic fighters of the
                    European invasion in
                    World War II. Based on true events.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Bradley James, Martin Sensmeier, Jose Miguel Vasquez
                    <p><span class="Chuthich">Creators:</span> Jeb Stuart</p>
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 49";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End The Liberator -->
    <!-- The Emoji Movie -->
    <div class="modal Emoji" id="modal32">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABYwmNghN2lH48xleh3pOXTb3wUZNSJglhLAgEBoolcDc_IJBtAJ3IlHqHwVj85zkpzyNbksiV47HOeV-wny2ui6h66GlbmCH2sGSVp4oUN-j.png?r=b0f" alt=""></h1>
                <p class="CTV">2017 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 1h 27m &nbsp;|
                    &nbsp;Kid & Family
                </p>
                <div class="VTV">
                    In Textopolis, where the emojis are expected to display just one emotion, Gene's multiple
                    expressions are a problem. His
                    solution: become "normal."
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> T.J. Miller, James Corden, Anna Faris
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 50";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End The Emoji Movie -->
    <!-- Teen Titans Go! -->
    <div class="modal Teen" id="modal33">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABTKEb5aoK6g56IZNOtXlJ0XYVsJD2LOq7RMS4eE-YagvdSDBPsBJ4EBxRE4UUrz2bouLPAl_xgvbLHLJwYJNbFQ7CTe8pc6tp1iJRoa9TsoW.png?r=ccd" alt=""></h1>
                <p class="CTV">2013 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 5 Seasons &nbsp;|
                    &nbsp;Kids' TV
                </p>
                <div class="VTV">
                    Superhero roommates Robin, Starfire, Raven, Beast Boy and Cyborg protect Jump City from
                    evildoers,
                    when they're not too
                    busy bickering and competing.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Greg Cipes, Scott Menville, Khary Payton
                    <p><span class="Chuthich">Creators:</span> Aaron Horvath, Michael Jelenic</p>
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 51";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Teen Titans Go! -->
    <!-- Rick and Morty -->
    <div class="modal Rick" id="modal34">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABe4ew4OA7LlJUNpUmZO1eeKNYf4yrH8JWjiImgjzI_J2R4PhQnxOypoerto0SPQi5rqhhqppgAagDCts8cXFJmWhEGypEbiYcIRnhGYYWYbf.png?r=47e" alt=""></h1>
                <p class="CTV">2013 &nbsp;|&nbsp; <span class="old">&nbsp;18+&nbsp;</span> &nbsp;| 4 Seasons &nbsp;|
                    &nbsp;Sitcoms
                </p>
                <div class="VTV">
                    Brilliant but boozy scientist Rick hijacks his fretful teenage grandson, Morty, for wild
                    escapades
                    in other worlds and
                    alternate dimensions.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Justin Roiland, Chris Parnell, Spencer Grammer
                    <p><span class="Chuthich">Creators:</span> Dan Harmon, Justin Roiland</p>
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 52";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Rick and Morty -->
    <!-- The Cuphead Show! -->
    <div class="modal Cuphead" id="modal35">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABQPFOaQ508SYPY6zmLYONRQPcPWqzWiv1t-qwRHh60Fr0WRySn2cEUzpFzsWIfMLX4pApOATtJnPeXfvC73ugP-U03XNCKVtQ8vqtjKeLDIq-Uj3ECcmgak147PZ3eGdZjs4MVcxWltq6wUnqASHAQPZRV8-nuyMkIFtetfDS06LPyq57ZbN5A.png?r=122" alt=""></h1>
                <p class="CTV">2022 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 1 Season &nbsp;|
                    &nbsp;Kids' TV
                </p>
                <div class="VTV">
                    Follow the misadventures of the impulsive Cuphead and his easily swayed brother Mugman in this
                    animated series based on
                    the hit video game.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Tru Valentino, Frank Todaro, Wayne Brady
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 53";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End The Cuphead Show! -->
    <!-- Oggy and the Cockroaches -->
    <div class="modal Oggy" id="modal36">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABS4F3sZxYwSiJdPM7bK6LpJfAL5HiSq9bKb744L8TTIOacc9IFTLSaOmn718Yi3KO2HHx4a2qXuHzFFEldjahU9Sl8cgyPxuQSHkbevpispb.png?r=3db" alt=""></h1>
                <p class="CTV">1998 &nbsp;|&nbsp; <span class="old">&nbsp;All&nbsp;</span> &nbsp;| 1 Season &nbsp;|
                    &nbsp;Kids' TV
                </p>
                <div class="VTV">
                    Wimpy blue cat Oggy would like nothing more than to snooze, but he's constantly bothered by the
                    three ugly cockroaches
                    who have invaded his home.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Don Michael Paul, Tony Sampson, Sam Vincent
                    <p><span class="Chuthich">Creators:</span> Jean-Yves Raimbaud</p>
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 54";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Oggy and the Cockroaches -->
    <!-- The Loud House -->
    <div class="modal Loud" id="modal37">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABeqIH5cD1PoaI1KHgib3XAXgDqNlD922KrMgie0Bx_WhsfXdqavlzbh1NxcqABtOi9JCywKcxdsTm-NgNQuobw27FGvtCafRLO1zyj6Owtnj.png?r=e23" alt=""></h1>
                <p class="CTV">2016 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 2 Seasons &nbsp;|
                    &nbsp;Kids' TV
                </p>
                <div class="VTV">
                    Things are chaotic in the Loud house, where middle-kid Lincoln navigates life with ten sisters
                    --
                    five older, five
                    younger, and all of them a handful.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Grant Palmer, Collin Dean, Catherine Taber
                    <p><span class="Chuthich">Creators:</span> Chris Savino</p>
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 55";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End The Loud House -->
    <!-- LEGO Ninjago: Masters of Spinjitzu -->
    <div class="modal Ninjago" id="modal38">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABapuOFHxncCncj51tYpqc-1vaWM3YD0Eei0vtkYr4yLHeU_Cq1fSlwPbbwpLXW_bqJQlmytDY6zEhiyXGeX7uLIPbXcgxM15xqvELffQcGVo.png?r=2db" alt=""></h1>
                <p class="CTV">2011 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 10 Seasons &nbsp;|
                    &nbsp;Scandinavian TV Shows
                </p>
                <div class="VTV">
                    Kai, Jay, Cole and Zane must master their elemental powers and Spinjitzu weapons to protect the
                    land
                    of Ninjago, which
                    also has an underworld.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Vincent Tong, Jillian Michaels, Ian James Corlett
                    <p><span class="Chuthich">Creators:</span> Michael Hegner</p>
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 56";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End LEGO Ninjago: Masters of Spinjitzu -->
    <!--Shaun the Sheep -->
    <div class="modal Sheep" id="modal39">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABa5YfJkZred8EuY4jwGR3W4QyFPpkjQyodgUQ9MZE61H0B7pyB-SWyy40TumL7oq518XUPQYUyNRWtEg5j3QVnX8slGONtWE73zHRJojRScc.png?r=3dd" alt=""></h1>
                <p class="CTV">2007 &nbsp;|&nbsp; <span class="old">&nbsp;All&nbsp;</span> &nbsp;| 2 Seasons &nbsp;|
                    &nbsp;Kids' TV
                </p>
                <div class="VTV">
                    Join freewheeling Shaun for barnyard misadventures with his cousin Timmy, giant sheepdog Bitzer,
                    jealous cat Pidsley and
                    fellow sheep Shirley.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> John Sparkes, Justin Fletcher, Kate Harbour
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 57";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Shaun the Sheep -->
    <!--The Smurfs -->
    <div class="modal Smurfs" id="modal40">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABTzvwMuwiz7MRNFvUvNIqbOmGvvhxfbp0EduMOk-3j1FSVImLNuReAjNHbzijRBgJYCY8AsklxvhVY0jOM1WF___uj6ZISrsPje12vSeaLWQ.png?r=783" alt=""></h1>
                <p class="CTV">1981 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 1 Season &nbsp;|
                    &nbsp;Kids' TV
                </p>
                <div class="VTV">
                    This children's series follows the adventures of the Smurfs, little blue creatures who live in a
                    peaceful village and
                    try to outwit the evil Gargamel.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Don Messick, Danny Goldman, Lucille Bliss
                    <p><span class="Chuthich">Creators:</span> Peyo</p>
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 58";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End The Smurfs -->
    <!-- Thông tin giới thiệu   -->
    <div class="modal ThongtinNhom " id="modalnone">
        <div class="modal-header">
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 id="BBB" class="titleGH"><img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABRancYEAR9mvK2NC0zXcyQv_To3YILYXtvRJJLRh-ryDSNJQDLj9jvfFU0Attw_cNVPRSFDM3VTFVJ4suBxowoJcmieCNzbf4MWock_yPbW4.png?r=7d5" alt=""> </h1>
                <p class="CTV">2022 &nbsp;|&nbsp; <span class="old">&nbsp;18+&nbsp;</span> &nbsp;| None &nbsp;|
                    &nbsp;????
                </p>
                <div class="VTV">
                    Chân thành gửi đến các bạn lời chào thân hữu.
                    <br>
                    <Span class="Chuthich">Thành viên nhóm:</Span> Trần Phước Thiện, Nguyễn Hữu Duy, Lâm Xuân Hoàng.
                </div>
                <div style="cursor: pointer;" class="social-list">
                    <a class="social-item1">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a class="social-item2">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a class="social-item3">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a class="social-item4">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- End Thông tin giới thiệu   -->
    <!-- Lâu đài bay của pháp sư Howl -->
    <div class="modal Howl" id="modal41">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABcjsBWtoyoB-yq0md3IR3YX1sC6ZeMRzvoth43yoptKiCtpVqPu-ZFv4kE-L77LpSjbcCPW2ZW8OYweKwUoe__g8v90yTnhm47a1o2WvvMU8.png?r=8b5" alt=""></h1>
                <p class="CTV">2004 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 1h 59m &nbsp;|
                    &nbsp;Movies Based on Book
                </p>
                <div class="VTV">
                    Sophie vốn dĩ làm việc tại cửa hàng mũ do người cha quá cố để lại. Cuộc sống nơi thị trấn buồn tẻ cứ
                    thế trôi qua trong
                    lặng lẽ... cho đến ngày cô bỗng biến thành bà lão.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Baisho Chieko,Kimura Takuya,Miwa Akihiro
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 4";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop10" poster="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/E8vDc_W8CLv7-yMQu8KMEC7Rrr8/AAAABd3zLn4YNIGbK8uCA3QaDShxq9iKdalw2xoVEdQKATzA7YQ7uvuTNsYoeglqtc87Q38iPGKcHugyUCoUf4Ep5f9_N646grFZ5Z59.jpg?r=56e" controls>
                    <source src="/video/Howls Moving Castle Trailer_Trim.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Lâu đài bay của pháp sư Howl -->
    <!-- Hàng xóm của tôi là Totoro -->
    <div class="modal Totoro" id="modal42">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-3997.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABQpvKPmdhvo6L6cU9-ZRFx4gYZGQgCuiXpcps0WRn8VsyrXMile0bKQdmW2SGvY2W1yigD95u7BV0vlv9FuvhxG4L2rUsdFMr1gEASPi7XkQ.png?r=dab" alt=""></h1>
                <p class="CTV">1988 &nbsp;|&nbsp; <span class="old">&nbsp;Tất cả&nbsp;</span> &nbsp;| 1h 27m &nbsp;|
                    &nbsp;Phim Kinh điển
                </p>
                <div class="VTV">
                    Những ngày cùng cha nghỉ hè tại miền quê thuộc đất nước Nhật Bản, hai chị em bé nhỏ đã kết bạn với
                    những sinh vật huyền
                    bí sống trong khu rừng gần đó.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Hidaka Noriko,Sakamoto Chika,Itoi Shigesato
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 8";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop11" poster="/img/hangxom2.jpg" controls>
                    <source src="/video/My Neighbour Totoro on stage _ 2022 trailer_Trim.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Hàng xóm của tôi là Totoro-->
    <!--Nhà Mitchell đối đầu với máy móc-->
    <div class="modal Mitchell" id="modal43">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2774.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABSQ5JlthMvX5Cw7YqWytDWxKNedWLMqSM-mneEQeYvxurswcVfEwFTbd5f0svdcptFAkbDZq8i1dM6u5utJetyPJrzQNv5MK3eQ8EMyn68mMldstv-8xqLKlebP-XQRbfnUC59th9307eN-uaX9-JwYWmZFc2TN6w_wYxUH278Vv_TYwMxV9iQ.png?r=c99" alt=""></h1>
                <p class="CTV">2021 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 1h 54m &nbsp;|
                    &nbsp;Kid & Family
                </p>
                <div class="VTV">
                    Cuộc hủy diệt của robot đã ngăn cản chuyến phượt xuyên quốc gia của họ. Giờ đây, chỉ có nhà Mitchell
                    – gia đình kỳ lạ
                    nhất thế giới – mới có thể giải cứu loài người.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Danny McBride,Abbi Jacobson,Maya Rudolph
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 9";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop12" poster="/img/Mitchell2.jpg" controls>
                    <source src="/video/The Mitchells vs. The Machines _ Official Trailer _ Netflix_Trim.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Nhà Mitchell đối đầu với máy móc-->
    <!--Lệnh truy nã đỏ-->
    <div class="modal Red" id="modal44">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABWD4hqTFDbKHZvam0B9po_VJfdLSjIkBE6S10emjR2EN9Rr5_sLKYgPbIcmg7M-G764lgsMX4QeOmWAi41cKpUGDoJWzAW2BvZ6npTvuKW0z1k8qVqJYVV__DqUnoCcp0Tb761z-mmaqspVvnRDh-pCCINq6kuSCTFaVbFDmmPGZQJa6NF197A.png?r=c92" alt=""></h1>
                <p class="CTV">2021 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 1h 58m &nbsp;|
                    &nbsp;Hài
                </p>
                <div class="VTV">
                    Chuyên gia FBI đang tìm bắt kẻ trộm tranh bị truy nã gắt gao nhất thế giới thì trở thành cộng sự
                    bất đắc dĩ của hắn
                    để tóm tên tội phạm luôn đi trước họ một bước.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Dwayne Johnson,Ryan Reynolds,Gal Gadot
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 10";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop13" poster="/img/Red2.jpg" controls>
                    <source src="/video/LỆNH TRUY NÃ ĐỎ _ Trailer chính thức _ Netflix_Trim.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Lệnh truy nã đỏ -->
    <!--Ponyo -->
    <div class="modal Ponyo" id="modal45">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABacbormlt92G2UTD-PAbGzZOKy7SwBBsuSAn7Ch6pkeyYmVw0-M2nvALNJ3sRgO4EUobvRghuAxJQbVtW6D2w55qvDLTnXUuovpTgBEwvU_c.png?r=9a5" alt=""></h1>
                <p class="CTV">2008 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 1h 41m &nbsp;|
                    &nbsp;Anime movie
                </p>
                <div class="VTV">
                    Cậu bé năm tuổi Sosuke làm bạn với Ponyo – cô công chúa cá vàng tha thiết muốn trở thành con
                    người.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Yamaguchi Tomoko,Nagashima Kazushige,Amami Yuki
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 11";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop14" poster="/img/Ponyo2.jpg" controls>
                    <source src="/video/Ponyo - Official Trailer_Trim.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Ponyo -->
    <!--Earwig và phù thủy  -->
    <div class="modal Earwig" id="modal46">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABao29vzpQqeFYY3HRzvYajvzuI6pxLhI8ZC2Psc-LPrFlFhoDf81V_1lLf9FWmrdJ4Gxzq9uWVv6kL0gvTuN9FLVXr1rbRYchubW0PxoL4-J.png?r=fac" alt=""></h1>
                <p class="CTV">2020 &nbsp;|&nbsp; <span class="old">&nbsp;Tất cả&nbsp;</span> &nbsp;| 1h 23m &nbsp;|
                    &nbsp;Anime movie
                </p>
                <div class="VTV">
                    Lớn lên trong trại trẻ mồ côi, cô bé ương ngạnh phát hiện ra mình có sức mạnh kỳ diệu sau khi
                    được một phù thủy ích
                    kỷ nhận nuôi.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Terajima Shinobu,Toyokawa Etsushi,Hamada Gaku
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 12";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop15" poster="/img/Eawig2.jpg" controls>
                    <source src="/video/Earwig and the Witch _ Official Trailer _ Netflix_Trim.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Earwig và phù thủy -->
    <!--Thế giới bí mật của Arrietty  -->
    <div class="modal Arrietty" id="modal47">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABUWW3BdREEQBUTlzmrBwFLn_1DUYr5nI0NVZPy2pyQQ1MX-Gfny-wpMgEALN2nNmSA0x80j2genZSfmICIwj29MxsbFZmOvekpPE5rd0m8M4.png?r=72b" alt=""></h1>
                <p class="CTV">2010 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 1h 34m &nbsp;|
                    &nbsp;Kid & Family
                </p>
                <div class="VTV">
                    Khi "người vay mượn" nhỏ bé tên Arrietty kết bạn với cậu nhóc to lớn hơn cô gấp nhiều lần, cô cũng
                    phải bảo vệ gia đình
                    mình trước những người khổng lồ cao chót vót.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Shida Mirai,Kamiki Ryunosuke,Otake Shinobu
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 13";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop16" poster="/img/Arriety2.jpg" controls>
                    <source src="/video/The Secret World of Arrietty Official Trailer_Trim.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Thế giới bí mật của Arrietty -->
    <!--Nữ hộ vệ xinh đẹp Thủy thủ Mặt Trăng: Vĩnh hằng – Bản điện ảnh  -->
    <div class="modal thuythumattrang" id="modal48">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABcQqL8STiE0tIZVwyARqnTvzI0ob-dk-XxY3RFZ3ycy-M2XtUiNhs-_TPb6gF2_foxSR7xqAVnkt8Qrwkmpr21h6u-oKrjv7EYKKh6rqFl_2XRAT3ZGJcUbg3BP1XhMj-3Si2MjcEpIC3QP31JlAbnXbpQN5WG9_JCixDGQE07t04skmOTgcqQ.png?r=8e9" alt=""></h1>
                <p class="CTV">2021 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 1 Season &nbsp;|
                    &nbsp;Anime movie
                </p>
                <div class="VTV">
                    Khi thế lực hắc ám bao trùm Trái Đất sau nhật thực toàn phần, các Chiến binh Thủy thủ đang
                    phân tán phải đoàn tụ
                    để đưa ánh sáng trở lại với thế giới.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Mitsuishi Kotono,Kanemoto Hisako,Sato Rina
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 14";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop17" poster="/img/Thuythumattrang2.jpg" controls>
                    <source src="/video//劇場版「美少女戦士セーラームーンEternal」《前編》予告映像60秒／_Pretty Guardian Sailor Moon Eternal The Movie Trailer.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Nữ hộ vệ xinh đẹp Thủy thủ Mặt Trăng: Vĩnh hằng – Bản điện ảnh -->
    <!--Vùng đất linh hồn  -->
    <div class="modal Vungdatlinhhon" id="modal49">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABaatU6OsPWoWTb56THpchKlThzK-94z0pWaWRGrXa7E62XdpdAcA4NgKgphQveb8LBLXinxoN4nCJm1kw-qvM5HyOGsr7td12Z8nNADRPEWC.png?r=35b" alt=""></h1>
                <p class="CTV">2001 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 2h 5m &nbsp;|
                    &nbsp;Anime movie
                </p>
                <div class="VTV">
                    Chihiro lạc vào thế giới ma thuật nơi một phù thủy cai trị – và những ai không tuân theo mụ ta sẽ bị
                    biến thành động
                    vật.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Hiiragi Rumi,Irino Miyu,Natsuki Mari
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 3";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop18" poster="/img/Vungdatlinhhon2.jpg" controls>
                    <source src="/video/Best Cinematography Of Spirited Away 2001 (Japan)_Trim.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Vùng đất linh hồn -->
    <!--Thanh gươm diệt quỷ  -->
    <div class="modal thanhguomdietquy" id="modal50">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABSTIjfCngQV0A250mg77wijtLXGz1wccc9eJu4CQ4oMsU5Bwb4G26Qmoei-RNPJ5_ZRbOIW93sOZ6acmWK8YCgwQ7VHR3f3C0LIPjORIqIYE.png?r=423" alt=""></h1>
                <p class="CTV">2019 &nbsp;|&nbsp; <span class="old">&nbsp;16+&nbsp;</span> &nbsp;| 3 Seasons &nbsp;|
                    &nbsp;Anime giả tưởng
                </p>
                <div class="VTV">
                    Gia đình bị thảm sát còn em gái trúng lời nguyền sau cuộc tấn công của ác quỷ, Tanjiro bước vào hành
                    trình đầy hiểm nguy
                    để đưa cô bé trở lại làm người và báo thù.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Hanae Natsuki,Kito Akari,Shimono Hiro
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 15";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop19" poster="/img/demonsalyer.jpg" controls>
                    <source src="/video/Demon Slayer Season 2 - Official Trailer.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Thanh gươm diệt quỷ -->
    <!--Pokémon: Mewtwo phản công – Tiến hóa  -->
    <div class="modal pokemon" id="modal51">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABb3dz19rKfHlDTQITRL-7DQa_i67qE9mQ3STD554Ya23CxwgWLHxzoP5QHN9G3oT2ubsyHBmZY7iC2BuewAKTVOjr4fhwuuLT00JzMdCHmg5loeKN6suTn75bIfa5UVehYVgfU9LjiI_o-SDpTuayCZfJQQBmHQq8LmIpwpxUwn7955aCT1MCQ.png?r=a6c" alt=""></h1>
                <p class="CTV">2019 &nbsp;|&nbsp; <span class="old">&nbsp;7+&nbsp;</span> &nbsp;| 1h 37m &nbsp;|
                    &nbsp;Anime Movie
                </p>
                <div class="VTV">
                    Sau khi nhận lời mời của một huấn luyện viên bí ẩn, Ash, Misty và Brock gặp Mewtwo – một Pokémon
                    nhân tạo muốn gây
                    chiến.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Sarah Natochenny,Dan Green,Bill Rogers
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 16";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop20" poster="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/9pS1daC2n6UGc3dUogvWIPMR_OU/AAAABSxAaXuzdOMYtBTCja7xou0MALp0jJ97uzoEByoQTFBoYGj8pqpoD-JZG14w7BFKacCksypJ-iBvz4uM1MXd4ApPigXTTeTcnxn5AwWcow1ytWumQlSAjKto.jpg?r=24c" controls>
                    <source src="/video/Mewtwo Strikes Back Evolution (2019) - Official Trailer (Japanese).mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Pokémon: Mewtwo phản công – Tiến hóa -->
    <!--Belle: Rồng và công chúa tàn nhang -->
    <div class="modal Belle" id="modal52">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="Noidungche">
                <h1 class="titleGH"><img src="https://occ-0-325-2773.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABbNYwtzq3K1x5knhtlV9xO9oXv9KbBA-MSjLb44WXRT0f8cjqfUvoBYx5SsbEG0QePYYfNHkkEQzIToKLIUBYcyqizx4zRPUmNIQTE9mgo1l.png?r=2f5" alt=""></h1>
                <p class="CTV">2021 &nbsp;|&nbsp; <span class="old">&nbsp;13+&nbsp;</span> &nbsp;| 2h 1m &nbsp;|
                    &nbsp;Anime Movie
                </p>
                <div class="VTV">
                    Trong thế giới ảo của U, một nữ ca sĩ được yêu mến trở nên gắn bó với gã Rồng bị căm ghét, dẫn đến
                    một cuộc phiêu lưu
                    bắt đầu chạm đến cuộc sống thật của họ.
                    <br><br>
                    <Span class="Chuthich">Starring:</Span> Nakamura Kaho,Narita Ryo,Sometani Shota
                </div>
                <?php
                $conn = new mysqli('localhost', 'root', '', 'netflix');
                $sql = "select * from phim where ID = 17";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
                <a href="/Php/Xemphim.php?ID=<?php echo $row['ID']; ?>">
                    <button class="btnpopup TNT1"><i class="fa-solid fa-play">
                        </i> Play</button>
                </a>
                <a href="/Php/Mylist.php?img=<?php echo $row['img'] ?>">
                    <button class="btnpopup TNT2"><i class="fa-solid fa-plus"></i>
                        My list</button>
                </a>
                <?php
                ?>
                <video id="videostop21" poster="/img//Belle2.jpg" controls>
                    <source src="/video/BELLE (2021) - 70 Second Trailer [HQ].mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ video tag.
                </video>
            </div>
        </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Belle: Rồng và công chúa tàn nhang -->
    <!-- Trailer đứa con của thời tiết -->
    <div class="modal TT" id="modal53">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="tuade">Đứa con của thời tiết</div>
            <video id="videostop" class="video" poster="/img/icon.png" controls>
                <source src="/video/Weathering With You [Official Subtitled Trailer, GKIDS].mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end  Trailer đứa con của thời tiết -->
    <!-- Trailer the cup -->
    <div class="modal TT" id="modal54">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="tuade">THE CUPHEAD SHOW</div>
            <video id="videostop2" class="video" poster="/img/Cup.jpg" controls>
                <source src="/video/THE CUPHEAD SHOW! New Episodes _ Official Teaser _ Netflix_Trim.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Trailer the cup -->
    <!-- Trailer your name -->
    <div class="modal TT" id="modal55">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="tuade">YOUR NAME</div>
            <video id="videostop3" class="video" poster="/img/logo.png" controls>
                <source src="/video/Phim chiếu rạp _YOUR NAME_ TRAILER.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Trailer your name -->
    <!-- Trailer cyperpunk -->
    <div class="modal TT" id="modal56">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="tuade">Cyberpunk Edgerunners</div>
            <video id="videostop4" class="video" poster="/img/logo.png" controls>
                <source src="/video/Cyberpunk_ Edgerunners _ Official Teaser _ Netflix_Trim2.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Trailer cyperpunk -->
    <!-- Trailer Man vs Bee -->
    <div class="modal TT" id="modal57">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="tuade">Man Vs Bee</div>
            <video id="videostop5" class="video" poster="/img/icon.png" controls>
                <source src="/video/Man Vs Bee _ Official Trailer _ Netflix2.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end TTrailer Man vs Bee -->
    <!-- Trailer Godzilla Singular Point -->
    <div class="modal TT" id="modal58">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="tuade">Godzilla Singular Point</div>
            <video id="videostop6" class="video" poster="/img/icon.png" controls>
                <source src="/video/Godzilla Singular Point _ Official Trailer _ Netflix Anime_Trim.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end Godzilla Singular Point -->
    <!-- Trailer All of us dead -->
    <div class="modal TT" id="modal59">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div id="videostop" class="tuade">All of Us Are Dead</div>
            <video id="videostop7" class="video" poster="/img/logo.png" controls>
                <source src="/video/All of Us Are Dead _ Official Trailer _ Netflix_Trim.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end All of us dead -->
    <!-- Trailer Điểm số kỉ lục -->
    <div class="modal TT" id="modal60">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div id="videostop" class="tuade">HIGH SCORE</div>
            <video id="videostop8" class="video" poster="/img/logo.png" controls>
                <source src="/video/HIGH SCORE _ The First Computer Graphics Game _ Netflix.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end điểm số kỉ lục -->
    <!-- Trailer bong bóng -->
    <div class="modal TT" id="modal61">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="tuade">Bong bóng</div>
            <video id="videostop9" class="video" poster="/img/icon.png" controls>
                <source src="/video/Bubble _ Official Trailer _ Netflix_Trim.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end bong bóng -->
    <!-- Video 404 -->
    <div class="modal 404" id="modal404">
        <div class="modal-header">
            <button onclick="dongvideo()" data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            <div class="tuade">Error 404</div>
            <video id="videostop404" class="video" poster="/img/logo.png" controls>
                <source src="/video/Netflix Original Films (2018).mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video tag.
            </video>
        </div>
    </div>
    </div>
    <div id="overlayGH"></div>
    <!-- end  video 404 -->
    <!-- End ẩn hiện thông tin phim -->
    <!-- LATEST MOVIES SECTION -->
    <div id="phim" class="section">
        <div class="container1">
            <div class="section-header">
                Top Anime
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- Công chúa Monomoke -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdyVf1aAZChR-Z3-ByL2NX1ehULXtQ03c3PdvcYBCxDpCGtLA971wo4Sczy8h3xqXjEWjVOMdY0bE2SxEbw06V_EQHUO94bwtPYp.jpg?r=281" alt="">
                    <div data-modal-target="#modal6" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Công chúa Monomoke
                        </p>
                    </div>
                </a>
                <!-- End Công chúa Monomoke -->
                <!-- Movie Demon salyer -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbmJfKioVVMPjIdplmW8ZKP9SaifvNP7gCMwSt94luWDvcIeULsEj4aneqqSNi4turtz4psSX4BppbuYC0FfQZBGmNSPgkbrONdi.jpg?r=a2d" alt="">
                    <div data-modal-target="#modal7" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Movie Demon salyer
                        </p>
                    </div>
                </a>
                <!-- End Movie Demon salyer -->
                <!-- Erased -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVJ61BVlnqXsYDs62qXXqN30YJOtMqgs4N8_Q9U2NWJ7EbAAki0Cr3mVORI44eFINXGVZPur9uSPDGMD6nNq6_6WHQ1RSDr8XCiy.jpg?r=677" alt="">
                    <div data-modal-target="#modal8" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Erased
                        </p>
                    </div>
                </a>
                <!-- End Erased -->
                <!-- Fairy Tail -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXaWIrOSalM9BLHB7c8-7smEyQyu3DNK29_hUqL364GJdYzrmGvmMKiJpdZYMro2nONeAXwUJpZZum6hadyZGqBwxSeQrNSkpApE.jpg?r=4d1" alt="">
                    <div data-modal-target="#modal9" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Fairy Tail
                        </p>
                    </div>
                </a>
                <!-- END Fairy Tail -->
                <!-- My Hero Academia: Heroes Rising -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRBJij-cgmiUiw_803SvIZ7DbDKwZUscDrtfus2xNWxitxT9d2fQTgJoxLMN_GCfqZikMh2a4r18lJZvSYK_SK1pcWgwzdVBIyDA.jpg?r=f5d" alt="">
                    <div data-modal-target="#modal10" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">My Hero Academia: Heroes Rising
                        </p>
                    </div>
                </a>
                <!-- END MMy Hero Academia: Heroes Rising -->
                <!-- Hunter X Hunter  -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTnmNEAzF1X0SxoPgYrtpltT_A3amS2eKgxTEU4Nn2o5m1Msel9dLvHXBcvpW4hpnXLLqBcPqR16vCJg8B4eHgDLK1z_CXE8fH8Z.jpg?r=c40" alt="">
                    <div data-modal-target="#modal11" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Hunter X Hunter
                        </p>
                    </div>
                </a>
                <!-- END Hunter X Hunter  -->
                <!-- Record of Ragnarok -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeceNU7PkQjQTUpPTcXx38mOUUGh0hzTlpPhtBH4colJTKW4pI7EVIwyLP1sEzPJ_QHsLgf6NUi7WVVrFsH-ObmuMqaZ2yQzKgVh6D6IAQM33x14driKbBJlfm3FuU2Xc1fauw.jpg?r=d6c" alt="">
                    <div data-modal-target="#modal12" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Record of Ragnarok
                        </p>
                    </div>
                </a>
                <!-- END Record of Ragnarok-->
                <!-- Mob Psycho 100 -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVk80H9S29pS5UrDB4SNJAEYpSU_MXQRC8YRAI7wUMpr9NJbQWvkHXxZKTBx2rII2EXNBAISKwltqkLzOcA9Ev3avWKpTwEhPPsQ.jpg?r=533" alt="">
                    <div data-modal-target="#modal13" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Mob Psycho 100
                        </p>
                    </div>
                </a>
                <!-- END Mob Psycho 100 -->
                <!-- SPY x FAMILY -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABd_6xzSCOOhhNyHFwlZTev8AQl9gKR7L0TQ5ClDIpvAJVjrJ0eeZWPVEbu8URfu6O2__1pfwAnUmU6mjVUSG1MYlH807nPwXjef7FiZf441Gnd8qWqjGmFyErAXF22m9GOgh183zHJI.jpg?r=c01" alt="">
                    <div data-modal-target="#modal14" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">SPY x FAMILY
                        </p>
                    </div>
                </a>
                <!-- END SPY x FAMILY -->
            </div>
        </div>
    </div>
    <!-- END LATEST MOVIES SECTION -->
    <!-- LATEST SERIES SECTION -->
    <div class="section">
        <div class="container1">
            <div class="section-header">
                TV Shows
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!--Money Heist -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfIMQYphOV6GHzXVyS823N50Y7LnkjRZD-xN81I1_dHTVr7EMEHB9XoGMW9J7wn_0mKtVFUnuzNtZ1LzxG1G2JG8HHem1O85x7P28Dj7e0h2c7l-Rrw7CzE3530T-Kx5N6XZuQ.jpg?r=695" alt="">
                    <div data-modal-target="#modal15" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Money Heist
                        </p>
                    </div>
                </a>
                <!-- END Money Heist -->
                <!-- Stranger Things -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABahk3ArdEIswQMgR8BuyV4tqpHzIpMAvJ4WG5Td0sOVyfP23mqYJWAYFtZ9652Ws7P8z34vBdk4_Lb2Gp5mb1tnddG1YNuVBg83t1Q39ml2aRdZfEChsgFEAMtTuHGwc81IBTjfusQLrK9sd3ZdVG76BnatnXbhwM9GK7tY.jpg?r=f3e" alt="">
                    <div data-modal-target="#modal16" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Stranger Things
                        </p>
                    </div>
                </a>
                <!-- END Stranger Things-->
                <!-- Sing "Yesterday" for Me -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABTUWlcrjgDJi8BX90LI1vYmTIJrNAbbcOoXXWCCCdYuWzsTUtAaxvAZSYkuut2Eht7wYhTzUDNY78oV2Oz_xzynBFIq9b9PG6_Gp.jpg?r=ee3" alt="">
                    <div data-modal-target="#modal17" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Sing "Yesterday" for Me
                        </p>
                    </div>
                </a>
                <!-- END Sing "Yesterday" for Me -->
                <!-- Pacific Rim: The Black -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcsBlzxh44XWGbn4OAVqfU-rBDALdmM66-gh3wgJu5ujWWic_olo73risdyNMCaaPgN-opcIQvjVJg4Pl284W9mN_PUaa7CFBF5-g0-XlS1gDiiVdirLbL0Xm_sbdxCX7X0xnQ.jpg?r=95c" alt="">
                    <div data-modal-target="#modal18" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Pacific Rim: The Black
                        </p>
                    </div>
                </a>
                <!-- END Pacific Rim: The Black -->
                <!-- Ultraman -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRsnIiGBKCyV5RB0Owy12P2etaUQnw7mghdqHS0XndtRY2iPyw7lOdUwTIPGV4E5q3LBMclxyqCnx3XaKk6wZBHeMDy4eoCTDx98KF3Gm-TG6BIZBdAkfFp4hP6Xeyjo1PeaUw.jpg?r=4b6" alt="">
                    <div data-modal-target="#modal19" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Ultraman
                        </p>
                    </div>
                </a>
                <!-- END Ultraman -->
                <!-- Super Crooks -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSCJLyXPGwbzROc2vE1orYgC6IGt2V_erlvAwPVX7RfbD9Y2B4J0UMXO4fMbk6Yhu-U7tO9ioc9YFte4X28JaA2um87p0tYDi7eY-uRzxJ8_crNtnUcNAevCsF0YXpDLNi70Ow.jpg?r=e18" alt="">
                    <div data-modal-target="#modal20" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Super Crooks
                        </p>
                    </div>
                </a>
                <!-- END Super Crooks -->
                <!-- The End of Evangelion -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWqdlJgqm6uFsg89dlV9ZHaCdrDO6mshcNrjKUgWkwW6RaItjDpY8ZzKrZbY5UofD3ZeNXAwueQjXUzjl0ATlonpE9moWs_NuQht.jpg?r=5bf" alt="">
                    <div data-modal-target="#modal21" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">The End of Evangelion
                        </p>
                    </div>
                </a>
                <!-- END The End of Evangelion -->
                <!-- Godzilla Singular Point -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABa6h-ozIsK5TQhvnUXzX04p3D8wf59NBtPohFgVb4YcUdvhuLqJmB6ZVn1ns5-M6RixSdG-9FP7dvGDMjVp3viWgta7w60KlzBlkWkBETSe5pp5V_n0LOkXnkVkKzlVRGvLSuQ.jpg?r=7e8" alt="">
                    <div data-modal-target="#modal22" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Godzilla Singular Point
                        </p>
                    </div>
                </a>
                <!-- Godzilla Singular Point -->
            </div>
        </div>
    </div>
    <!-- END LATEST SERIES SECTION -->
    <!-- LATEST CARTOONS SECTION -->
    <div class="section">
        <div class="container1">
            <div class="section-header">
                Movies Netflix
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- Transformers: Age of Extinction -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXEj8CoVC_cqgZ9ASfZadZGbG_bn-Omd11gID_w_4UkBBVQqwL6U2wrS8ovsE8TUBuYh-vrmVVjGGmk1MjXB_AAmGIhpvCS8c2a8.jpg?r=934" alt="">
                    <div data-modal-target="#modal23" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Transformers: Age of Extinction
                        </p>
                    </div>
                </a>
                <!-- END Transformers: Age of Extinction -->
                <!-- Spider-Man: Homecoming -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABerooxaWTAKMtNPUbgbtd926b_4WCa0f9d9Lvqk2g5bGgEpqefrZWfDnAQp8CN61v1RGSL4AkxkBqv5ijeepMpsQ33-2lN0mDmFo.jpg?r=16b" alt="">
                    <div data-modal-target="#modal24" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Spider-Man: Homecoming
                        </p>
                    </div>
                </a>
                <!-- END Spider-Man: Homecoming -->
                <!-- Godzilla: King of the Monsters -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSKJkoiV26V7rDLIlaWU4mqsitiShV9pB0Y1iVLjKiQ30YNS3ov1dOK-av5BEHKPz6elkdCRiby04dJ1FiXfbjl65eia02Z0J23M.jpg?r=680" alt="">
                    <div data-modal-target="#modal25" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Godzilla: King of the Monsters
                        </p>
                    </div>
                </a>
                <!-- END Godzilla: King of the Monsters-->
                <!-- Pacific Rim  -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABT1ns0k9-c3ISRm1WdTggXLf3Ir0DXw20khSzw6pxT-GYLdXk0KAy_LWbzi68m45xdfhq1qVP8YiS6ejG_290StN64FVd-XCnftJ.jpg?r=5c4" alt="">
                    <div data-modal-target="#modal26" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Pacific Rim
                        </p>
                    </div>
                </a>
                <!-- END Pacific Rim  -->
                <!-- The Sea Beast -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUKqQfIe68vjXqQ54Ejx-hYtOJ05qj20553yApOfJIwKzF4aNQHEqr7qn3Oa7Pn4JpCt8CtGsdTTTWuL_1MNHxJcVzFN4z7uCWr4qHxMKLzhSviC7pdWYKHu1xhulw0YgqoYLA.jpg?r=81e" alt="">
                    <div data-modal-target="#modal27" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">The Sea Beast
                        </p>
                    </div>
                </a>
                <!-- END The Sea Beast -->
                <!-- Over the Moon -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABaBxRHN-8qWS_WmPknWH89faucQ7xnKHo2M4bsqDwRj45WVULztD3xELewZE5e_KT_EBD-RDOdlRho7qiZKUSbjAx8khlTXEK39phChffz4BdhQKWk9RPs2yZU48MdBkU4T45w.jpg?r=4c1" alt="">
                    <div data-modal-target="#modal28" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Over the Moon
                        </p>
                    </div>
                </a>
                <!-- END Over the Moon -->
                <!-- The SpongeBob Movie: Sponge on the Run -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXZDWRroYG_nV9tlkWSJLNx9ApXvvqfoGAEHGj5Q1B_P7dIkEdW-wFvnSCECt5xBfs08Pjik9-TJH4fxej-CII-Y9qdnRtyUkD7clzrN3eKsYXvG6aaOvQP1BtEd0Mm7RSFnPg.jpg?r=413" alt="">
                    <div data-modal-target="#modal29" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">The Movie: Sponge on the Run
                        </p>
                    </div>
                </a>
                <!-- END The SpongeBob Movie: Sponge on the Run -->
                <!-- Peaky Blinders -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXIC-gDJDnRBrDBzc76MHlpxKnx-zz0i5xTtnojsTGfnbeWgSQs5SpJl1RZWGTm4XBSf4PPUdVzLPXSHKRxWOXO2FdJeJrRnelV9CUo11zuyWO3F-2NH9yGaq8hDTglJHy1U.jpg?r=a07" alt="">
                    <div data-modal-target="#modal30" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Peaky Blinders
                        </p>
                    </div>
                </a>
                <!-- END Peaky Blinders -->
                <!-- The Liberator -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABecT3jRvjTgHpPsFqS3eNC0XDOxmOWsFGHww6KBsVH_xdNmamGcmFm2GTM0irimxIApHqhSeg9m3Ivb-y_bThChVooCbdPay4Bqxg5Hg-fbsZ2oA9rGWIdZOd0OE9wD4TSrm.jpg?r=c73" alt="">
                    <div data-modal-target="#modal31" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">The Liberator
                        </p>
                    </div>
                </a>
                <!-- END The Liberator-->
                <!-- The Emoji Movie -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABT6_AqemOLbV4bLvb-cKdLS-G-879nq5WPlUsMnuVX7O5EdaRkV3jp4bAJMyO1TuxCdzn-r6u4ZEuDoJRzZ3AlG1Qjf7Ma0O4wY.jpg?r=bfa" alt="">
                    <div data-modal-target="#modal32" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">The Emoji Movie
                        </p>
                    </div>
                </a>
                <!-- END The Emoji Movie-->
            </div>
        </div>
    </div>
    <!-- END LATEST CARTOONS SECTION -->
    <!-- LATEST CARTOONS SECTION -->
    <div class="section">
        <div class="container1">
            <div class="section-header">
                TV Cartoons
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <!-- Teen Titans Go! -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWls5PXsyo3o3UAoC0lvfNzKqADfMdNlrHr8DqtiZIbzV6dQpOG4mmcurGUay460Dy-IMq6uJ8hWQO8JqvsRU72DLnIglHU52dU.jpg?r=484" alt="">
                    <div data-modal-target="#modal33" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Teen Titans Go!
                        </p>
                    </div>
                </a>
                <!-- END Teen Titans Go! -->
                <!-- Rick and Morty -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbSv6_SK2Mgn4ZEEYByXFdknimNDobhEqCpSbYg2YBKT5cXfUkiabGf9t25539FiBcimVWZsc5v9szbPleUPppt5x0tDEdRnjLg.jpg?r=145" alt="">
                    <div data-modal-target="#modal34" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Rick and Morty
                        </p>
                    </div>
                </a>
                <!-- END Rick and Morty -->
                <!-- The Cuphead Show! -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQhA6PANcGgtdEjzEJZo6I1lqCitXf_FFvdhMIMcbYuxrBZvFeU8rV_Ji702WIrXjZSGX3_GgvLSmyBUay7Rc6PwTsgjBSlt0QImf5IcqFtd8giwlghxLH3dKhyYMfS_H9jU.jpg?r=ee0" alt="">
                    <div data-modal-target="#modal35" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">The Cuphead Show!
                        </p>
                    </div>
                </a>
                <!-- END The Cuphead Show! -->
                <!-- Oggy and the Cockroaches -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABf8Cb4STidxkFik5BpqGluy5UCWNTMoHd8PcfLKkCzwY6v-2ihK8H7befwvZ0vKaUL2yyigS5pa1iq47LXykWMWfg2iWoYmRFk8.jpg?r=6e0" alt="">
                    <div data-modal-target="#modal36" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Oggy and the Cockroaches
                        </p>
                    </div>
                </a>
                <!-- END Oggy and the Cockroaches -->
                <!-- The Loud House -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeqUzWqA8pa7RYS8ZFtjXCt175W6YBH494XYLyK1lSLBrd4keD2LV1L6Vpsg7eO0Fu_aDicQ2WJ9nexCPACixLOhg77z8fmfEBM.jpg?r=655" alt="">
                    <div data-modal-target="#modal37" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">The Loud House
                        </p>
                    </div>
                </a>
                <!-- END The Loud House -->
                <!-- LEGO Ninjago: Masters of Spinjitzu -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUb5TkYtet1DDFhjYVGK_bzXCASHqsd3lrfP73hiGJJkLUpfja-bztPBBt7DIIwTZ3Tv-TNqLELU_dPvXBW-93t3bt-LTlHrK251.jpg?r=787" alt="">
                    <div data-modal-target="#modal38" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">LEGO Ninjago: Masters of Spinjitzu
                        </p>
                    </div>
                </a>
                <!-- END LEGO Ninjago: Masters of Spinjitzu -->
                <!-- Shaun the Sheep -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfvreZf-5DB6fzT1bRPc4aTqP-7Dx-i_weABF7Q2e8b_n9-rDCrBC91AwRVlZ-lKGEUT-Guz828NyAruzoZamNAa_L3ttLiq3hk.jpg?r=403" alt="">
                    <div data-modal-target="#modal39" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">Shaun the Sheep
                        </p>
                    </div>
                </a>
                <!-- END Shaun the Sheep -->
                <!-- The Smurfs -->
                <a class="movie-item">
                    <img src="https://occ-0-395-325.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcnJ2mbrCU7UDpR4TYIg0yC_54xePXyxoxug4HjA1hFEqpnTy3gbdC8ZBjuSsLtXzroS8ReNfY752DL-UtLZ5_-ID-q52KSPC0g.jpg?r=074" alt="">
                    <div data-modal-target="#modal40" class="chuan2">
                        <div class="chuan2text"><i class="fa-solid fa-circle-info"></i></div>
                        <p class="chuan2textp" style="padding-left: 10px;">The Smurfs
                        </p>
                    </div>
                </a>
                <!-- END The Smurfs* -->
            </div>
        </div>
    </div>
    <!-- END LATEST CARTOONS SECTION -->
    <header class="page-header">
        <div class="container flow">
            <h1 class="page-title">Phim hay xem đi chờ chi!</h1>
            <p class="page-subtitle">Xin chào, cảm ơn bạn đã tin tưởng và chọn Netflix là nơi để thư giãn và xem phim.
            </p>
        </div>
    </header>
    <!-- PRICING SECTION -->
    <div class="gach"></div>
    <div class="section">
        <div class="container">
            <div class="pricing reveal">
                <div class="pricing-header3">
                    Choose <span class="main-color">your</span> plan.
                </div>
                <div id="main12" class="reveal">
                    <div id="slider">
                        <div class="cardZXC frontX">
                            <div class="card-header standard">
                                <h2 class="titleFGB"><img src="/img/icon.png" alt=""> Standard</h2>
                                <strong class="price12">220,000₫</strong><span class="time">/Month</span>
                            </div>
                            <ul class="item23-list">
                                <img class="anh3nen" style="border-radius: 8px;" src="http://images6.fanpop.com/image/photos/43000000/Stranger-Things-Seasons-1-3-Poster-stranger-things-43081854-1080-1350.jpg" alt="">
                            </ul>
                        </div>
                        <div class="cardZXC leftX">
                            <div class="card-header basic">
                                <h2 class="titleFGB"><img src="/img/icon.png" alt=""> Basic</h2>
                                <strong class="price12">180,000₫</strong><span class="time">/Month</span>
                            </div>
                            <ul class="item23-list">
                                <img class="anh3nen" style="border-radius: 8px;" src="https://i.pinimg.com/originals/13/e1/8e/13e18e254a6a948941d967a5e38892da.png" alt="">
                            </ul>
                        </div>
                        <div class="cardZXC rightX">
                            <div class="card-header Premium">
                                <h2 class="titleFGB"><img src="/img/icon.png" alt=""> Premium</h2>
                                <strong class="price12">260,000₫</strong><span class="time">/Month</span>
                            </div>
                            <ul class="item23-list">
                                <img class="anh3nen" style="border-radius: 8px;" src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/8bf6da118213987.608b274009eb9.jpg" alt="">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pricing-header">
                    Choose the plan <span class="main-color">that’s</span> right for you.
                </div>
                <div class="pricing-list reveal">
                    <div class="pricing-header2">
                        <img src="https://vn.jugomobile.com/wp-content/uploads/2022/03/Danh-gia-Netflix-Ban-nen-o-lai-hay-bo-cuoc.jpg" alt="">
                        <p>Netflix là dịch vụ <span style="color: #de0808;  font-weight:700 ;">phát trực tuyến</span>
                            dựa trên đăng ký cho
                            phép
                            các thành viên của chúng tôi xem
                            các chương trình truyền
                            hình và phim không có quảng cáo trên thiết bị có kết nối internet.
                            <br><br> Bạn cũng có thể <span style="color: #de0808; font-weight:700 ;">tải các
                                chương trình truyền hình</span> và
                            phim xuống thiết bị iOS, Android hoặc Windows 10 của mình và xem mà không cần kết nối
                            internet.
                            <br><br> Nếu bạn đã là thành viên
                            và muốn tìm hiểu thêm về cách sử dụng Netflix, <span style="color: #de0808;  font-weight:700 ;">hãy truy cập Bắt đầu với Netflix</span>.
                        </p>
                    </div>
                    <div class="wrapperCVB">
                        <input type="radio" name="slider" id="tab-1">
                        <input type="radio" name="slider" id="tab-2" checked>
                        <input type="radio" name="slider" id="tab-3">
                        <header class="headerlmao">
                            <label for="tab-1" class="tab-1">Basic</label>
                            <label for="tab-2" class="tab-2">Standard</label>
                            <label for="tab-3" class="tab-3">Premium</label>
                            <div class="slider"></div>
                        </header>
                        <div class="card-area">
                            <div class="cards">
                                <div class="rowXDC row-1">
                                    <div class="price-details">
                                        <span class="price"><img src="/img/icon.png" alt=""> Basic</span>
                                        <p>180,000₫/Month</p>
                                    </div>
                                    <ul class="features">
                                        <li><i class="fas fa-check"></i><span>Monthly price / 180,000₫</span></li>
                                        <li><i class="fas fa-check"></i><span>Video quality / Good</span></li>
                                        <li><i class="fas fa-check"></i><span>Resolution / 480p</span>
                                        </li>
                                        <li><i class="fas fa-check"></i><span>Devices you can use to watch /
                                                ALL</span></li>
                                    </ul>
                                </div>
                                <div class="rowXDC">
                                    <div class="price-details">
                                        <span class="price"><img src="/img/icon.png" alt=""> Standard</span>
                                        <p>220,000₫/Month</p>
                                    </div>
                                    <ul class="features">
                                        <li><i class="fas fa-check"></i><span>Monthly price / 220,000₫</span></li>
                                        <li><i class="fas fa-check"></i><span>Video quality / Better</span></li>
                                        <li><i class="fas fa-check"></i><span>Resolution / 1080p</span>
                                        </li>
                                        <li><i class="fas fa-check"></i><span>Devices you can use to watch /
                                                ALL</span></li>
                                    </ul>
                                </div>
                                <div class="rowXDC">
                                    <div class="price-details">
                                        <span class="price"><img src="/img/icon.png" alt=""> Premium</span>
                                        <p>260,000₫/Month</p>
                                    </div>
                                    <ul class="features">
                                        <li><i class="fas fa-check"></i><span>Monthly price / 260,000₫</span></li>
                                        <li><i class="fas fa-check"></i><span>Video quality / Best</span></li>
                                        <li><i class="fas fa-check"></i><span>Resolution / 4K+HDR</span>
                                        </li>
                                        <li><i class="fas fa-check"></i><span>Devices you can use to watch /
                                                ALL</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <button class="nutchon">Choose plan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- END PRICING SECTION -->
    <!-- FOOTER SECTION -->
    <footer class="section">
        <div class="sectionslider"></div>
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="content">
                        <a href="#" class="logo">
                            <span class="main-color"><img style="width:150px;" src="/img/logo.png" alt=""></span>
                        </a>
                        <p>
                            Netflix is a subscription-based streaming service that allows our members to watch TV
                            shows
                            and movies without
                            commercials on an internet-connected device.
                        </p>
                        <div style="cursor: pointer;" class="social-list">
                            <a class="social-item1">
                                <i data-modal-target="#modalnone" class="fa-brands fa-facebook"></i>
                            </a>
                            <a class="social-item2">
                                <i data-modal-target="#modalnone" class="fa-brands fa-instagram"></i>
                            </a>
                            <a class="social-item3">
                                <i data-modal-target="#modalnone" class="fa-brands fa-github"></i>
                            </a>
                            <a class="social-item4">
                                <i data-modal-target="#modalnone" class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Netflix</b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Pricing plans</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Pay</b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">Cash <i class="fa-solid fa-comment-dollar"></i></a></li>
                                    <li><a href="#">Bank card <i class="fa-solid fa-money-check-dollar"></i></a>
                                    </li>
                                    <li><a href="#">Credit <i class="fa-brands fa-cc-visa"></i></a></li>
                                    <li><a href="#">Letter of Credit <i class="fa-solid fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Help <i class="fa-solid fa-question"></i></b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Pricing plans</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Download app <i class="fa-solid fa-download"></i></b></p>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="https://apps.apple.com/us/app/netflix/id363590051">
                                            <img src="https://giaohangtietkiem.vn/wp-content/uploads/2016/12/appstore.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://play.google.com/store/apps/details?id=com.netflix.mediaclient&hl=vi&gl=US">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/800px-Google_Play_Store_badge_EN.svg.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <!-- COPYRIGHT SECTION -->
    <div class="copyright">
        copyright © 2022 <a href="" target="_blank">
            Tran Phuoc Thien</a>
    </div>
    <!-- END COPYRIGHT SECTION -->

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- SCRIPT -->
    <script src="/js/movie.js"></script>
    <script src="/js/infoMoive.js"> </script>
    <script>
        //selecting all required elements
        const filterItem = document.querySelector(".luachonnho");
        const filterImg = document.querySelectorAll(".gallery .image");

        window.onload = () => { //after window loaded
            filterItem.onclick = (selectedItem) => { //if user click on filterItem div
                if (selectedItem.target.classList.contains("chontheloai")) { //if user selected item has .item class
                    filterItem.querySelector(".kichhoat").classList.remove("kichhoat"); //remove the active class which is in first item
                    selectedItem.target.classList.add("kichhoat"); //add that active class on user selected item
                    let filterName = selectedItem.target.getAttribute("data-name"); //getting data-name value of user selected item and store in a filtername variable
                    filterImg.forEach((image) => {
                        let filterImges = image.getAttribute("data-name"); //getting image data-name value
                        //if user selected item data-name value is equal to images data-name value
                        //or user selected item data-name value is equal to "all"
                        if ((filterImges == filterName) || (filterName == "all")) {
                            image.classList.remove("hide"); //first remove the hide class from the image
                            image.classList.add("show"); //add show class in image
                        } else {
                            image.classList.add("hide"); //add hide class in image
                            image.classList.remove("show"); //remove show class from the image
                        }
                    });
                }
            }
            for (let i = 0; i < filterImg.length; i++) {
                filterImg[i].setAttribute("onclick", "preview(this)"); //adding onclick attribute in all available images
            }
        }
        //fullscreen image preview function
        //selecting all required elements
        const previewBox = document.querySelector(".preview-box"),
            categoryName = previewBox.querySelector(".titlesxc p"),
            previewImg = previewBox.querySelector("img"),
            closeIcon = previewBox.querySelector(".icon"),
            shadow = document.querySelector(".shadow");

        function preview(element) {
            //once user click on any image then remove the scroll bar of the body, so user cant scroll up or down
            document.querySelector(".body").style.overflow = "hidden";
            let selectedPrevImg = element.querySelector("img").src; //getting user clicked image source link and stored in a variable
            let selectedImgCategory = element.getAttribute("data-name"); //getting user clicked image data-name value
            previewImg.src = selectedPrevImg; //passing the user clicked image source in preview image source
            categoryName.textContent = selectedImgCategory; //passing user clicked data-name value in category name
            previewBox.classList.add("show"); //show the preview image box
            shadow.classList.add("show"); //show the light grey background
            closeIcon.onclick = () => { //if user click on close icon of preview box
                previewBox.classList.remove("show"); //hide the preview box
                shadow.classList.remove("show"); //hide the light grey background
                document.querySelector(".body").style.overflow = "auto"; //show the scroll bar on body
            }
        }
    </script>
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
        // js sldier tràn backgroud
        document.addEventListener("click", e => {
            let handle
            if (e.target.matches(".handle")) {
                handle = e.target
            } else {
                handle = e.target.closest(".handle")
            }
            if (handle != null) onHandleClick(handle)
        })

        const throttleProgressBar = throttle(() => {
            document.querySelectorAll(".progress-bar").forEach(calculateProgressBar)
        }, 250)
        window.addEventListener("resize", throttleProgressBar)

        document.querySelectorAll(".progress-bar").forEach(calculateProgressBar)

        function calculateProgressBar(progressBar) {
            progressBar.innerHTML = ""
            const slider = progressBar.closest(".rowslider").querySelector(".slider")
            const itemCount = slider.children.length
            const itemsPerScreen = parseInt(
                getComputedStyle(slider).getPropertyValue("--items-per-screen")
            )
            let sliderIndex = parseInt(
                getComputedStyle(slider).getPropertyValue("--slider-index")
            )
            const progressBarItemCount = Math.ceil(itemCount / itemsPerScreen)

            if (sliderIndex >= progressBarItemCount) {
                slider.style.setProperty("--slider-index", progressBarItemCount - 1)
                sliderIndex = progressBarItemCount - 1
            }

            for (let i = 0; i < progressBarItemCount; i++) {
                const barItem = document.createElement("div")
                barItem.classList.add("progress-item")
                if (i === sliderIndex) {
                    barItem.classList.add("active")
                }
                progressBar.append(barItem)
            }
        }

        function onHandleClick(handle) {
            const progressBar = handle.closest(".rowslider").querySelector(".progress-bar")
            const slider = handle.closest(".noidungslider").querySelector(".slider")
            const sliderIndex = parseInt(
                getComputedStyle(slider).getPropertyValue("--slider-index")
            )
            const progressBarItemCount = progressBar.children.length
            if (handle.classList.contains("left-handle")) {
                if (sliderIndex - 1 < 0) {
                    slider.style.setProperty("--slider-index", progressBarItemCount - 1)
                    progressBar.children[sliderIndex].classList.remove("active")
                    progressBar.children[progressBarItemCount - 1].classList.add("active")
                } else {
                    slider.style.setProperty("--slider-index", sliderIndex - 1)
                    progressBar.children[sliderIndex].classList.remove("active")
                    progressBar.children[sliderIndex - 1].classList.add("active")
                }
            }

            if (handle.classList.contains("right-handle")) {
                if (sliderIndex + 1 >= progressBarItemCount) {
                    slider.style.setProperty("--slider-index", 0)
                    progressBar.children[sliderIndex].classList.remove("active")
                    progressBar.children[0].classList.add("active")
                } else {
                    slider.style.setProperty("--slider-index", sliderIndex + 1)
                    progressBar.children[sliderIndex].classList.remove("active")
                    progressBar.children[sliderIndex + 1].classList.add("active")
                }
            }
        }

        function throttle(cb, delay = 1000) {
            let shouldWait = false
            let waitingArgs
            const timeoutFunc = () => {
                if (waitingArgs == null) {
                    shouldWait = false
                } else {
                    cb(...waitingArgs)
                    waitingArgs = null
                    setTimeout(timeoutFunc, delay)
                }
            }
            return (...args) => {
                if (shouldWait) {
                    waitingArgs = args
                    return
                }
                cb(...args)
                shouldWait = true
                setTimeout(timeoutFunc, delay)
            }
        }
    </script>
</body>

</html>