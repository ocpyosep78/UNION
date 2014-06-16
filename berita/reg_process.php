<?php
	include "../admin/xkoneksi/koneksi_mysql.php";
	ob_start();

	if(!empty($_POST['no_reg']))
	{
		$no_reg = $_POST['no_reg'];
		$nama = $_POST['nama'];
		$tmptlhr = $_POST['tmptlhr'];
		$tgllahir = $_POST['tgllahir'];
		$gender = $_POST['gender'];
		$agama = $_POST['agama'];
		$tipesekolah = $_POST['tipesekolah'];
		$jurusan = $_POST['jurusan'];
		$thnlulus = $_POST['thnlulus'];
		$namasekolah = $_POST['namasekolah'];
		$namaayah = $_POST['namaayah'];
		$namaibu = $_POST['namaibu'];
		$kerjaayah = $_POST['kerjaayah'];
		$kerjaibu = $_POST['kerjaibu'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$kodepos = $_POST['kodepos'];
		$prodi = $_POST['prodi'];
		$jenjang = $_POST['jenjang'];
		$kontak = $_POST['kontak'];

		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = $_FILES['foto']['type'];
		$nama_file = $_FILES['foto']['name'];
		$direktori = "../berita/images/reg/$nama_file";
		$extensi = pathinfo($direktori, PATHINFO_EXTENSION);

		//upload file
		move_uploaded_file($lokasi_file, $direktori);

		
		$sql = "INSERT INTO tb_daftar(df_id,df_nama,df_tgllahir,df_tptlahir,df_gender,df_agama,df_tipesekolah,df_jurusan,
							df_thnlulus,df_namasekolah,df_namaayah,df_namaibu,df_kerjaayah,df_kerjaibu,df_alamat,df_kota,
							df_kodepos,df_jenjang,df_prodi,df_foto,df_kontak) 
					VALUES ('$no_reg','$nama','$tgllahir','$tmptlhr','$gender','$agama','$tipesekolah','$jurusan','$thnlulus','$namasekolah',
							'$namaayah','$namaibu','$kerjaayah','$kerjaibu','$alamat','$kota','$kodepos','$jenjang',
							'$prodi','$no_reg.$extensi','$kontak');";
		
		$result = mysql_query($sql);
		if($result)
		{
			if(!empty($lokasi_file))
			{
				rename("../berita/images/reg/$nama_file","../berita/images/reg/$no_reg.$extensi");
				header ('Location: ../berita/pendaftaran.php');
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