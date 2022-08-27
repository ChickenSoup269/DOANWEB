<?php
session_start();
unset($_SESSION['user']);
header("location:/Php/DangNhap.php");
