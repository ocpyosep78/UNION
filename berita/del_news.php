<?php
include '../admin/xkoneksi/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM tb_berita WHERE brt_id = '$_GET[id]'");
}
header("location:../berita/news_list.php?hapus=success")
?>