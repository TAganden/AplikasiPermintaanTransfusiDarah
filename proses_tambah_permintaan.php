<?php
session_start();
require('koneksi.php');
if(!empty($_POST['bagian'])){
	$bagian = $_POST['bagian'];
	$nama_dokter = $_POST['nama_dokter'];
	$ruangan = $_POST['ruangan'];
	$diagnosa_sementara = $_POST['diagnosa_sementara'];
	$indikasi_tranfusi = $_POST['indikasi_tranfusi'];
	$nama_penderita = $_POST['nama_penderita'];
	$nomor_register = $_POST['nomor_register'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$umur = $_POST['umur'];
	$hb = $_POST['hb'];
	$alamat = $_POST['alamat'];
	$tanggal_permintaan = $_POST['tanggal_permintaan'];
	$waktu_permintaan = $_POST['waktu_permintaan'];
	$jenis_darah = $_POST['jenis_darah'];
	$metoda = $_POST['metoda'];
	$golongan_darah = $_POST['golongan_darah'];
	$jumlah = $_POST['jumlah'];
	$kebutuhan_darah = $_POST['kebutuhan_darah'];
	$tanggal_transfusi_sebelumnya = $_POST['tanggal_transfusi_sebelumnya'];
	$jenis_darah_transfusi_sebelumnya = $_POST['jenis_darah_transfusi_sebelumnya'];
	$reaksi_transfusi_sebelumnya = $_POST['reaksi_transfusi_sebelumnya'];
	$riwayat_kehamilan_sebelumnya = $_POST['riwayat_kehamilan_sebelumnya'];
	$keterangan_lainnya = $_POST['keterangan_lainnya'];
	
	$link = koneksi_db();
	$query_permintaan = "insert into permintaan_transfusi values(NULL,'".$_SESSION['s_rumah_sakit_id']."','$bagian','$ruangan','$nama_dokter','$diagnosa_sementara','$indikasi_tranfusi','$hb','$nomor_register','$nama_penderita','$umur','$jenis_kelamin','$alamat','$golongan_darah','$jenis_darah','$metoda','$jumlah','$tanggal_permintaan','$waktu_permintaan','$kebutuhan_darah','$tanggal_transfusi_sebelumnya','$jenis_darah_transfusi_sebelumnya','$reaksi_transfusi_sebelumnya','$riwayat_kehamilan_sebelumnya','$keterangan_lainnya');";
	$result = mysqli_query($link,$query_permintaan);
	
	$query_cari_id_permintaan = "select * from permintaan_transfusi";
	$result1 = mysqli_query($link,$query_cari_id_permintaan);
	while($data = mysqli_fetch_array($result1)){
		$permintaan_id = $data['PERMINTAAN_ID'];
	}
	
	$query_status = "insert into status_permintaan values(NULL,NULL,'$permintaan_id',NULL,'menunggu diproses',CURTIME(),CURDATE())";
	$result2 = mysqli_query($link,$query_status);
	echo ("<script> location.href ='rumahsakit.php?menu=permintaan&action=tampil';</script>");
}
?>