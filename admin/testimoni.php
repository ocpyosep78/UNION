<?php
ob_start();
include '../admin/xkoneksi/koneksi.php';
 
if (isset($_POST)) {
    $sql = "INSERT INTO tb_bukutamu VALUE ('$_POST[tamu_id]', '$_POST[tamu_nama]', '$_POST[tamu_email]', '$_POST[tamu_subjek]','$_POST[tamu_isi]')";
    $dbh->exec($sql);
}
 
header("location:../kontak.php?message=success");
?>