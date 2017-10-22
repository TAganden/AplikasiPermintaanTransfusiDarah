<?php
require( 'koneksi.php' );
$link = koneksi_db();
$query_permintaan = "select * from permintaan_transfusi where rumah_sakit_id='" . $_SESSION[ 's_rumah_sakit_id' ] . "' order by permintaan_id desc";
$res = mysqli_query( $link, $query_permintaan );

$no = 0;
?>
<br>
<form enctype="multipart/form-data" method="post" action="rumahsakit.php?menu=permintaan&action=tambah">
	<button type="submit" class="btn btn-default">
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Permintaan Transfusi Darah
	</button>

</form>
<br>
<br>
<div class="col-md-2">
</div>
<div class="col-md-6">
</div>
<form enctype="multipart/form-data" method="post" action="rumahsakit.php?menu=permintaan&action=tampil">
	<div class="col-md-3">
		<input type="text" name="cari" placeholder="Cari . . ." class="form-control">
	</div>
	<div class="col-md-1">
		<input type="submit" name="submit" value="Cari" class="form-control">
	</div>
</form>
<br>
<br>

<table class="table table-bordered table-striped">
	<tr>
		<td class="col-md-1"><center><strong>No</strong></center>
		</td>
		<td class="col-md-2"><center><strong>Nama Pasien</strong></center>
		</td>
		<td class="col-md-2"><center><strong>Nama Dokter</strong></center>
		</td>
		<td class="col-md-2"><center><strong>Status</strong></center>
		</td>
		<td class="col-md-1"><center><strong>Gol. Darah</strong></center>
		</td>
		<td class="col-md-2"><center><strong>Tanggal</strong></center>
		</td>
		<td class="col-md-1"><center><strong>Waktu</strong></center>
		</td>
		<td class="col-md-1"></td>
	</tr>
	<?php
	while ( ( $data = mysqli_fetch_array( $res ) ) ) {
		$query_status = "select * from status_permintaan where permintaan_id='" . $data[ 'PERMINTAAN_ID' ] . "'";
		$result = mysqli_query( $link, $query_status );
		while ( $data_status = mysqli_fetch_array( $result ) ) {
			$status = $data_status[ 'NAMA' ];
		}

		$sql = "SELECT (CURRENT_DATE-TANGGAL) as tanggal,(HOUR(CURRENT_TIME)-HOUR(WAKTU)) as jam,(MINUTE(CURRENT_TIME)-MINUTE(WAKTU)) as menit FROM `status_permintaan` WHERE permintaan_id=" . $data[ 'PERMINTAAN_ID' ] . "";
		$result3 = mysqli_query( $link, $sql );
		while ( $data_waktu = mysqli_fetch_array( $result3 ) ) {
			$tanggal = $data_waktu[ 'tanggal' ];
			$jam = $data_waktu[ 'jam' ];
			$menit = $data_waktu[ 'menit' ];

		}
		$query_status1 = "select * from status_permintaan where permintaan_id='" . $data[ 'PERMINTAAN_ID' ] . "' AND nama='menunggu konfirmasi'";
		$result1 = mysqli_query( $link, $query_status1 );
		$no++;
		?>
	<tr>
		<td>
			<center><?php echo $no;?></center>
		</td>
		<td>
			<?php echo $data['NAMA_PASIEN']; ?>
		</td>
		<td>
			<?php echo $data['NAMA_DOKTER']; ?>
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
		<td>
			<center><?php echo $data['GOLONGAN_DARAH']; ?></center>
		</td>
		<td>
			<center><?php echo $data['TANGGAL']; ?></center>
		</td>
		<td>
			<center><?php echo $data['WAKTU']; ?></center>
		</td>
		<td>
			<center>
				<a>
					<span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="modal" data-target="#<?php echo $no; ?>"></span>
				</a>
			
				<div class="modal fade" id="<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Status Permintaan Transfusi Darah</h4>
							</div>
							<div class="modal-body">
								Tanggal Permintaan :
								<?php echo $data['TANGGAL']; ?>, Waktu Permintaan :
								<?php echo $data['WAKTU']; ?>
								<br>
								<table class="table table-bordered table-striped">
									<tr>
										<td>
											<strong>Status</strong>
										</td>
										<td>
											<strong>Waktu</strong>
										</td>
										<td>
											<strong>Tanggal</strong>
										</td>
									</tr>
									<?php
									$query_status2 = "select * from status_permintaan where permintaan_id='" . $data[ 'PERMINTAAN_ID' ] . "'";
									$result2 = mysqli_query( $link, $query_status2 );
									while ( $data_status = mysqli_fetch_array( $result2 ) ) {
										?>
									<tr>
										<td>
											<?php echo $data_status['NAMA']; ?>
										</td>
										<td>
											<?php echo $data_status['WAKTU']; ?>
										</td>
										<td>
											<?php echo $data_status['TANGGAL']; ?>
										</td>
									</tr>
									<?php
									}
									?>
								</table>
								Detail Form Transfusi
								<table class="table table-bordered table-striped">
									<tr>
										<td class="col-md-5">
											No Register
										</td>
										<td class="col-md-5">
											<?php
											echo $data[ 'NO_REG' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Nama Dokter
										</td>
										<td>
											<?php
											echo $data[ 'NAMA_DOKTER' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Bagian
										</td>
										<td>
											<?php
											echo $data[ 'BAGIAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Ruangan
										</td>
										<td>
											<?php
											echo $data[ 'RUANGAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Diagnosa Sementara
										</td>
										<td>
											<?php
											echo $data[ 'DIAGNOSA_SEMENTARA' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Indikasi Transfusi
										</td>
										<td>
											<?php
											echo $data[ 'INDIKASI_TRANSFUSI' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Hb
										</td>
										<td>
											<?php
											echo $data[ 'HB' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Nama Penderita
										</td>
										<td>
											<?php
											echo $data[ 'NAMA_PASIEN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Jenis Kelamin
										</td>
										<td>
											<?php
											echo $data[ 'JENIS_KELAMIN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Umur
										</td>
										<td>
											<?php
											echo $data[ 'UMUR_PASIEN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Alamat
										</td>
										<td>
											<?php
											echo $data[ 'ALAMAT' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Jenis Darah
										</td>
										<td>
											<?php
											echo $data[ 'JENIS_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Golongan Darah
										</td>
										<td>
											<?php
											echo $data[ 'GOLONGAN_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Metoda
										</td>
										<td>
											<?php
											echo $data[ 'METODA' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Jumlah
										</td>
										<td>
											<?php
											echo $data[ 'JUMLAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Kebutuhan Darah
										</td>
										<td>
											<?php
											echo $data[ 'KEBUTUHAN_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Tanggal riwayat transfusi sebelumnya
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUMN_TGL' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Komponen darah transfusi sebelumnya
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUM_JENIS' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Reaksi transfusi sebelumnya
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUM_REAKSI' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Riwayat kehamilan
										</td>
										<td>
											<?php
											echo $data[ 'RIWAYAT_KEHAMILAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											Keterangan lainnya
										</td>
										<td>
											<?php
											echo $data[ 'KETERANGAN_TAMBAHAN' ];
											?>
										</td>
									</tr>
								</table>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<?php
				if ( $status != "Selesai" && $status != "Dibatalkan" ) {
					?>
				<a href="rumahsakit.php?menu=permintaan&action=ubah&id=<?php echo $data['PERMINTAAN_ID']; ?>">
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				</a>
			

				<?php
				}
				?>
				<?php
				if ( $tanggal == 0 && $status != "Dibatalkan" ) {
					?>
				<a href="proses_batal_permintaan.php?id=<?php echo $data['PERMINTAAN_ID']; ?>">
						<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
					</a>
			

				<?php
				} else if ( $tanggal == 1 && $status != "Dibatalkan" ) {
					if ( $jam < 0 ) {
						?>
				<a href="proses_batal_permintaan.php?id=<?php echo $data['PERMINTAAN_ID']; ?>">
							<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
						</a>
			

				<?php
				} else if ( $jam == 0 ) {
					if ( $menit > 0 ) {
						?>
				<a href="proses_batal_permintaan.php?id=<?php echo $data['PERMINTAAN_ID']; ?>">
								<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
							</a>
			

				<?php
				}
				}
				}
				?>
			</center>
		</td>

	</tr>
	<?php
	}
	?>
</table>