<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link reL="shortcut icon" href="/img/icon.png">
    <link rel="stylesheet" href="/Styles/index.css">
    <link rel="stylesheet" href="/font/fontawesome-free-6.1.1/fontawesome-free-6.1.1-web/css/all.min.css">
    <title>Netflix Vietnam - Watch TV Shows Online, Watch Movies Online</title>
</head>

<body>
    <!-- header -->
    <section class="noidung">
        <div class="dau">
            <img src="/img/logo.png" alt="Logo">
            <div class="diacau"><i class="fa-solid fa-globe"></i></div>
            <select name="" id="" class="dich">
                <option> &nbsp;&nbsp;&nbsp;&nbsp; Tiếng Việt</option>
                <option> &nbsp;&nbsp;&nbsp;&nbsp; English</option>
            </select>
            <a href="/Php/DangNhap.php">Sign In</a>
        </div>
    </section>
    <section class="banner">
        <img src="/img/Anhnen.jpg" alt="" class="Anhnen">
        <div class="box">
            <div class="heading">
                <h2>Unlimited movies, TV shows, and more.</h2>
                <h5>Watch anywhere. Cancel anytime.</h5>
                <p>Ready to watch? Enter your email to create or restart your membership.</p>
            </div>
            <div class="search">
                <input type="text" name="" placeholder="Email address">
                <button id="nut1" class="nut1" onclick="this.classList.toggle('button--loading')"> <a onclick="hello()" href="/Php/DangNhap.php" class="batdau">Get
                        Started <i class="fa-solid fa-angle-right"></i></a></button>
            </div>
        </div>
    </section>
    <!-- end header -->
    <!-- tv -->
    <section class="part1 reveal">
        <div class="card1">
            <div class="noidung1">
                <h1>Enjoy on your TV.</h1>
                <p>Watch on Smart TVs, Playstation, Xbox, Chromecast, Apple TV, Blu-ray players, and more.</p>
            </div>
            <img src="/img/tv.png" alt="">
            <video src="/video/video-tv-0819.mp4.mp4" autoplay="" playsinline="" muted="" loop=""></video>
        </div>
    </section>
    <!-- end tv -->
    <!-- điện thoại -->
    <section class="part1 reveal">
        <div class="part2">
            <div class="img">
                <div class="vobanh">
                    <div class="benngoai">
                        <div class="the">
                            <div class="noidungani">
                                <div class="anh"><img class="boxshot" src="/img/boxshot.png" alt=""></div>
                                <div class="details">
                                    <span class="name">Stranger Things <br>
                                        <p class="name1">Downloading...</p>
                                    </span>
                                </div>
                            </div>
                            <a href="#"><img class="download" src="/img/download-icon.gif" alt=""></a>
                        </div>
                        <img class="dienthoai" src="/img/mobile-0819.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="noidung2">
                <h1>Download your shows to watch offline.</h1>
                <p>Save your favorites easily and always have something to watch.</p>
            </div>
        </div>
    </section>
    <!-- end điện thoại -->
    <!-- hàng chữ -->
    <section class="part reveal">
        <div class="part2">
            <div class="noidung3">
                <h1>Watch everywhere.</h1>
                <p>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</p>
            </div>
        </div>
    </section>
    <!-- end hàng chữ -->
    <!-- kid -->
    <section class="part reveal">
        <div class="part2">
            <div class="img">
                <img src="/img/kidsValueProp.png" alt="">
            </div>
            <div class="noidung2">
                <h1>Create profiles for kids.</h1>
                <p>Send kids on adventures with their favorite characters in a space made just for them—free with your
                    membership.</p>
            </div>
        </div>
    </section>
    <!-- kid -->
    <!-- VN -->
    <section class="part1 reveal">
        <div class="card1">
            <div class="noidung1">
                <h1>Have an Android Phone? Get our new free plan!</h1>
                <p>Watch a selection of new movies and TV shows without adding any payment details!</p>
                <a href="#">
                    <p class="take">Get the app <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
            <img src="/img/vn.jpg" alt="">
        </div>
    </section>
    <!-- VN -->
    <section class="FAQ__list__container reveal">
        <h1 class="FAQ__heading">Frequently Asked Questions</h1>
        <div class="FAQ__list">
            <!--  Đoạn 1 -->
            <div class="FAQ__accordian">
                <button class="FAQ__title">
                    What is Netflix?<i class="fa-solid fa-plus"></i>
                </button>
                <div class="FAQ__visible">
                    <p>
                        Netflix is a streaming service that offers a wide variety of
                        award-winning TV shows, movies, anime, documentaries and more –
                        on thousands of internet-connected devices.
                    </p>
                    <p>
                        You can watch as much as you want, whenever you want, without a
                        single ad – all for one low monthly price. There's always
                        something new to discover, and new TV shows and movies are added
                        every week!
                    </p>
                </div>
            </div>
            <!--  Đoạn 2 -->
            <div class="FAQ__accordian">
                <button class="FAQ__title">
                    How much does netflix cost?<i class="fa-solid fa-plus"></i>
                </button>
                <div class="FAQ__visible">
                    <p>
                        Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one
                        fixed monthly fee. Plans
                        range from 70,000 ₫ to 260,000 ₫ a month. No extra costs, no contracts.
                    </p>
                </div>
            </div>
            <!--  Đoạn 3 -->
            <div class="FAQ__accordian">
                <button class="FAQ__title">
                    Where can i watch?<i class="fa-solid fa-plus"></i>
                </button>
                <div class="FAQ__visible">
                    <p>
                        Watch anywhere, anytime, on an unlimited number of devices. Sign
                        in with your Netflix account to watch instantly on the web at
                        netflix.com from your personal computer or on any
                        internet-connected device that offers the Netflix app, including
                        smart TVs, smartphones, tablets, streaming media players and
                        game consoles.
                    </p>
                    <p>
                        You can also download your favourite shows with the iOS,
                        Android, or Windows 10 app. Use downloads to watch while you're
                        on the go and without an internet connection. Take Netflix with
                        you anywhere.
                    </p>
                </div>
            </div>
            <!--  Đoạn 4 -->
            <div class="FAQ__accordian">
                <button class="FAQ__title">
                    How do i cancel?<i class="fa-solid fa-plus"></i>
                </button>
                <div class="FAQ__visible">
                    <p>
                        Netflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your
                        account online in two
                        clicks. There are no cancellation fees – start or stop your account anytime.
                    </p>
                </div>
            </div>
            <!--  Đoạn 5 -->
            <div class="FAQ__accordian">
                <button class="FAQ__title">
                    What can i watch on Netflix?<i class="fa-solid fa-plus"></i>
                </button>
                <div class="FAQ__visible">
                    <p>
                        Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning
                        Netflix originals, and
                        more. Watch as much as you want, anytime you want.
                    </p>
                </div>
            </div>
            <!--  Đoạn 6 -->
            <div class="FAQ__accordian">
                <button class="FAQ__title">
                    Is Netflix good for kids?<i class="fa-solid fa-plus"></i>
                </button>
                <div class="FAQ__visible">
                    <p>
                        The Netflix Kids experience is included in your membership to give parents control while kids
                        enjoy family-friendly TV
                        shows and movies in their own space.
                    </p>
                    <p>
                        Kids profiles come with PIN-protected parental controls that let you restrict the maturity
                        rating of content kids can
                        watch and block specific titles you don’t want kids to see.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="banner2 reveal">
        <div class="box">
            <div class="heading">
                <p>Ready to watch? Enter your email to create or restart your membership.</p>
            </div>
            <div class="search">
                <input type="text" name="" placeholder="Email address" value="Email@gmail.com" title="Hello">
                <a href="#">Get Started <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </section>
    <section class="reveal">
        <div class="footer">
            <div class="footercon">
                <div class="flex1">
                    <p>Questions? Contact us.
                    </p>
                    <h5>
                    </h5>
                </div>
                <ul class="list1">
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Investor Relation</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Speed Test</a></li>
                </ul>
                <ul class="list1">
                    <li><a href="">Help Center</a></li>
                    <li><a href="">Jobs</a></li>
                    <li><a href="">Cookie Preferences</a></li>
                    <li><a href="">Legal Notices</a></li>
                </ul>
                <ul class="list1">
                    <li><a href="">Account</a></li>
                    <li><a href="">Ways to Watch</a></li>
                    <li><a href="">Corporate Information</a></li>
                    <li><a href="">Only on Netflix</a></li>
                </ul>
                <ul class="list1">
                    <li><a href="">Media Center</a>
                    </li>
                    <li><a href="">Terms of Use</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="end1">
                <select name="" id="" class="dich2">
                    <option> &nbsp;&nbsp;&nbsp;&nbsp; Tiếng Việt</option>
                    <option> &nbsp;&nbsp;&nbsp;&nbsp; English</option>
                </select>
            </div>
        </div>
        <div class="end">
            <p>
                Copyright © 2022 VLU. Thiện, Duy, Hoàng &nbsp; | Trường Đại học Văn Lang - Cơ sở 3 |
            </p>
            <h2>
            </h2>
        </div>
    </section>
    <script>
        function hello() {
            setTimeout(() => {
                // 👇️ tắt nút 
                location.replace("/html/signin.html")
            }, 2000);
        }
    </script>
</body>
<script src="/js/index.js"> </script>

</html>