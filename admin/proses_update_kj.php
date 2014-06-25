<?php
	include "../admin/xkoneksi/koneksi_mysql.php";
	ob_start();

	if(!empty($_POST['kj_id']))
	{
		$kj_id = $_POST['kj_id'];
		$kj_nama = $_POST['kj_nama'];
		$kj_alamat = $_POST['kj_alamat'];
		$kj_detail = $_POST['kj_detail'];

		$lokasi_file = $_FILES['kj_foto']['tmp_name'];
		$tipe_file = $_FILES['kj_foto']['type'];
		$nama_file = $_FILES['kj_foto']['name'];

		$direktori = "../prodi/images/kerjasama/$nama_file";
		$result = mysql_query("SELECT * FROM tb_kerjasama WHERE kj_id='$kj_id'");
		$row = mysql_fetch_array($result);
		$nama_file2 = $row["kj_foto"];
		unlink("../prodi/images/kerjasama/$nama_file2");
		$extensi = pathinfo($direktori, PATHINFO_EXTENSION);

		//upload file
		move_uploaded_file($lokasi_file, $direktori);

		$sql = "UPDATE tb_kerjasama set kj_nama='$kj_nama', kj_alamat='$kj_alamat', kj_detail='$kj_detail', 
				kj_foto='$kj_id.$extensi' WHERE kj_id='$kj_id'";
		
		$result = mysql_query($sql);
		if($result)
		{
			if(!empty($lokasi_file))
			{
				rename("../prodi/images/kerjasama/$nama_file","../prodi/images/kerjasama/$kj_id.$extensi");
				header ('Refresh:0; url=../admin/coop_list.php?edit=success');
			}
				

		}
		else
		{
			header ('Location: ../admin/coop_list.php?failed=TRUE');
		}
	}
?>
</body>