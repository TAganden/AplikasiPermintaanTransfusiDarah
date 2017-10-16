<?php
	require('../koneksi.php');
	$link = koneksi_db();
	$id = $_GET['id'];
	$alamat = $_POST['alamat'];
	$tanggal = $_POST['tanggal'];

	$query_tambah_riwayat = "insert into riwayat_donor value(NULL,'$id','$alamat','$tanggal')";
	$result_tambah_riwayat = mysqli_query($link,$query_tambah_riwayat);

	echo ("<script> location.href ='../petugas.php?menu=pendonor&action=lihat&id=$id';</script>");
?>