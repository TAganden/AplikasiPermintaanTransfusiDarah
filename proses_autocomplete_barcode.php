<?php
include "koneksi.php";
$link = koneksi_db();
//$q = strtolower($_GET["q"]);
//if (!$q) return;
$id = $_GET['id'];
$query = "select * from permintaan_transfusi where permintaan_id='$id'";
$res = mysqli_query($link,$query);
$data = mysqli_fetch_array($res);

$sql = "SELECT kode_barcode  FROM kantong_darah WHERE kode_barcode LIKE '%".$_GET['query']."%' and status='tersedia' and jenis_darah='".$data['JENIS_DARAH']."'";
 $result    = mysqli_query($link,$sql);
  
 $json = [];
 while($row = $result->fetch_assoc()){
      $json[] = $row['kode_barcode'];
 }

 echo json_encode($json);

?>