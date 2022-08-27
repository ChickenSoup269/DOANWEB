<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập và Đăng ký</title>
    <link rel="shortcut icon" href="/img/icon.png">
    <link rel="stylesheet" href="/Styles/Fromdangnhap.css" />
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="/include/KTSUBMIT.php" method="POST" autocomplete="off" class="sign-in-form">
                        <div class="logo">
                            <img src="/img/icon.png" alt="easyclass" />
                            <h4>Netflix</h4>
                        </div>
                        <div class="heading">
                            <h2>Đăng Nhập</h2>
                            <h6>Chưa có tài khoản?</h6>
                            <a href="#" class="toggle">Đăng ký ngay</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input name="username" type="text" minlength="1" class="input-field" autocomplete="off" required />
                                <label>Tên tài khoản</label>
                            </div>
                            <div class="input-wrap">
                                <input name="password" type="password" minlength="1" class="input-field" autocomplete="off" required />
                                <label>Mật khẩu</label>
                            </div>
                            <input name="dangnhap" type="submit" value="Đăng nhập" class="sign-btn" />
                            <p class="text">
                                Bạn muốn đổi mật khẩu?
                                <a href="ThaydoiMK.php">Đổi ngay</a> hoặc <a href="QuenMK.php">Quên mật khẩu?</a>
                                <br>
                                Bạn là Admin?
                                <a href="Admin.php">Đăng nhập ngay</a>
                            </p>
                        </div>
                    </form>
                    <form action="/include/dangky.php" method="POST" autocomplete="off" class="sign-up-form">
                        <div class="logo">
                            <img src="/img/icon.png" alt="easyclass" />
                            <h4>Netflix</h4>
                        </div>
                        <div class="heading">
                            <h2>Đăng Ký</h2>
                            <h6>Đã có tài khoản?</h6>
                            <a href="#" class="toggle">Đăng nhập</a>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input name="username" type="text" minlength="1" class="input-field" autocomplete="off" required />
                                <label>Tên tài khoản</label>
                            </div>

                            <div class="input-wrap">
                                <input name="Email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Nhập địa chỉ Email" type="text" class="input-field" autocomplete="off" required />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input name="password" type="password" class="input-field" autocomplete="off" required />
                                <label>Mật khẩu</label>
                            </div>

                            <div class="input-wrap">
                                <input name="nhaplaimatkhau" type="password" minlength="1" class="input-field" autocomplete="off" required />
                                <label>Nhập lại mật khẩu</label>
                            </div>
                            <input name="dangky" type="submit" value="Đăng ký ngay" class="sign-btn" />
                            <p class="text">
                                Bằng cách đăng ký, tôi đồng ý với
                                <a href="#">Điều khoản dịch vụ</a> và
                                <a href="#">Chính sách quyền riêng tư</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="https://isbpanthernation.com/wp-content/uploads/2020/10/netflix.gif" class="image img-1 show" alt="" />
                        <img src="https://i.pinimg.com/originals/5e/92/76/5e9276c182bff471f51be698f8e61086.gif" class="image img-2" alt="" />
                        <img src="https://images.ctfassets.net/4cd45et68cgf/pz16SvItQveXloEyhwNar/8ead337e84a1529f0a403098e1064be6/NGAMES_BOLT_936x622.gif?w=2560" class="image img-3" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Có nhiều phim hay cho bạn lựa chọn</h2>
                                <h2>Cùng gia đình xem phim</h2>
                                <h2>Có tất cả game bạn cần</h2>
                            </div>
                        </div>
                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Javascript file -->
    <script>
        const inputs = document.querySelectorAll(".input-field");
        const toggle_btn = document.querySelectorAll(".toggle");
        const main = document.querySelector("main");
        const bullets = document.querySelectorAll(".bullets span");
        const images = document.querySelectorAll(".image");

        inputs.forEach((inp) => {
            inp.addEventListener("focus", () => {
                inp.classList.add("active");
            });
            inp.addEventListener("blur", () => {
                if (inp.value != "") return;
                inp.classList.remove("active");
            });
        });

        toggle_btn.forEach((btn) => {
            btn.addEventListener("click", () => {
                main.classList.toggle("sign-up-mode");
            });
        });

        function moveSlider() {
            let index = this.dataset.value;

            let currentImage = document.querySelector(`.img-${index}`);
            images.forEach((img) => img.classList.remove("show"));
            currentImage.classList.add("show");

            const textSlider = document.querySelector(".text-group");
            textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

            bullets.forEach((bull) => bull.classList.remove("active"));
            this.classList.add("active");
        }

        bullets.forEach((bullet) => {
            bullet.addEventListener("click", moveSlider);
        });
    </script>
</body>

</html>