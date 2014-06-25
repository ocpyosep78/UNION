<?php
include '../admin/xkoneksi/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM tb_file WHERE file_id = '$_GET[id]'");
}
header("location:../admin/list_file.php?delete=success")
?>