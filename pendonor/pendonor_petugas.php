<?php
require( 'koneksi.php' );
$link = koneksi_db();

$query_pendonor = "select * from pendonor";
$result_pendonor = mysqli_query( $link, $query_pendonor );
?>
<br>
<h3>Data Pendonor</h3><br>
<form enctype="multipart/form-data" method="post" action="petugas.php?menu=pendonor&action=tambah">
	<button type="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Data Pendonor
	</button>

</form>
<br>

<!--
<form enctype="multipart/form-data" method="post" action="petugas.php?menu=pendonor&action=tambah">
	<button type="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Data Riwayat
	</button>
</form>
-->
<br>


<table class="table table-bordered">
	<tr>
		<td class="col-md-1">
			<strong>
				<center>No</center>
			</strong>
		</td>
		<td class="col-md-3">
			<strong>
				<center>ID Pendonor</center>
			</strong>
		</td>
		<td class="col-md-4">
			<strong>
				<center>Nama</center>
			</strong>
		</td>
		<td class="col-md-1">
			<strong>
				<center>Gol. Darah</center>
			</strong>
		</td>
		<td class="col-md-1">
		</td>
	</tr>
	<?php
	$no = 1;
	while ( $data_pendonor = mysqli_fetch_array( $result_pendonor ) ) {
		?>
	<tr>
		<td>
			<center>
				<?php echo $no; ?>
			</center>
		</td>
		<td>
			<?php echo $data_pendonor['PENDONOR_ID'];?>
		</td>
		<td>
			<?php echo $data_pendonor['NAMA']; ?>
		</td>
		<td>
			<center>
				<?php echo $data_pendonor['GOLONGAN_DARAH']; ?>
			</center>
		</td>
		<td>
			<center>
			<a href="petugas.php?menu=pendonor&action=lihat&id=<?php echo $data_pendonor['PENDONOR_ID']; ?>">
				<span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="modal" data-target="#<?php echo $no; ?>"> </span>
			</a>
			
				<a href="petugas.php?menu=pendonor&action=ubah&id=<?php echo $data_pendonor['PENDONOR_ID']; ?>">
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