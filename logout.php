<?php
//connect ke database
include 'config.php';

//keluar dari session
session_start();
session_unset();
session_destroy();

//ke direct ke halaman login
header('location:login.php')

?>