<?php
include "../koneksi.php";
$link = koneksi_db();
//$q = strtolower($_GET["q"]);
//if (!$q) return;
$gol_darah = $_GET['gol_darah'];

if($gol_darah=="A "){
	$gol_darah = "A+";
}else if($gol_darah=="B "){
	$gol_darah = "B+";
}else if($gol_darah=="AB "){
	$gol_darah = "AB+";
}else if($gol_darah=="O "){
	$gol_darah = "O+";
}

if($_GET['jenis']=="wb"){
	$jenis = "Whole Blood";
}else if($_GET['jenis']=="pcr"){
	$jenis = "Packed Red Cells";
}else if($_GET['jenis']=="tc"){
	$jenis = "Thrombocyt Concentrate";
}else if($_GET['jenis']=="lp"){
	$jenis = "Liquid Plasma";
}else if($_GET['jenis']=="ffp"){
	$jenis = "Fresh Frozen Plasma";
}else if($_GET['jenis']=="c"){
	$jenis = "Cryoprecipitate";
}else if($_GET['jenis']=="wrc"){
	$jenis = "Washed Red Cells";
}else if($_GET['jenis']=="bc"){
	$jenis = "Buffy Coat";
}

$query = "select * from gol_darah where jenis_darah ='$jenis' and golongan_darah='$gol_darah'";
$result1 = mysqli_query($link,$query);
$hasil = mysqli_fetch_array($result1);

$sql = "SELECT * FROM kantong_darah WHERE kode_barcode LIKE '%".$_GET['query']."%' and id_golongan_darah='".$hasil['ID_GOLONGAN_DARAH']."' and status='tersedia'"; 
 $result    = mysqli_query($link,$sql);
  
 $json = [];
 while($row = $result->fetch_assoc()){
      $json[] = $row['KODE_BARCODE'];
 }

 echo json_encode($json);

?>