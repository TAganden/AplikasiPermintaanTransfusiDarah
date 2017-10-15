<?php
include "koneksi.php";
$link = koneksi_db();
$id = $_GET['id'];
//$q = strtolower($_GET["q"]);
//if (!$q) return;
$sql = "SELECT kode_barcode  FROM kantong_darah WHERE kode_barcode LIKE '%".$_GET['query']."%' and status='tersedia' and id_golongan_darah='$id' "; 
 $result    = mysqli_query($link,$sql);
  
 $json = [];
 while($row = $result->fetch_assoc()){
      $json[] = $row['kode_barcode'];
 }

 echo json_encode($json);

?>