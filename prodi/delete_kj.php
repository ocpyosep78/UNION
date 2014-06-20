<?php
include '../admin/xkoneksi/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM tb_kerjasama WHERE kj_id = '$_GET[id]'");
}
header("location:../admin/coop_list.php?hapus=success")
?>