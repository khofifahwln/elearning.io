<?php
include "../lib/koneksi.php";
    if(isset($_POST['button'])){
    mysqli_query($koneksi, "UPDATE pelajaran set  
    materi='$_POST[materi]'
    where id_pelajaran = '$_POST[id_pelajaran]'");

    echo "Data pelajaran telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='pelajaran.php'>";
}
?>