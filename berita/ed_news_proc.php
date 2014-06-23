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
		$result = mysql_query("SELECT * FROM tb_berita WHERE brt_id='$brt_id'");
		$row = mysql_fetch_array($result);
		$nama_file2 = $row["brt_gambar"];
		unlink("../berita/images/news/$nama_file2");
		$extensi = pathinfo($direktori, PATHINFO_EXTENSION);

		//upload file
		move_uploaded_file($lokasi_file, $direktori);

		$sql = "UPDATE tb_berita set brt_judul='$brt_judul', brt_judul='$brt_judul', brt_kategori='$brt_kategori', brt_isi='$brt_isi', 
				brt_gambar='$brt_id.$extensi' WHERE brt_id='$brt_id'";
		
		$result = mysql_query($sql);
		if($result)
		{
			if(!empty($lokasi_file))
			{
				rename("../berita/images/news/$nama_file","../berita/images/news/$brt_id.$extensi");
				header ('Refresh:0; url=../berita/news_list.php?edit=success');
			}
				

		}
		else
		{
			header ('Location: ../berita/ed_news_proc.php?id=$brt_id');
		}
	}
?>