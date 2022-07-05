<?php
include "../lib/koneksi.php";
if (isset ($_POST ['proses'])){ 
    mysqli_query($koneksi,"INSERT INTO materi SET
    id_materi='$_POST[id_materi]',
    id_pelajaran='$_POST[id_pelajaran]',
    namapelajaran='$_POST[namapelajaran]',
    nama_materi='$_POST[nama_materi]',
    linkmateri='$_POST[linkmateri]'");

    echo "Data Materi Tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='materi.php'>";//untuk kembali ke index.php
}
?>