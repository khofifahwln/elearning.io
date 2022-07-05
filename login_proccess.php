<?php
if (isset($_POST['login'])) {
include "lib/koneksi.php";
session_start();
$email_admin = $_POST['email_admin'];
$password = $_POST['password'];
// Hashing

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE
email_admin='$email_admin' && password='$password'");
$data = mysqli_fetch_array($query);
if (mysqli_num_rows($query) == 1) {
$_SESSION['nama_admin'] = $data['nama_admin'];
$_SESSION['success'] = "Welcome " . $_SESSION['nama_admin'] . " to the Dashboard Page";
header("Location:db/index.php");
} else {
$_SESSION['danger'] = "Login failed, wrong password";
header("Location:index.php");
}
}