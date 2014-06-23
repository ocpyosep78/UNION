<?php
	include "../admin/xkoneksi/koneksi_mysql.php";
	ob_start();

	if(!empty($_POST['gal_id']))
	{
		$gal_id = $_POST['gal_id'];
		$gal_judul = $_POST['gal_judul'];
		$gal_tipe = $_POST['gal_tipe'];
		$gal_tanggal = $_POST['gal_tanggal'];
		$gal_caption = $_POST['gal_caption'];

		$lokasi_file = $_FILES['gal_foto']['tmp_name'];
		$tipe_file = $_FILES['gal_foto']['type'];
		$nama_file = $_FILES['gal_foto']['name'];
		$direktori = "../images/galeri/$nama_file";
		$extensi = pathinfo($direktori, PATHINFO_EXTENSION);

		//upload file
		move_uploaded_file($lokasi_file, $direktori);

		
		$sql = "INSERT INTO tb_galeri(gal_id,gal_judul,gal_tipe,gal_tanggal,gal_caption,gal_foto)
			    VALUES ('$gal_id','$gal_judul','$gal_tipe', '$gal_tanggal','$gal_caption','$gal_id.$extensi');";
		
		$result = mysql_query($sql);
		if($result)
		{
			if(!empty($lokasi_file))
			{
				rename("../images/galeri/$nama_file","../images/galeri/$gal_id.$extensi");
				header ('Location: ../admin/list_galeri.php?message=success');
			}	
		}
		else
		{			
				header ('Location: ../admin/add_galery.php');
		}
	}
?>