<?php
	include "../admin/xkoneksi/koneksi_mysql.php";
	ob_start();

	if(!empty($_POST['gal_id']))
	{
		$gal_id = $_POST['gal_id'];
		$gal_judul = $_POST['gal_judul'];
		$gal_tipe = $_POST['gal_tipe'];
		$gal_caption = $_POST['gal_caption'];
		$gal_tanggal = $_POST['gal_tanggal'];

		$lokasi_file = $_FILES['gal_foto']['tmp_name'];
		$tipe_file = $_FILES['gal_foto']['type'];
		$nama_file = $_FILES['gal_foto']['name'];

		$direktori = "../images/galeri/$nama_file";
		$result = mysql_query("SELECT * FROM tb_galeri WHERE gal_id='$gal_id'");
		$row = mysql_fetch_array($result);
		$nama_file2 = $row["gal_foto"];
		unlink("../images/galeri/$nama_file2");
		$extensi = pathinfo($direktori, PATHINFO_EXTENSION);

		//upload file
		move_uploaded_file($lokasi_file, $direktori);

		$sql = "UPDATE tb_galeri set gal_judul='$gal_judul', gal_tipe='$gal_tipe', gal_caption='$gal_caption', gal_tanggal='$gal_tanggal', 
				gal_foto='$gal_id.$extensi' WHERE gal_id='$gal_id'";
		
		$result = mysql_query($sql);
		if($result)
		{
			if(!empty($lokasi_file))
			{
				rename("../images/galeri/$nama_file","../images/galeri/$gal_id.$extensi");
				header ('Refresh:0; url=../admin/list_galeri.php?edit=success');
			}
				

		}
		else
		{
			header ('Location: ../admin/edit_gal.php?id=$gal_id');
		}
	}
?>