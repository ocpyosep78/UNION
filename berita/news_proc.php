<?php
	include "../admin/xkoneksi/koneksi_mysql.php";
	ob_start();

	if(!empty($_POST['brt_id']))
	{
		$brt_id = $_POST['brt_id'];
		$brt_judul = $_POST['brt_judul'];
		$brt_kategori = $_POST['brt_kategori'];
		$brt_isi = $_POST['brt_isi'];

		$lokasi_file = $_FILES['brt_gambar']['tmp_name'];
		$tipe_file = $_FILES['brt_gambar']['type'];
		$nama_file = $_FILES['brt_gambar']['name'];
		$direktori = "../berita/images/news/$nama_file";
		$extensi = pathinfo($direktori, PATHINFO_EXTENSION);

		//upload file
		move_uploaded_file($lokasi_file, $direktori);

		
		$sql = "INSERT INTO tb_berita(brt_id,brt_judul,brt_kategori,brt_isi,brt_gambar)
			    VALUES ('$brt_id','$brt_judul','$brt_kategori','$brt_isi','$brt_id.$extensi');";
		
		$result = mysql_query($sql);
		if($result)
		{
			if(!empty($lokasi_file))
			{
				rename("../berita/images/news/$nama_file","../berita/images/news/$brt_id.$extensi");
				header ('Location: ../berita/create_news.php?buat=success');
			}	
		}
		else
		{			
				header ('Location: ../berita/create_news.php');
		}
	}
?>