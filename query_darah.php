<?php	
	$sql_darah = "select * from gol_darah where golongan_darah='".$gol_darah."' and jenis_darah='".$jenis_darah."' and stok_darah>".$data_permintaan['JUMLAH'];
	$res_darah = mysqli_query($link,$sql_darah);
	$ketemu = mysqli_num_rows($res_darah);
	$data = mysqli_fetch_array($res_darah);
?>