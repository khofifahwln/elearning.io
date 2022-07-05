<?php
include '../lib/koneksi.php';
$idkomentar = $_GET['idkomentar'];

$query = mysqli_query($koneksi,"DELETE FROM komentar WHERE idkomentar='$idkomentar'")
or die (mysqli_error($koneksi));

if($query){
    header("Location: komentar.php");
}else{
    echo "Gagal Menghapus";
}
?>