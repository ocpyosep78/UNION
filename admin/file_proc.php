<?php
include ("../admin/xkoneksi/koneksi_mysql.php");

if(isset($_POST['submit'])!="")
{	
  $file_id=$_POST['file_id'];
  $file_nama=$_POST['file_nama'];
  $file_tipe=$_POST['file_tipe'];
  $file_keterangan=$_POST['file_keterangan'];
  $name=$_FILES['file_file']['name'];
  $size=$_FILES['file_file']['size'];
  $type=$_FILES['file_file']['type'];
  $temp=$_FILES['file_file']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"../admin/files/".$name);
  $insert=mysql_query("INSERT INTO tb_file(file_id,file_nama,file_tipe,file_keterangan,file_file)
  		  values('$file_id','$file_nama','$file_tipe','$file_keterangan','$name')");

   if($insert)
   {
	   header("location: ../admin/list_file.php?upload=success");
	}
	else{
	   header("location: ../admin/list_file.php?failed=TRUE");
	}
}
?>