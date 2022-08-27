<?php
session_start();
unset($_SESSION['users']);
header("location:/Php/Admin.php");
