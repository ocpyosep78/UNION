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
		$extensi = pathinfo($direktori, PATHINFO_EXTENSION);

		//upload file
		move_uploaded_file($lokasi_file, $direktori);

		
		$sql = "INSERT INTO tb_kerjasama(kj_id,kj_nama,kj_alamat,kj_detail,kj_foto)
			    VALUES ('$kj_id','$kj_nama','$kj_alamat','$kj_detail','$kj_id.$extensi');";
		
		$result = mysql_query($sql);
		if($result)
		{
			if(!empty($lokasi_file))
			{
				rename("../prodi/images/kerjasama/$nama_file","../prodi/images/kerjasama/$kj_id.$extensi");
				header ('Location: ../berita/create_kj.php?tambah=success');
			}
				

		}
		else
		{
			echo "<center><h1>Gagal Menambakan</h1><br>";
			echo "Error : ".mysql_error();
			//echo "<br>Kembali<br>
			//	  <a herf='index.php?menu=mata_kuliah&action=tampil'>Link ini</a></center>>";
		}
	}
?>
</body>