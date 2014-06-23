<?php
	include "../admin/xkoneksi/koneksi_mysql.php";
	ob_start();

	if(!empty($_POST['staff_id']))
	{
		$staff_id = $_POST['staff_id'];
		$staff_nama = $_POST['staff_nama'];
		$staff_jabatan = $_POST['staff_jabatan'];
		$staff_alamat = $_POST['staff_alamat'];
		$staff_kontak = $_POST['staff_kontak'];
		$staff_pendidikan = $_POST['staff_pendidikan'];

		$lokasi_file = $_FILES['staff_foto']['tmp_name'];
		$tipe_file = $_FILES['staff_foto']['type'];
		$nama_file = $_FILES['staff_foto']['name'];
		$direktori = "../admin/images/staff/$nama_file";
		$extensi = pathinfo($direktori, PATHINFO_EXTENSION);

		//upload file
		move_uploaded_file($lokasi_file, $direktori);

		
		$sql = "INSERT INTO tb_staff(staff_id,staff_nama,staff_jabatan,staff_alamat,staff_kontak,staff_foto,staff_pendidikan) VALUES ('$staff_id','$staff_nama','$staff_jabatan','$staff_alamat','$staff_kontak','$staff_id.$extensi','$staff_pendidikan');";
		
		$result = mysql_query($sql);
		if($result)
		{
			if(!empty($lokasi_file))
			{
				rename("../admin/images/staff/$nama_file","../admin/images/staff/$staff_id.$extensi");
				header ('Location: ../admin/create_sk.php?message=success');
			}
				

		}
		else
		{
			header ('Location: ../admin/list_staff.php?failed=TRUE');
		}
	}
?>
</body>