<?php
include '../lib/koneksi.php';
$id_pelajaran = $_GET['id_pelajaran'];

$query = mysqli_query($koneksi,"DELETE FROM pelajaran WHERE id_pelajaran='$id_pelajaran'")
or die (mysqli_error($koneksi));

if($query){
    header("Location: pelajaran.php");
}else{
    echo "Gagal Menghapus";
}
?>
