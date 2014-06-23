<?php
include '../admin/xkoneksi/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM tb_kurikulum WHERE kur_id = '$_GET[id]'");
}
header("location:../prodi/kurikulum_list.php?delete=success")
?>