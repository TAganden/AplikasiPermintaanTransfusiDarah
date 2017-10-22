<?php
session_start();
require('../koneksi.php');
$link = koneksi_db();

$tanggal = $_POST['tanggal'];
$rumah_sakit_id = $_POST['rumah_sakit'];
$golongan_darah = $_POST['golongan_darah'];
$barcode = $_POST['barcode'];

if($_POST['jenis_darah']=="wb"){
	$jenis_darah = "Whole Blood";
}else if($_POST['jenis_darah']=="pcr"){
	$jenis_darah = "Packed Red Cells";
}else if($_POST['jenis_darah']=="tc"){
	$jenis_darah = "Thrombocyt Concentrate";
}else if($_POST['jenis_darah']=="lp"){
	$jenis_darah = "Liquid Plasma";
}else if($_POST['jenis_darah']=="ffp"){
	$jenis_darah = "Fresh Frozen Plasma";
}else if($_POST['jenis_darah']=="c"){
	$jenis_darah = "Cryoprecipitate";
}else if($_POST['jenis_darah']=="wrc"){
	$jenis_darah = "Washed Red Cells";
}else if($_POST['jenis_darah']=="bc"){
	$jenis_darah = "Buffy Coat";
}


$i = sizeof($barcode)-1;
$j = 0;

while($j<$i){
		for($j=0;$j<$i;$j++){
			if($barcode[$i]==$barcode[$j]){
				$_SESSION['s_pesan']="Barcode tidak boleh sama";
			}
		}
		$j=0;
		$i--;
	}

$stok_lama = sizeof($barcode);
$i = sizeof($barcode)-1;
$j = 0;
if(!isset($_SESSION['s_pesan'])){
	$query_ambil_stok = "select * from gol_darah where golongan_darah='$golongan_darah' and jenis_darah='$jenis_darah'";
	$result_ambil_stok = mysqli_query($link,$query_ambil_stok);
	$data_ambil_stok = mysqli_fetch_array($result_ambil_stok);
	
	$stok_baru = $data_ambil_stok['STOK_DARAH']-$stok_lama;
	
	$query_update_stok = "update gol_darah set stok_darah='$stok_baru' where id_golongan_darah='".$data_ambil_stok['ID_GOLONGAN_DARAH']."'";
	$result_update_stok = mysqli_query($link,$query_update_stok);
	
	while($j<=$i){
		$query_tambah_formulir = "insert into formulir_bdrs values(NULL,'".$data_ambil_stok['ID_GOLONGAN_DARAH']."','$rumah_sakit_id','".$barcode[$j]."','$tanggal')";
		$result_tambah_formulir = mysqli_query($link,$query_tambah_formulir);
		
		$query_update_status_barcode = "update kantong_darah set status='tidak tersedia' where kode_barcode='".$barcode[$j]."'";
		$result_update_status_barcode = mysqli_query($link,$query_update_status_barcode);
		
		$j++;
	}
}

echo ("<script> location.href ='../petugas.php?menu=formulir&action=tampil';</script>");
//foreach ($barcode as $index => $value) {
//	echo ($index + 1) . '. ' . $value . '<br/>';
//}
?>