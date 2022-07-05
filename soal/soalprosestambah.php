<?php
include "../lib/koneksi.php";
if (isset ($_POST ['proses'])){ 
    mysqli_query($koneksi,"INSERT INTO soal SET
    idsoal='$_POST[idsoal]',
    id_pelajaran='$_POST[id_pelajaran]',
    namasoal='$_POST[namasoal]',
    linksoal='$_POST[linksoal]'");

    echo "Data Soal Tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='soal.php'>";//untuk kembali ke index.php
}
?>