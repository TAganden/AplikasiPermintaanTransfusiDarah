<?php
require( 'koneksi.php' );
$link = koneksi_db();


?>
<h3>Data Kantong Darah</h3><br>

<form enctype="multipart/form-data" method="post" action="petugas.php?menu=kantong_darah&action=tambah">
	<button type="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Data Kantong Darah
	</button>


</form>
<div class="col-md-8">
</div>
<form enctype="multipart/form-data" method="post" action="rumahsakit.php?menu=permintaan&action=tampil">
	<div class="col-md-3">
		<input type="text" name="cari" placeholder="Cari . . ." class="form-control">
	</div>
	<div class="col-md-1">
		<input type="submit" name="submit" value="Cari" class="form-control">
	</div>
</form><br>
<br>
<table class="table table-bordered table-striped">
	<tr>
		<td class="col-md-1">
			<strong>
				<center>No</center>
			</strong>
		</td>
		<td class="col-md-3">
			<strong>
				<center>Kode Barcode</center>
			</strong>
		</td>
		<td class="col-md-3">
			<strong>
				<center>ID Donor</center>
			</strong>
		</td>
		<td class="col-md-1">
			<strong>
				<center>Golongan Darah</center>
			</strong>
		</td>
		<td class="col-md-2">
			<strong>
				<center>Jenis Darah</center>
			</strong>
		</td>
		<td class="col-md-1">
			<strong>
				<center>Tanggal Kadaluarsa</center>
			</strong>
		</td>
		<td class="col-md-1"></td>
	</tr>
	<?php
	$query_kantong_darah = "select * from kantong_darah";
	$no = 1;
	$result_kantong_darah = mysqli_query( $link, $query_kantong_darah );
	while ( $data_kantong_darah = mysqli_fetch_array( $result_kantong_darah ) ) {
		$query_golongan_darah = "select * from gol_darah where id_golongan_darah='" . $data_kantong_darah[ 'ID_GOLONGAN_DARAH' ] . "'";
		$result_golongan_darah = mysqli_query( $link, $query_golongan_darah );
		$data_gol_darah = mysqli_fetch_array( $result_golongan_darah );

		?>
	<tr>
		<td>
			<center>
				<?php echo $no;?>
			</center>
		</td>
		<td>
			<?php echo $data_kantong_darah['KODE_BARCODE'];?>
		</td>
		<td>
			<?php echo $data_kantong_darah['PENDONOR_ID'];?>
		</td>
		<td>
			<center>
				<?php echo $data_gol_darah['GOLONGAN_DARAH'];?>
			</center>
		</td>
		<td>
			<?php echo $data_gol_darah['JENIS_DARAH'];?>
		</td>
		<td>
			<center>
				<?php echo $data_kantong_darah['TGL_KADALUARSA'];?>
			</center>
		</td>
		<td>
			<center>
				<a>
				<span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="modal" data-target="#<?php echo $no; ?>"> </span>
			</a>

				<div class="modal fade" id="<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Tampil Data Kantong Darah</h4>
							</div>
							<div class="modal-body">
								<table class="table">
									<tr>
										<td class="col-md-4">
											<strong>Kode Barcode</strong>
										</td>
										<td>
											:
											<?php echo $data_kantong_darah['KODE_BARCODE']; ?>
										</td>
									</tr>
									<tr>
										<td>
											<strong>ID Pendonor</strong>
										</td>
										<td>
											:
											<?php echo $data_kantong_darah['PENDONOR_ID']; ?>
										</td>
									</tr>
									<tr>
										<td class="col-md-4">
											<strong>Golongan Darah</strong>
										</td>
										<td>
											:
											<?php echo $data_gol_darah['GOLONGAN_DARAH']; ?>
										</td>
									</tr>
									<tr>
										<td class="col-md-4">
											<strong>Jenis Darah</strong>
										</td>
										<td>
											:
											<?php echo $data_gol_darah['JENIS_DARAH']; ?>
										</td>
									</tr>
									<tr>
										<td class="col-md-4">
											<strong>Volume Darah</strong>
										</td>
										<td>
											:
											<?php echo $data_kantong_darah['VOLUME_DARAH']; ?>
										</td>
									</tr>
									<tr>
										<td class="col-md-4">
											<strong>Tanggal Pengambilan</strong>
										</td>
										<td>
											:
											<?php echo $data_kantong_darah['TGL_PENGAMBILAN']; ?>
										</td>
									</tr>
									<tr>
										<td class="col-md-4">
											<strong>Waktu Pengambilan</strong>
										</td>
										<td>
											:
											<?php echo $data_kantong_darah['WAKTU_PENGAMBILAN']; ?>
										</td>
									</tr>
									<tr>
										<td class="col-md-4">
											<strong>Tanggal Kadaluarsa</strong>
										</td>
										<td>
											:
											<?php echo $data_kantong_darah['TGL_KADALUARSA']; ?>
										</td>
									</tr>
									<tr>
										<td class="col-md-4">
											<strong>Status</strong>
										</td>
										<td>
											:
											<?php echo $data_kantong_darah['STATUS']; ?>
										</td>
									</tr>
								</table>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
		<?php
			if($data_kantong_darah['STATUS']=="tersedia"){
		?>
			<a href="petugas.php?menu=kantong_darah&action=ubah&id=<?php echo $data_kantong_darah['KODE_BARCODE']; ?>">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
			</a>
		


<!--
			<a href="kantong_darah/proses_hapus_kantong_darah.php?id=<?php echo $data_kantong_darah['KODE_BARCODE']; ?>">
				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			</a>
-->
			<?php
			}
		?>

			</center>
		</td>
	</tr>
	<?php
	$no++;
	}

	?>
</table>