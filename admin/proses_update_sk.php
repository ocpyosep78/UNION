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
		$result = mysql_query("SELECT * FROM tb_staff WHERE staff_id='$staff_id'");
		$row = mysql_fetch_array($result);
		$nama_file2 = $row["staff_foto"];
		unlink("../admin/images/staff/$nama_file2");
		$extensi = pathinfo($direktori, PATHINFO_EXTENSION);

		//upload file
		move_uploaded_file($lokasi_file, $direktori);

		$sql = "UPDATE tb_staff set staff_nama='$staff_nama', staff_jabatan='$staff_jabatan', staff_alamat='$staff_alamat', staff_kontak='$staff_kontak', staff_pendidikan='$staff_pendidikan', staff_foto='$staff_id.$extensi' WHERE staff_id='$staff_id'";
		
		$result = mysql_query($sql);
		if($result)
		{
			if(!empty($lokasi_file))
			{
				rename("../admin/images/staff/$nama_file","../admin/images/staff/$staff_id.$extensi");
				header ('Refresh:0; url=../admin/list_staff.php?edit=success');
			}
				

		}
		else
		{
			header ('Location: ../admin/edit_sk.php?id=$staff_id');
		}
	}
?>
</body>