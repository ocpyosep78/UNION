<?php
include '../admin/xkoneksi/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM tb_daftar WHERE df_id = '$_GET[id]'");
}
header("location:../berita/reg_list.php?verifikasi=success")
?>