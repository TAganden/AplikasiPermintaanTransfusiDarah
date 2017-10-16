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
		
			$query_darah = "select * from kantong_darah where kode_barcode='".$barcode[$i]."'";
			$result_darah = mysqli_query($link,$query_darah);
			$data_darah = mysqli_fetch_array($result_darah);
			
			$query = "select * from gol_darah where id_golongan_darah='".$data_darah['ID_GOLONGAN_DARAH']."'";
			$result = mysqli_query($link,$query);
			$data = mysqli_fetch_array($result);
			
			$stok_darah = $data['STOK_DARAH']-1;
			
			$query_update_stok = "update gol_darah set stok_darah='$stok_darah' where id_golongan_darah='".$data_darah['ID_GOLONGAN_DARAH']."'";
			$result_update_stok = mysqli_query($link,$query_update_stok);
			
			$query_kantong_darah = "update kantong_darah set status = 'tidak tersedia' where kode_barcode='".$barcode[$i]."'";
			$result_kantong_darah = mysqli_query($link,$query_kantong_darah);
		}
	}


	

	echo ("<script> location.href ='petugas.php?menu=permintaan&action=tampil';</script>");
?>