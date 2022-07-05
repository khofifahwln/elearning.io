<?php
include '../lib/koneksi.php';
$id_materi = $_GET['id_materi'];

$query = mysqli_query($koneksi,"DELETE FROM materi WHERE id_materi='$id_materi'")
or die (mysqli_error($koneksi));

if($query){
    header("Location: materi.php");
}else{
    echo "Gagal Menghapus";
}
?>