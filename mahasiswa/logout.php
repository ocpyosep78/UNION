<?php 
	session_start(); 
	session_destroy();
    header('Location:../mahasiswa/mahasiswa.php?logout=true');
?>