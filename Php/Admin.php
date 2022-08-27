<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Styles/admin.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/6830/6830335.png" type=" image/x-icon">
    <title>Đăng nhập Admin</title>
</head>

<body>
    <div class="login-wrapper">
        <form action="/include/KTadmin.php" method="POST" class="form" autocomplete="off">
            <img src="/img/software-engineer.png" alt="">
            <h2>Admin Login </h2>
            <div class="input-group">
                <input name="username" autocomplete="off" type="text" required>
                <label for="loginUser">Tên đăng nhập</label>
            </div>
            <div class="input-group">
                <input name="password" autocomplete="off" type="password" required>
                <label for="loginPassword">Mật khẩu</label>
            </div>
            <input name="dangnhap" type="submit" value="Đăng nhập" class="submit-btn">
            <a href="#forgot-pw" class="forgot-pw">Quên mật khẩu?</a>
        </form>

        <div id="forgot-pw">
            <form action="/include/QuenMKAdmin.php" method="POST" class="form">
                <a href="#" class="close">&times;</a>
                <h2>Tạo mật khẩu mới</h2>
                <div class="input-group">
                    <input name="username" type="text" name="" id="" required>
                    <label for="">Tên tài khoản</label>
                </div>
                <div class="input-group">
                    <input name="pass_new" type="password" name="" id="" required>
                    <label for="">Mật khẩu mới</label>
                </div>
                <div class="input-group">
                    <input name="nhaplai_pass" type="password" name="" id="" required>
                    <label for="">Nhập lại mật khẩu mới</label>
                </div>
                <input name="doimk" type="submit" value="Đổi" class="submit-btn">
            </form>
        </div>
    </div>
</body>

</html>