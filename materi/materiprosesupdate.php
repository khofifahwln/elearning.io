<?php
include "../lib/koneksi.php";
    if(isset($_POST['button'])){
    mysqli_query($koneksi, "UPDATE materi set  
    id_pelajaran='$_POST[id_pelajaran]',
    namapelajaran='$_POST[namapelajaran]',
    nama_materi='$_POST[nama_materi]',
    linkmateri='$_POST[linkmateri]'
    where id_materi = '$_POST[id_materi]'");

    echo "Data materi telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='materi.php'>";
}
?>