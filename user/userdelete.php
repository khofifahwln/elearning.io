<?php
include '../lib/koneksi.php';
$id = $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM user WHERE id='$id'")
or die (mysqli_error($koneksi));

if($query){
    header("Location: user.php");
}else{
    echo "Gagal Menghapus";
}
?>