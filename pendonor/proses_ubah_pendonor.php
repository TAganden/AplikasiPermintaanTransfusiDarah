<?php
require('../koneksi.php');
$link = koneksi_db();

$id_lama = $_GET['id'];
$id = $_POST['id'];
$nama = $_POST['nama'];
$golongan_darah = $_POST['golongan_darah'];
$tempat_lahir = $_POST['tempat_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$no_telp = $_POST['no_telp'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$kode_pos = $_POST['kode_pos'];

$query_ubah_pendonor = "update pendonor set pendonor_id='$id',NAMA='$nama',ALAMAT='$alamat',NO_TELEPON='$no_telp',JENIS_KELAMIN='$jenis_kelamin',TEMPAT_LAHIR='$tempat_lahir',TANGGAL_LAHIR='$tanggal_lahir',GOLONGAN_DARAH='$golongan_darah',KELURAHAN='$kelurahan',KECAMATAN='$kecamatan',RT_RW='$rt/$rw',KODE_POS='$kode_pos',PEKERJAAN='$pekerjaan' where pendonor_id='$id_lama'";
$result_pendonor = mysqli_query($link,$query_ubah_pendonor);

echo ("<script> location.href ='../petugas.php?menu=pendonor&action=tampil';</script>");
?>