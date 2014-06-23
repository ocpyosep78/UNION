<?php
require "../admin/xkoneksi/koneksi_mysql.php";

$id = $_GET["id"];
$result = mysql_query("SELECT * FROM tb_staff WHERE staff_id='$id'");
$row = mysql_fetch_array($result);
$nama_file = $row["staff_foto"];
$direktori = "../admin/images/staff/$nama_file";
if(file_exists($direktori) && is_writable($direktori)){
    unlink($direktori);
}

mysql_query("DELETE FROM tb_staff WHERE staff_id='$id'");
header("Location: ../admin/list_staff.php?delete=success");
?>