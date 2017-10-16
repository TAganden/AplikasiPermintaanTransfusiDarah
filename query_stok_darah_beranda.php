<?php
$query = "select * from gol_darah where golongan_darah='$gol_darah' and jenis_darah='$jenis_darah'";
$result = mysqli_query( $link, $query );
$data = mysqli_fetch_array( $result );
echo "<center>".$data[ 'STOK_DARAH' ]."</center>";
?>