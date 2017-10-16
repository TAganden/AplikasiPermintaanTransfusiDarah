<?php
	require('../koneksi.php');
	$link = koneksi_db();
	$id = $_GET['id'];
	$riwayat = $_GET['riwayat'];

	$query_hapus_riwayat = "delete from riwayat_donor where id_riwayat_donor = '$riwayat'";
	$result_hapus_riwayat = mysqli_query($link,$query_hapus_riwayat);

	echo ("<script> location.href ='../petugas.php?menu=pendonor&action=lihat&id=$id';</script>");
?>