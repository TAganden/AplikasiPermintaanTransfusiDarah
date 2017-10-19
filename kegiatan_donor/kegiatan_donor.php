<?php
require( 'koneksi.php' );
$link = koneksi_db();

$query_kegiatan_donor = "select * from kegiatan_donor";
$result_kegiatan_donor = mysqli_query( $link, $query_kegiatan_donor );
?>


<h3>Data Kegiatan <Donor></Donor></h3><br>
<form enctype="multipart/form-data" method="post" action="petugas.php?menu=kegiatan_donor&action=tambah">
	<button type="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Data Kegiatan Donor
	</button>

</form>
<br>


<table class="table table-bordered table-striped">
	<tr>
		<td class="col-md-1">
			<strong>
				<center>No</center>
			</strong>
		</td>
		<td class="col-md-4">
			<strong>
				<center>Nama Acara</center>
			</strong>
		</td>
		<td class="col-md-1">
			<strong>
				<center>Tanggal</center>
			</strong>
		</td>
		<td class="col-md-1">
			<strong>
				<center>Waktu</center>
			</strong>
		</td>
		<td class="col-md-4">
			<strong>
				<center>Alamat</center>
			</strong>
		</td>
		<td class="col-md-1">
		</td>
	</tr>
	<?php
	$no = 1;
	while ( $data_kegiatan_donor = mysqli_fetch_array( $result_kegiatan_donor ) ) {
		?>
	<tr>
		<td>
			<center>
				<?php echo $no; ?>
			</center>
		</td>
		<td>
			<?php echo $data_kegiatan_donor['NAMA'];?>
		</td>
		<td>
		<center>
			<?php echo $data_kegiatan_donor['TANGGAL_WAKTU']; ?>
			</center>
		</td>
		<td>
			<center>
				<?php echo $data_kegiatan_donor['WAKTU']; ?>
			</center>
		</td>
		<td>
				<?php echo $data_kegiatan_donor['ALAMAT']; ?>
		</td>
		<td>
			<center>
	
				<a href="petugas.php?menu=  &action=ubah&id=<?php echo $data_pendonor['PENDONOR_ID']; ?>">
				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
			</a>
			
				<a href="pendonor/proses_hapus_pendonor.php?id=<?php echo $data_pendonor['PENDONOR_ID']; ?>">
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