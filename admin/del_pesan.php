<?php
include '../admin/xkoneksi/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM tb_bukutamu WHERE tamu_id = '$_GET[id]'");
}
header("location:../admin/inbox.php?hapus=success")
?>