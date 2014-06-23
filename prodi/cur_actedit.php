<?php
include '../admin/xkoneksi/koneksi.php';
 
if (isset($_POST)) {
    $sql = "UPDATE tb_kurikulum SET 
    							kur_tahun = '$_POST[kur_tahun]',
								kur_matkul='$_POST[kur_matkul]',
                                kur_semester = '$_POST[kur_semester]',
                                kur_sks = '$_POST[kur_sks]',
                                kur_keterangan  = '$_POST[kur_keterangan]',
                                kur_prodi  = '$_POST[kur_prodi]'
								WHERE kur_id = '$_POST[id]' ";
    $dbh->exec($sql);
}
 
header("location:../prodi/kurikulum_list.php?edit=success");
?>