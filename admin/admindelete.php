<?php
include '../lib/koneksi.php';
$id_admin = $_GET['id_admin'];

$query = mysqli_query($koneksi,"DELETE FROM admin WHERE id_admin='$id_admin'")
or die (mysqli_error($koneksi));

if($query){
    header("Location: admin.php");
}else{
    echo "Gagal Menghapus";
}
?>