<?php 
require_once "function.php";
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * FROM tabel_login WHERE TB_USERNAME='$username' AND TB_PASSWORD='$password'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
$count = mysql_num_rows($result);

if($count == 1){
$_SESSION["username"] = $row["TB_USERNAME"];

header("location: admin.php");
}else{
header("location: login.php?message=0");
}
?>