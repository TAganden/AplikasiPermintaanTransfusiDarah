<?php
	require('../koneksi.php');
	$link = koneksi_db();
	$id = $_GET['id'];

	$kode_barcode = $_POST['kode_barcode'];
	$id_pendonor = $_POST['id_pendonor'];
	$volume = $_POST['volume'];
	$jenis_darah = $_POST['jenis_darah'];
	$tanggal_pengambilan = $_POST['tanggal_pengambilan'];
	$tanggal_kadaluarsa = $_POST['tanggal_kadaluarsa'];
	$waktu_pengambilan = $_POST['waktu_pengambilan'];
	$status = $_POST['status'];
	
	//ambil data kantong darah
	$query_kantong = "select * from kantong_darah where kode_barcode='$id'";
	$result_kantong = mysqli_query($link,$query_kantong);
	$data_kantong = mysqli_fetch_array($result_kantong);

	
	$query_pendonor = "select * from pendonor where pendonor_id ='".$id_pendonor."' ";
	$result_pendonor = mysqli_query($link,$query_pendonor);
	$data_pendonor = mysqli_fetch_array($result_pendonor);

	$query_darah = "select * from gol_darah where id_golongan_darah='".$data_kantong['ID_GOLONGAN_DARAH']."'";
	$result_darah = mysqli_query($link,$query_darah);
	$data_darah = mysqli_fetch_array($result_darah);

	$stok_darah_lama = $data_darah['STOK_DARAH'] - 1;

	$query_darah1 = "select * from gol_darah where golongan_darah='".$data_pendonor['GOLONGAN_DARAH']."' and jenis_darah = '$jenis_darah'";
	$result_darah1 = mysqli_query($link,$query_darah1);
	$data_darah1 = mysqli_fetch_array($result_darah1);

	$stok_darah_baru = $data_darah1['STOK_DARAH'] + 1;
	

	if($data_kantong['ID_GOLONGAN_DARAH']!=$data_darah1['ID_GOLONGAN_DARAH']){
		
		$query_kurang_stok = "update gol_darah set stok_darah='$stok_darah_lama' where id_golongan_darah='".$data_kantong['ID_GOLONGAN_DARAH']."'";
		$result_kurang_stok = mysqli_query($link,$query_kurang_stok);
		
		$query_tambah_stok = "update gol_darah set stok_darah='$stok_darah_baru' where id_golongan_darah='".$data_darah1['ID_GOLONGAN_DARAH']."'";
		$result_tambah_stok = mysqli_query($link,$query_tambah_stok);
	}

	$query_update_kantong = "update kantong_darah set kode_barcode='$kode_barcode',PENDONOR_ID='$id_pendonor',ID_GOLONGAN_DARAH='".$data_darah1['ID_GOLONGAN_DARAH']."',jenis_darah='$jenis_darah',VOLUME_DARAH='$volume',TGL_PENGAMBILAN='$tanggal_pengambilan',WAKTU_PENGAMBILAN='$waktu_pengambilan',TGL_KADALUARSA='$tanggal_kadaluarsa',status='$status' where kode_barcode='$id'";
	$result_update = mysqli_query($link,$query_update_kantong);

	if($status=="tidak tersedia"){
		$query = "select * from kantong_darah where kode_barcode='$id'";
		$result = mysqli_query($link,$query);
		$data = mysqli_fetch_array($result);
		
		$query1 = "select * from gol_darah where id_golongan_darah='".$data['ID_GOLONGAN_DARAH']."'";
		$result1 = mysqli_query($link,$query1);
		$data1 = mysqli_fetch_array($result1);
		
		$stok_darah = $data1['STOK_DARAH']-1;
		
		$query2 = "update gol_darah set stok_darah='$stok_darah' where id_golongan_darah='".$data['ID_GOLONGAN_DARAH']."'";
		$result2 = mysqli_query($link,$query2);
	}

	echo ("<script> location.href ='../petugas.php?menu=kantong_darah&action=tampil';</script>");
?>