<script type="text/javascript">
	function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
		var waktu = new Date(); //membuat object date berdasarkan waktu saat 
		var sh = waktu.getHours() + ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
		var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
		var ss = waktu.getSeconds() + ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
		document.getElementById( "clock" ).innerHTML = ( sh.length == 1 ? "0" + sh : sh ) + ":" + ( sm.length == 1 ? "0" + sm : sm ) + ":" + ( ss.length == 1 ? "0" + ss : ss );
	}
</script>
<br>
			<h5>Stok Darah Terbaru</h5>
			<h5>Tanggal : <?php echo $tgl; ?></h5>
			<h5>Waktu : <body onload="tampilkanwaktu(); setInterval('tampilkanwaktu()', 1000);"><span id="clock"></span></h5>
			<table class="table table-bordered">
				<tr>
					<td rowspan="2"></td>
					<td colspan="7">
						<center>JENIS DARAH</center>
					</td>
				</tr>
				<tr>
					<td>
						WB
					</td>
					<td>
						TC
					</td>
					<td>
						PRC
					</td>
					<td>
						FFP
					</td>
					<td>
						AHF
					</td>
					<td>
						BC
					</td>
					<td>
						LP
					</td>
				</tr>
				<tr>
					<td>
						A+
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
				</tr>
				<tr>
					<td>
						A-
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
				</tr>
				<tr>
					<td>
						B+
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
				</tr>
				<tr>
					<td>
						B-
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
				</tr>
				<tr>
					<td>
						AB+
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
				</tr>
				<tr>
					<td>
						AB-
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
				</tr>
				<tr>
					<td>
						O+
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
				</tr>
				<tr>
					<td>
						O-
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
					<td>
						0
					</td>
				</tr>
			</table>