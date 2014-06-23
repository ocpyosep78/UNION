<?php
	session_start();
	ob_start();
	include '../admin/xkoneksi/koneksi_mysql.php';

	$sql = "SELECT * FROM tb_login WHERE log_username= '$_POST[username]' AND log_password = '$_POST[password]'";
	$result= mysql_query($sql);
	$ketemu = mysql_num_rows($result);
	$ses=mysql_fetch_array($result);

	if ($ketemu > 0) 
	{
		$_SESSION['ses_username'] = $ses['log_username'];
		$_SESSION['ses_password'] = $ses['log_password'];
		header('Location: ../admin/admin.php');
	}
	else
	{
		header('Location: ../admin/login.php?message=0');
	}
?>

