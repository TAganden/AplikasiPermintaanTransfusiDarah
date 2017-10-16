<?php
	$stok_baru = $data['STOK_DARAH'] - $data_permintaan['JUMLAH'];
	if($stok_baru>=0){
		$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'diproses',CURTIME(),CURDATE())";
		$res_status = mysqli_query($link,$sql_status);

//		$sql_ubah_stok = "update gol_darah set stok_darah='$stok_baru' where golongan_darah='$gol_darah' and jenis_darah='$jenis_darah'";
//		$res_ubah_stok = mysqli_query($link,$sql_ubah_stok);
		
		$_SESSION['s_pesan'] = "Golongan darah yang akan diproses ".$gol_darah." dengan jenis darah ".$jenis_darah;
	}elseif($stok_baru<0){
		$sql_status = "insert into status_permintaan value(NULL,'".$_SESSION['s_petugas_id']."','$id',NULL,'stok habis',CURTIME(),CURDATE())";
		$res_status = mysqli_query($link,$sql_status);
		
		$_SESSION['s_pesan'] = "Stok golongan darah ".$gol_darah." dengan jenis ".$jenis_darah." tidak tersedia";
	}
	
	echo ("<script> location.href ='petugas.php?menu=permintaan&action=tampil';</script>");
?>