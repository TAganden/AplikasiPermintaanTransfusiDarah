<?php
require( 'koneksi.php' );
$link = koneksi_db();
$id = $_GET[ 'id' ];

$query_pendonor = "select * from pendonor where pendonor_id='$id'";
$result_pendonor = mysqli_query( $link, $query_pendonor );
$data_pendonor = mysqli_fetch_array( $result_pendonor );
?>

<h3>Detail Data Pendonor</h3><br>
<table class="table">
	<tr>
		<td class="col-md-2">
			<strong>ID Donor</strong>
		</td>
		<td class="col-md-10">
			:
			<?php echo $data_pendonor['PENDONOR_ID']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Nama Lengkap</strong>
		</td>
		<td>
			:
			<?php echo $data_pendonor['NAMA']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Tempat Lahir</strong>
		</td>
		<td>
			: <?php echo $data_pendonor['TEMPAT_LAHIR']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Tanggal Lahir</strong>
		</td>
		<td>
			:
			<?php echo $data_pendonor['TANGGAL_LAHIR']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Alamat</strong>
		</td>
		<td>
			:
			<?php echo $data_pendonor['ALAMAT']." ".$data_pendonor['RT_RW'].",".$data_pendonor['KELURAHAN'].",".$data_pendonor['KECAMATAN']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>No. Telepon</strong>
		</td>
		<td>
			:
			<?php echo $data_pendonor['NO_TELEPON']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Pekerjaan</strong>
		</td>
		<td>
			: <?php echo $data_pendonor['PEKERJAAN']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Golongan Darah</strong>
		</td>
		<td>
			:
			<?php echo $data_pendonor['GOLONGAN_DARAH']; ?>
		</td>
	</tr>
</table>
<div class="col-md-10"></div>
<div class="col-md-2">
	<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah">
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Riwayat Pendonor
		</button>



</div>
<br>


<br>
<?php
$query_riwayat_pendonor = "select * from riwayat_donor where pendonor_id = '$id'";
$result_riwayat_pendonor = mysqli_query( $link, $query_riwayat_pendonor );

?>
<table class="table table-bordered table-striped">
	<tr>
		<td class="col-md-1">
			<strong>
				<center>No</center>
			</strong>
		</td>
		<td class="col-md-2">
			<strong>
				<center>Tanggal</center>
			</strong>
		</td>
		<td class="col-md-8">
			<strong>
				<center>Alamat</center>
			</strong>
		</td>
		<td class="col-md-1"></td>
	</tr>
	<?php
	$no = 1;
	while ( $data_riwayat_pendonor = mysqli_fetch_array( $result_riwayat_pendonor ) ) {
		?>
	<tr>
		<td>
			<center>
				<?php echo $no; ?>
			</center>
		</td>
		<td>
			<center>
				<?php echo $data_riwayat_pendonor['TANGGAL'];?>
			</center>
		</td>
		<td>
			<?php echo $data_riwayat_pendonor['ALAMAT'];?>
		</td>
		<td>
			<center>
				<a data-toggle="modal" data-target="#ubah">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
			</a>
			<div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Ubah Riwayat Pendonor</h4>
			</div>
			<div class="modal-body">
				<form action="pendonor/proses_ubah_riwayat.php?id=<?php echo $id; ?>&riwayat=<?php echo $data_riwayat_pendonor['ID_RIWAYAT_DONOR']; ?>" enctype="multipart/form-data" method="post">

					<div>
						<table class="table">
							<tr>
								<td class="col-md-2">
									Tanggal
								</td>
								<td class="col-md-10">
									<input type="date" required name="tanggal" class="form-control" value="<?php echo $data_riwayat_pendonor['TANGGAL']; ?>">
								</td>
							</tr>
						</table>
					</div><br>


					<div>
						<table class="table">
							<tr>
								<td class="col-md-2">
									Alamat
								</td>
								<td class="col-md-10">
									<textarea rows="3" required class="form-control" name="alamat"><?php echo $data_riwayat_pendonor['ALAMAT']; ?></textarea>
								</td>
							</tr>
						</table>
					</div>

				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-primary">Ubah</button>
			</div>
			</form>
		</div>
	</div>
</div>
				<a href="pendonor/proses_hapus_riwayat.php?id=<?php echo $id; ?>&riwayat=<?php echo $data_riwayat_pendonor['ID_RIWAYAT_DONOR']; ?>">
				<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
			</a>
			

			</center>
		</td>
	</tr>
	<?php
		$no++;
	}
	?>
</table>


<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Tambah Riwayat Pendonor</h4>
			</div>
			<div class="modal-body">
				<form action="pendonor/proses_tambah_riwayat.php?id=<?php echo $id; ?>" enctype="multipart/form-data" method="post">

					<div>
						<table class="table">
							<tr>
								<td class="col-md-2">
									Tanggal
								</td>
								<td class="col-md-10">
									<input type="date" required name="tanggal" class="form-control">
								</td>
							</tr>
						</table>
					</div><br>


					<div>
						<table class="table">
							<tr>
								<td class="col-md-2">
									Alamat
								</td>
								<td class="col-md-10">
									<textarea rows="3" required class="form-control" name="alamat"></textarea>
								</td>
							</tr>
						</table>
					</div>

				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>


