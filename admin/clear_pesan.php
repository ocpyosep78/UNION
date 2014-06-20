<?php
include '../admin/xkoneksi/koneksi.php';

    $dbh->exec("DELETE FROM tb_bukutamu");

header("location:../admin/inbox.php?clear=success")
?>