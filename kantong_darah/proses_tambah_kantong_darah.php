<?php
	require('../koneksi.php');
	$link = koneksi_db();
	
	$kode_barcode = $_POST['kode_barcode'];
	$id_pendonor = $_POST['id_pendonor'];
	$volume = $_POST['volume'];
	$jenis_darah = $_POST['jenis_darah'];
	$tanggal_pengambilan = $_POST['tanggal_pengambilan'];
	$tanggal_kadaluarsa = $_POST['tanggal_kadaluarsa'];
	$waktu_pengambilan = $_POST['waktu_pengambilan'];
	
	$query_pendonor = "select * from pendonor where pendonor_id='$id_pendonor'";
	$result_pendonor = mysqli_query($link,$query_pendonor);
	$data_pendonor = mysqli_fetch_array($result_pendonor);

	$query_gol_darah = "select * from gol_darah where golongan_darah = '".$data_pendonor['GOLONGAN_DARAH']."' and jenis_darah='$jenis_darah'";
	$result_gol_darah = mysqli_query($link,$query_gol_darah);
	$data_gol_darah = mysqli_fetch_array($result_gol_darah);
	$ketemu = mysqli_num_rows($result_gol_darah);

	if($ketemu==0){
		$stok_darah = 1;
		$query_tambah_gol_darah = "insert into gol_darah value(NULL,'".$data_pendonor['GOLONGAN_DARAH']."','$jenis_darah','$stok_darah')";
		$result_tambah_gol_darah = mysqli_query($link,$query_tambah_gol_darah);
		
		$query_gol_darah = "select * from gol_darah where golongan_darah = '".$data_pendonor['GOLONGAN_DARAH']."' and jenis_darah='$jenis_darah'";
		$result_gol_darah = mysqli_query($link,$query_gol_darah);
		$data_gol_darah = mysqli_fetch_array($result_gol_darah);
		
		$query_tambah_kantong = "insert into kantong_darah value('$kode_barcode','$id_pendonor','".$data_gol_darah['ID_GOLONGAN_DARAH']."','$volume','$tanggal_pengambilan','$waktu_pengambilan','$tanggal_kadaluarsa','tersedia')";
		$result_tambah_kantong = mysqli_query($link,$query_tambah_kantong);
		
	}else if($ketemu>0){
		$query_tambah_kantong = "insert into kantong_darah value('$kode_barcode','$id_pendonor','".$data_gol_darah['ID_GOLONGAN_DARAH']."','$jenis_darah','$volume','$tanggal_pengambilan','$waktu_pengambilan','$tanggal_kadaluarsa','tersedia')";
		$result_tambah_kantong = mysqli_query($link,$query_tambah_kantong);

		$stok_darah = $data_gol_darah['STOK_DARAH'] + 1;

		$query_update_gol_darah = "update gol_darah set stok_darah='$stok_darah' where id_golongan_darah='".$data_gol_darah['ID_GOLONGAN_DARAH']."'";
		$query_update_gol_darah = mysqli_query($link,$query_update_gol_darah);
	}
	
	

	echo ("<script> location.href ='../petugas.php?menu=kantong_darah&action=tampil';</script>");
?>