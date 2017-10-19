<?php
	session_start();
	require('../koneksi.php');
	$link = koneksi_db();

	if(isset($_POST['submit'])){
		$nama_acara = $_POST['nama_acara'];
		$tanggal = $_POST['tanggal'];
		$waktu = $_POST['waktu'];
		$alamat = $_POST['alamat'];
		
		$query_tambah = "insert into kegiatan_donor value(NULL,'".$_SESSION['s_petugas_id']."','$nama_acara','$tanggal','$waktu','$alamat')";
		$result_tambah = mysqli_query($link,$query_tambah);
	}

	echo ("<script> location.href ='../petugas.php?menu=kegiatan_donor&action=tampil';</script>");
?>