<?php
require('../koneksi.php');
$link = koneksi_db();

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

$query_tambah_pendonor = "insert into pendonor value('$id','$nama','$alamat','$no_telp','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$golongan_darah','$kelurahan','$kecamatan','$rt"."/"."$rw','$kode_pos','$pekerjaan')";
$result_pendonor = mysqli_query($link,$query_tambah_pendonor);

echo ("<script> location.href ='../petugas.php?menu=pendonor&action=tampil';</script>");
?>