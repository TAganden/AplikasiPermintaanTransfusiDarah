<?php
session_start();
require('koneksi.php');
if(!empty($_POST['bagian'])){
	$id = $_GET['id'];
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
	$query_permintaan = "update permintaan_transfusi set bagian='$bagian',
														ruangan='$ruangan',
														nama_dokter='$nama_dokter',
														diagnosa_sementara='$diagnosa_sementara',
														indikasi_transfusi='$indikasi_tranfusi',
														hb='$hb',
														no_reg='$nomor_register',
														nama_pasien='$nama_penderita',
														umur_pasien='$umur',
														jenis_kelamin='$jenis_kelamin',
														alamat='$alamat',
														golongan_darah='$golongan_darah',
														jenis_darah='$jenis_darah',
														metoda='$metoda',
														jumlah='$jumlah',
														tanggal='$tanggal_permintaan',
														waktu='$waktu_permintaan',
														kebutuhan_darah='$kebutuhan_darah',
														transfusi_sebelumn_tgl='$tanggal_transfusi_sebelumnya',
														transfusi_sebelum_jenis='$jenis_darah_transfusi_sebelumnya',
														transfusi_sebelum_reaksi='$reaksi_transfusi_sebelumnya',
														riwayat_kehamilan='$riwayat_kehamilan_sebelumnya',
														keterangan_tambahan='$keterangan_lainnya'
														where permintaan_id='$id';";
	$result = mysqli_query($link,$query_permintaan);
	
	$query_status = "select * from status_permintaan where permintaan_id='" . $id . "'";
	$result = mysqli_query( $link, $query_status );
	while ( $data_status = mysqli_fetch_array( $result ) ) {
		$id_status = $data_status['ID_STATUS_PERMINTAAN'];
	}
	
		$query_update_status = "update status_permintaan set waktu=curtime(),tanggal=curdate() where id_status_permintaan ='$id_status'";
	$res=mysqli_query($link,$query_update_status);
	
	
	echo ("<script> location.href ='rumahsakit.php?menu=permintaan&action=tampil';</script>");
}
?>