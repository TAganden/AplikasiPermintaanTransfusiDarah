<?php
session_start();
require('koneksi.php');
$link = koneksi_db();
$id = $_GET['id'];

$query_status = "insert into status_permintaan values(NULL,NULL,'$id',NULL,'dibatalkan',CURTIME(),CURDATE())";
	$result = mysqli_query($link,$query_status);
	echo ("<script> location.href ='rumahsakit.php?menu=permintaan&action=tampil';</script>");
?>