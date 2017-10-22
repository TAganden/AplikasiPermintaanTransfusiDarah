<script type="text/javascript">
	function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
		var waktu = new Date(); //membuat object date berdasarkan waktu saat 
		var sh = waktu.getHours() + ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
		var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
		var ss = waktu.getSeconds() + ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
		document.getElementById( "clock" ).innerHTML = ( sh.length == 1 ? "0" + sh : sh ) + ":" + ( sm.length == 1 ? "0" + sm : sm ) + ":" + ( ss.length == 1 ? "0" + ss : ss );
	}
</script>
<?php
require( 'koneksi.php' );
$link = koneksi_db();
?>
<br>
<strong>Stok Darah Terbaru<br>
			Tanggal : <?php echo $tgl; ?><br>
			Waktu : <body onload="tampilkanwaktu(); setInterval('tampilkanwaktu()', 1000);"><span id="clock"></span></strong><br>
<br>

<table class="table table-bordered">
	<tr>
		<td rowspan="2" class="col-md-2"></td>
		<td colspan="8">
			<center>GOLONGAN DARAH</center>
		</td>
	</tr>
	<tr>

		<td class="col-md-1">
			<center>A+</center>
		</td>
		<td class="col-md-1">
			<center>A-</center>
		</td>
		<td class="col-md-1">
			<center>B+</center>
		</td>
		<td class="col-md-1">
			<center>B-</center>
		</td>
		<td class="col-md-1">
			<center>AB+</center>
		</td>
		<td class="col-md-1">
			<center>AB-</center>
		</td>
		<td class="col-md-1">
			<center>O+</center>
		</td>
		<td class="col-md-1">
			<center>O-</center>
		</td>

	</tr>
	<tr>
		<td>
			Whole Blood
		</td>
		<td>
			<?php
			$gol_darah = "A+";
			$jenis_darah = "Whole Blood";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "A-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Packed Red Cells
		</td>
		<td>
			<?php
			$gol_darah = "A+";
			$jenis_darah = "Packed Red Cells";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "A-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Thrombocyt Concentrate
		</td>
		<td>
			<?php
			$gol_darah = "A+";
			$jenis_darah = "Thrombocyt Concentrate";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "A-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Liquid Plasma
		</td>
		<td>
			<?php
			$gol_darah = "A+";
			$jenis_darah = "Liquid Plasma";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "A-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Fresh Frozen Plasma
		</td>
		<td>
			<?php
			$gol_darah = "A+";
			$jenis_darah = "Fresh Frozen Plasma";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "A-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Cryoprecipitate
		</td>
		<td>
			<?php
			$gol_darah = "A+";
			$jenis_darah = "Cryoprecipitate";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "A-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Whased Red Cells
		</td>
		<td>
			<?php
			$gol_darah = "A+";
			$jenis_darah = "Whased Red Cells";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "A-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
	</tr>
	<tr>
		<td>
			Buffy Coat
		</td>
		<td>
			<?php
			$gol_darah = "A+";
			$jenis_darah = "Buffy Coat";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "A-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "B-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "AB-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O+";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
		<td>
			<?php

			$gol_darah = "O-";
			require( 'query_stok_darah_beranda.php' );
			?>
		</td>
	</tr>
</table>


<br>
<?php
	if(isset($_SESSION['s_petugas_id'])){
?>
	<table class="table table-bordered table-striped">
	<tr>
		<td class="col-md-1">
			<center><strong>No</strong>
			</center>
		</td>
		<td class="col-md-3">
			<center><strong>Nama Pasien</strong>
			</center>
		</td>
		<td class="col-md-2">
			<center><strong>Rumah Sakit</strong>
			</center>
		</td>
		<td class="col-md-1">
			<center><strong>Gol. Darah</strong>
			</center>
		</td>
		<td class="col-md-2">
			<center><strong>Tanggal</strong>
			</center>
		</td>
		<td class="col-md-1">
			<center><strong>Waktu</strong>
			</center>
		</td>
		<td class="col-md-2">
			<center><strong>Status</strong>
			</center>
		</td>
	</tr>

	<?php
	$query_permintaan = "SELECT * FROM `permintaan_transfusi` ORDER BY PERMINTAAN_ID DESC LIMIT 5";
	$res = mysqli_query( $link, $query_permintaan );
	$no = 0;
	while ( ( $data = mysqli_fetch_array( $res ) ) ) {

		$no_barcode = 0;
		//mengambil status dari tabel status_permintaan
		$query_status = "select * from status_permintaan where permintaan_id='" . $data[ 'PERMINTAAN_ID' ] . "'";
		$result = mysqli_query( $link, $query_status );
		while ( $data_status = mysqli_fetch_array( $result ) ) {
			$status = $data_status[ 'NAMA' ];
		}

		$query_darah = "select * from gol_darah";
		$result_darah = mysqli_query( $link, $query_darah );
		$data_darah = mysqli_fetch_array( $result_darah );


		//mengambil nama rumah sakit dari tabel rumah_sakit
		$query_rs = "select * from rumah_sakit where rumah_sakit_id='" . $data[ 'RUMAH_SAKIT_ID' ] . "'";
		$result1 = mysqli_query( $link, $query_rs );
		$data_rs = mysqli_fetch_array( $result1 );
		$no++;
		?>

	<tr>
		<td>
			<?php echo $no;?>
		</td>
		<td>
			<?php echo $data['NAMA_PASIEN']; ?>
		</td>
		<td>
			<?php echo $data_rs['NAMA']; ?>
		</td>
		<td>
			<?php echo $data['GOLONGAN_DARAH']; ?>
		</td>
		<td>
			<?php echo $data['TANGGAL']; ?>
		</td>
		<td>
			<?php echo $data['WAKTU']; ?>
		</td>
		<td>
			<center>
			<?php
				if($status=="selesai"){
					$status="Selesai";
			?>
				<div class="bg-success"><?php echo $status; ?></div></center>
			<?php		
				}elseif($status=="dibatalkan"){
					$status="Dibatalkan";
			?>
				<div class="bg-warning"><?php echo $status; ?></div></center>
			<?php	
				}elseif($status=="menunggu diproses"){
					$status="Menunggu Diproses";
			?>
				<div class="bg-primary"><?php echo $status; ?></div></center>
			<?php	
				}elseif($status=="stok habis"){
					$status="Stok Habis";
			?>
				<div class="bg-danger"><?php echo $status; ?></div></center>
			<?php		
				}elseif($status=="diproses"){
					$status="Diproses";
			?>
				<div class="bg-info"><?php echo $status; ?></div></center>
			<?php	
				}
			?>
		</td>
	</tr>

	<?php
	}
	?>
</table>
<?php		
	}
?>