<?php
session_start();
unset($_SESSION['USER_LOGIN']);
unset($_SESSION['username']);;
unset($_SESSION['password']);
header('location:index.php');
?>