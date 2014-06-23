<?php
		require_once "../admin/xkoneksi/koneksi_mysql.php";

		$kur_id = $_POST['kur_id'];
		$tahun = $_POST['kur_tahun'];
		$matkul = $_POST['kur_matkul'];
		$semester = $_POST['kur_semester'];
		$sks = $_POST['kur_sks'];
		$prodi = $_POST['kur_prodi'];
		$keterangan = $_POST['kur_keterangan'];
		
		$sql = "INSERT INTO tb_kurikulum VALUES ('$kur_id','$tahun','$matkul','$semester', '$sks', '$keterangan', '$prodi');";
		
		$result = mysql_query($sql);
		if($result)
		{
			header("Location: ../prodi/add_curicullum.php?add=success");
		}
		else
		{
			header('Location: ../prodi/kurikulum_list.php?add=gagal');
		}
	
?>