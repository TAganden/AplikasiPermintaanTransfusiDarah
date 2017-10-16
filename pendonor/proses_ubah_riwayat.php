<?php
	require('../koneksi.php');
	$link = koneksi_db();
	$id = $_GET['id'];
	$alamat = $_POST['alamat'];
	$tanggal = $_POST['tanggal'];
	$riwayat = $_GET['riwayat'];

	$query_ubah_riwayat = "update riwayat_donor set alamat='$alamat', tanggal='$tanggal' where id_riwayat_donor='$riwayat' ";
	$result_ubah_riwayat = mysqli_query($link,$query_ubah_riwayat);

	echo ("<script> location.href ='../petugas.php?menu=pendonor&action=lihat&id=$id';</script>");
?>