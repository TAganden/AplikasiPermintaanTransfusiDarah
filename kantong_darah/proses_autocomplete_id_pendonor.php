<?php
include "../koneksi.php";
$link = koneksi_db();
//$q = strtolower($_GET["q"]);
//if (!$q) return;
$sql = "SELECT * FROM pendonor WHERE pendonor_id LIKE '%".$_GET['query']."%'"; 
 $result    = mysqli_query($link,$sql);
  
 $json = [];
 while($row = $result->fetch_assoc()){
      $json[] = $row['PENDONOR_ID'];
 }

 echo json_encode($json);

?>