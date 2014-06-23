<?php
include '../admin/xkoneksi/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM tb_galeri WHERE gal_id = '$_GET[id]'");
}
header("location:../admin/list_galeri.php?hapus=success")
?>