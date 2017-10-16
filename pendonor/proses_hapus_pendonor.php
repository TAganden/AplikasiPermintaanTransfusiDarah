<?php
	require('../koneksi.php');
	$link = koneksi_db();
	$id = $_GET['id'];

	$query_hapus_pendonor = "delete from pendonor where pendonor_id = '$id'";
	$result_hapus_pendonor = mysqli_query($link,$query_hapus_pendonor);

	echo ("<script> location.href ='../petugas.php?menu=pendonor&action=tampil';</script>");
?>