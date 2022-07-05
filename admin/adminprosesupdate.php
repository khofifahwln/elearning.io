<?php
include "../lib/koneksi.php";
    if(isset($_POST['proses'])){
    mysqli_query($koneksi, "UPDATE admin set  
    nama_admin='$_POST[nama_admin]',
    email_admin='$_POST[email_admin]',
    password='$_POST[password]',
    no_admin='$_POST[no_admin]'
    where id_admin = '$_POST[id_admin]'");

    echo "Data Admin telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='admin.php'>";
}
?>