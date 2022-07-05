<?php
include "../lib/koneksi.php";
if (isset ($_POST ['button'])){ 
    mysqli_query($koneksi,"INSERT INTO admin SET
    id_admin='$_POST[id_admin]',
    nama_admin='$_POST[nama_admin]',
    email_admin='$_POST[email_admin]',
    password='$_POST[password]',
    no_admin='$_POST[no_admin]'");
}
    echo "Data Admin Tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='admin.php'>";
     ?>
 