<?php
include '../lib/koneksi.php';
$idsoal = $_GET['idsoal'];

$query = mysqli_query($koneksi,"DELETE FROM soal WHERE idsoal='$idsoal'")
or die (mysqli_error($koneksi));

if($query){
    header("Location: soal.php");
}else{
    echo "Gagal Menghapus";
}
?>