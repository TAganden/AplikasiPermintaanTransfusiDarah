<?php
require('koneksi.php');
$link = koneksi_db();
$query_permintaan = "SELECT * FROM `permintaan_transfusi` ORDER BY PERMINTAAN_ID DESC";
$res = mysqli_query( $link, $query_permintaan );

$no = 0;
?>
<h4>Permintaan Transfusi Darah</h4>


<br>
<br>

<table class="table table-bordered table-striped">
	<tr>
		<td class="col-md-1"><center><strong>No</strong></center>
		</td>
		<td class="col-md-3"><center><strong>Nama Pasien</strong></center>
		</td>
		<td class="col-md-2"><center><strong>Rumah Sakit</strong></center>
		</td>
		<td class="col-md-1"><center><strong>Gol. Darah</strong></center>
		</td>
		<td class="col-md-2"><center><strong>Tanggal</strong></center>
		</td>
		<td class="col-md-1"><center><strong>Waktu</strong></center>
		</td>
		<td class="col-md-2"><center><strong>Status</strong></center>
		</td>
	</tr>
	
	<?php
	while ( ( $data = mysqli_fetch_array( $res ) ) ) {
		//mengambil status dari tabel status_permintaan
		$query_status = "select * from status_permintaan where permintaan_id='" . $data[ 'PERMINTAAN_ID' ] . "'";
		$result = mysqli_query( $link, $query_status );
		while ( $data_status = mysqli_fetch_array( $result ) ) {
			$status = $data_status[ 'NAMA' ];
		}
		
		//mengambil nama rumah sakit dari tabel rumah_sakit
		$query_rs = "select * from rumah_sakit where rumah_sakit_id='".$data['RUMAH_SAKIT_ID']."'";
		$result1= mysqli_query($link,$query_rs);
		$data_rs = mysqli_fetch_array($result1);
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
			<?php
				if($status=="menunggu diproses"){
					$status = "Menunggu Diproses";
					?>
					<center>
 						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#<?php echo $no; ?>">
  							<?php echo $status; ?>
						</button>
					</center>
					
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
											<strong>No Register</strong>
										</td>
										<td class="col-md-5">
											<?php
											echo $data[ 'NO_REG' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Nama Dokter</strong>
										</td>
										<td>
											<?php
											echo $data[ 'NAMA_DOKTER' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Bagian</strong>
										</td>
										<td>
											<?php
											echo $data[ 'BAGIAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Ruangan</strong>
										</td>
										<td>
											<?php
											echo $data[ 'RUANGAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Diagnosa Sementara</strong>
										</td>
										<td>
											<?php
											echo $data[ 'DIAGNOSA_SEMENTARA' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Indikasi Transfusi</strong>
										</td>
										<td>
											<?php
											echo $data[ 'INDIKASI_TRANSFUSI' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Hb</strong>
										</td>
										<td>
											<?php
											echo $data[ 'HB' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Nama Penderita</strong>
										</td>
										<td>
											<?php
											echo $data[ 'NAMA_PASIEN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Jenis Kelamin</strong>
										</td>
										<td>
											<?php
											echo $data[ 'JENIS_KELAMIN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Umur</strong>
										</td>
										<td>
											<?php
											echo $data[ 'UMUR_PASIEN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Alamat</strong>
										</td>
										<td>
											<?php
											echo $data[ 'ALAMAT' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Jenis Darah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'JENIS_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Golongan Darah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'GOLONGAN_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Metoda</strong>
										</td>
										<td>
											<?php
											echo $data[ 'METODA' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Jumlah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'JUMLAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Kebutuhan Darah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'KEBUTUHAN_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Tanggal riwayat transfusi sebelumnya</strong>
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUMN_TGL' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Komponen darah transfusi sebelumnya</strong>
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUM_JENIS' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Reaksi transfusi sebelumnya</strong>
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUM_REAKSI' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Riwayat kehamilan</strong>
										</td>
										<td>
											<?php
											echo $data[ 'RIWAYAT_KEHAMILAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Keterangan lainnya</strong>
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
							
							<form enctype="multipart/form-data" method="post" action="proses_diproses_petugas.php?id=<?php echo $data['PERMINTAAN_ID']; ?>">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary" >
										Konfirmasi
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			<?php		
				}else if($status=="diproses"){
					$status = "Diproses";
					?>
					<center>
 						<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo $no; ?>">
  							<?php echo $status; ?>
						</button>
					</center>
					<div class="modal fade" id="<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								
								
								<h4 class="modal-title" id="myModalLabel">Status Permintaan Transfusi Darah</h4>
							</div>
							<div class="modal-body">
							<strong>
								Tanggal Permintaan =
								<?php echo $data['TANGGAL']; ?>, Waktu Permintaan =
								<?php echo $data['WAKTU']; ?>
								<br>
								</strong><br>

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
								<div class="col-md-5">
									<strong>Kode Barcode Kantong Darah</strong>
								</div>
								<div class="col-md-7">
									<form enctype="multipart/form-data" method="post" action="">
										<select name="barcode">
										<?php
											$query_darah
										?>
											<option value=""></option>
										</select>
								</div><br>

								<br>
								<strong> Detail Form Transfusi </strong>
								<table class="table table-bordered table-striped">
									<tr>
										<td class="col-md-5">
											<strong>No Register</strong>
										</td>
										<td class="col-md-5">
											<?php
											echo $data[ 'NO_REG' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Nama Dokter</strong>
										</td>
										<td>
											<?php
											echo $data[ 'NAMA_DOKTER' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Bagian</strong>
										</td>
										<td>
											<?php
											echo $data[ 'BAGIAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Ruangan</strong>
										</td>
										<td>
											<?php
											echo $data[ 'RUANGAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Diagnosa Sementara</strong>
										</td>
										<td>
											<?php
											echo $data[ 'DIAGNOSA_SEMENTARA' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Indikasi Transfusi</strong>
										</td>
										<td>
											<?php
											echo $data[ 'INDIKASI_TRANSFUSI' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Hb</strong>
										</td>
										<td>
											<?php
											echo $data[ 'HB' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Nama Penderita</strong>
										</td>
										<td>
											<?php
											echo $data[ 'NAMA_PASIEN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Jenis Kelamin</strong>
										</td>
										<td>
											<?php
											echo $data[ 'JENIS_KELAMIN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Umur</strong>
										</td>
										<td>
											<?php
											echo $data[ 'UMUR_PASIEN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Alamat</strong>
										</td>
										<td>
											<?php
											echo $data[ 'ALAMAT' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Jenis Darah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'JENIS_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Golongan Darah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'GOLONGAN_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Metoda</strong>
										</td>
										<td>
											<?php
											echo $data[ 'METODA' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Jumlah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'JUMLAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Kebutuhan Darah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'KEBUTUHAN_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Tanggal riwayat transfusi sebelumnya</strong>
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUMN_TGL' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Komponen darah transfusi sebelumnya</strong>
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUM_JENIS' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Reaksi transfusi sebelumnya</strong>
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUM_REAKSI' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Riwayat kehamilan</strong>
										</td>
										<td>
											<?php
											echo $data[ 'RIWAYAT_KEHAMILAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Keterangan lainnya</strong>
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
									<button type="submit" class="btn btn-primary" >
										Permintaan Transfusi Selesai
									</button>
								</form>
								
							</div>
						</div>
					</div>
				</div>
					<?php
					
				}else if($status=="selesai"){
					$status = "Selesai";
					?>
					<center>
 						<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo $no; ?>">
  							<?php echo $status; ?>
						</button>
					</center>
					
					<div class="modal fade" id="<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								
								
								<h4 class="modal-title" id="myModalLabel">Status Permintaan Transfusi Darah</h4>
							</div>
							<div class="modal-body">
							<strong>
								Tanggal Permintaan =
								<?php echo $data['TANGGAL']; ?>, Waktu Permintaan =
								<?php echo $data['WAKTU']; ?>
								<br>
								</strong><br>

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
								<strong> Detail Form Transfusi </strong><br>
								<table class="table table-bordered table-striped">
									<tr>
										<td class="col-md-5">
											<strong>No Register</strong>
										</td>
										<td class="col-md-5">
											<?php
											echo $data[ 'NO_REG' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Nama Dokter</strong>
										</td>
										<td>
											<?php
											echo $data[ 'NAMA_DOKTER' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Bagian</strong>
										</td>
										<td>
											<?php
											echo $data[ 'BAGIAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Ruangan</strong>
										</td>
										<td>
											<?php
											echo $data[ 'RUANGAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Diagnosa Sementara</strong>
										</td>
										<td>
											<?php
											echo $data[ 'DIAGNOSA_SEMENTARA' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Indikasi Transfusi</strong>
										</td>
										<td>
											<?php
											echo $data[ 'INDIKASI_TRANSFUSI' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Hb</strong>
										</td>
										<td>
											<?php
											echo $data[ 'HB' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Nama Penderita</strong>
										</td>
										<td>
											<?php
											echo $data[ 'NAMA_PASIEN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Jenis Kelamin</strong>
										</td>
										<td>
											<?php
											echo $data[ 'JENIS_KELAMIN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Umur</strong>
										</td>
										<td>
											<?php
											echo $data[ 'UMUR_PASIEN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Alamat</strong>
										</td>
										<td>
											<?php
											echo $data[ 'ALAMAT' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Jenis Darah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'JENIS_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Golongan Darah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'GOLONGAN_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Metoda</strong>
										</td>
										<td>
											<?php
											echo $data[ 'METODA' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Jumlah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'JUMLAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Kebutuhan Darah</strong>
										</td>
										<td>
											<?php
											echo $data[ 'KEBUTUHAN_DARAH' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Tanggal riwayat transfusi sebelumnya</strong>
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUMN_TGL' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Komponen darah transfusi sebelumnya</strong>
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUM_JENIS' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Reaksi transfusi sebelumnya</strong>
										</td>
										<td>
											<?php
											echo $data[ 'TRANSFUSI_SEBELUM_REAKSI' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Riwayat kehamilan</strong>
										</td>
										<td>
											<?php
											echo $data[ 'RIWAYAT_KEHAMILAN' ];
											?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>Keterangan lainnya</strong>
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
				}else if($status=="dibatalkan"){
					$status = "Dibatalkan";
					?>
					<center>
 						<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#<?php echo $no; ?>">
  							<?php echo $status; ?>
						</button>
					</center>
					<?php
				}else if($status=="stok habis"){
					$status = "Stok Habis";
					?>
					<center>
 						<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#<?php echo $no; ?>">
  							<?php echo $status; ?>
						</button>
					</center>
					<?php
				}
			?>
			
		</td>
	</tr>
<?php
	}
		?>