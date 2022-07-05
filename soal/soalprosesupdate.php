<?php
include "../lib/koneksi.php";
    if(isset($_POST['button'])){
    mysqli_query($koneksi, "UPDATE soal set  
    id_pelajaran='$_POST[id_pelajaran]',
    namasoal='$_POST[namasoal]',
    linksoal='$_POST[linksoal]'
    where idsoal = '$_POST[idsoal]'");

    echo "Data soal telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='soal.php'>";
}
?>