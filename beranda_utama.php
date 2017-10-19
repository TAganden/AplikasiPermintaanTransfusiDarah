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
	$query_tanggal = "select curdate() as tanggal";
	$result_tanggal = mysqli_query($link,$query_tanggal);
	$data = mysqli_fetch_array($result_tanggal);
?>
<br>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<strong>Stok Darah Terbaru<br>
			Tanggal : <?php echo $data['tanggal']; ?><br>
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
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "A-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O-";
						require('query_stok_darah_beranda.php');
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
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "A-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O-";
						require('query_stok_darah_beranda.php');
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
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "A-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O-";
						require('query_stok_darah_beranda.php');
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
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "A-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O-";
						require('query_stok_darah_beranda.php');
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
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "A-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O-";
						require('query_stok_darah_beranda.php');
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
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "A-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O-";
						require('query_stok_darah_beranda.php');
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
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "A-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O-";
						require('query_stok_darah_beranda.php');
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
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "A-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "B-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "AB-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O+";
						require('query_stok_darah_beranda.php');
					?>
					</td>
					<td>
					<?php

						$gol_darah = "O-";
						require('query_stok_darah_beranda.php');
					?>
					</td>
				</tr>
			</table>
			</div>