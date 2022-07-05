<?php
include "../lib/koneksi.php";
if (isset ($_POST ['proses'])){ 
    mysqli_query($koneksi,"INSERT INTO pelajaran SET
    id_pelajaran='$_POST[id_pelajaran]',
    materi='$_POST[materi]'");

    echo "Data Pelajaran Tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='pelajaran.php'>";//untuk kembali ke index.php
}
?>