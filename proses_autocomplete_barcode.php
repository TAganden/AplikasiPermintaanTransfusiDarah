<?php
include "koneksi.php";
$link = koneksi_db();
//$q = strtolower($_GET["q"]);
//if (!$q) return;
$term = trim(strip_tags($_GET['term']));

$query = "select * from kantong_darah where kode_barcode LIKE '%$term%'";

$sql = mysqli_query($link,$query);

while($row = mysqli_fetch_array($sql)) {
	$row['value']=htmlentities(stripslashes($row['KODE_BARCODE']));
    $row['id']=(int)$row['Code'];
//buat array yang nantinya akan di konversi ke json
    $row_set[] = $row;
}
echo json_encode($row_set);

?>