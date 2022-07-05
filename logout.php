<?php
session_start();
unset($_SESSION['nama_admin']);
$_SESSION['danger'] = "Logout Successful";
header("Location:index.php");