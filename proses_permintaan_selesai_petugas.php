<?php
	session_start();
	require('koneksi.php');
	$link = koneksi_db();
	$id = $_GET['id'];
	$jumlah = $_GET['jumlah'];
	$i=0;
	$j=1;

	while($i<$jumlah){
		$i++;
		$barcode[$i] = $_POST['barcode'.$i];
	}
	
	while($j<$i){
		for($j=1;$j<$i;$j++){
			if($barcode[$i]==$barcode[$j]){
				$_SESSION['s_pesan']="Barcode tidak boleh sama";
			}
		}
		$j=1;
		$i--;
	}

	if(!isset($_SESSION['s_pesan'])){
		$i=0;
		while($i<$jumlah){
			$i++;
			$query_status = "insert into status_permintaan value (NULL,'".$_SESSION['s_petugas_id']."','$id','".$barcode[$i]."','selesai',curtime(),curdate())";
			$result_status = mysqli_query($link,$query_status);
		
			$query_kantong_darah = "update kantong_darah set status = 'tidak tersedia' where kode_barcode='".$barcode[$i]."'";
			$result_kantong_darah = mysqli_query($link,$query_kantong_darah);
		}
		
	}


	

	echo ("<script> location.href ='petugas.php?menu=permintaan&action=tampil';</script>");
?>