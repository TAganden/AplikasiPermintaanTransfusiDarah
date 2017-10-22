<?php
	require('koneksi.php');
	$link = koneksi_db();
?>
<h3>Data Pendonor</h3><br>
<form enctype="multipart/form-data" method="post" action="petugas.php?menu=formulir&action=tambah">
	<button type="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Data Formulir BDRS
	</button>

</form><br>



<?php
if ( isset( $_SESSION[ 's_pesan' ] ) ) {
	?>
<div class="alert alert-warning alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<strong>Warning! </strong>
	<?php echo $_SESSION['s_pesan'];
	unset($_SESSION['s_pesan']);?>
</div>
<?php
}
?>
<table class="table table-bordered table-striped">
	<tr>
		<td class="col-md-1">
			<strong>
				<center>No</center>
			</strong>
		</td>
		<td class="col-md-3">
			<strong>
				<center>Rumah Sakit</center>
			</strong>
		</td>
		<td class="col-md-3">
			<strong>
				<center>Tanggal</center>
			</strong>
		</td>
		<td class="col-md-1">
		</td>
	</tr>
	
	<?php
	$query_formulir_bdrs = "select * from formulir_bdrs";
	$no = 1;
	$result_formulir_bdrs = mysqli_query( $link, $query_formulir_bdrs );
	
	$nama_rs= "";
	$tanggal= "";
	
	while ( $data_formulir_bdrs = mysqli_fetch_array( $result_formulir_bdrs ) ) {
		$query_rumah_sakit = "select * from rumah_sakit where rumah_sakit_id='" . $data_formulir_bdrs[ 'RUMAH_SAKIT_ID' ] . "'";
		$result_rumah_sakit = mysqli_query( $link, $query_rumah_sakit );
		$data_rumah_sakit = mysqli_fetch_array( $result_rumah_sakit );
		
		if(($data_formulir_bdrs['RUMAH_SAKIT_ID']!=$nama_rs)||($data_formulir_bdrs['TANGGAL']!=$tanggal)){
			$nama_rs = $data_formulir_bdrs['RUMAH_SAKIT_ID'];
			$tanggal = $data_formulir_bdrs['TANGGAL'];

		?>
	<tr>
		<td>
			<center>
				<?php echo $no;?>
			</center>
		</td>
		<td>
			<?php echo $data_rumah_sakit['NAMA'];?>
		</td>
		<td>
			<?php echo $data_formulir_bdrs['TANGGAL'];?>
		</td>
		<td>
			<center>
				<a>
				<span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="modal" data-target="#<?php echo $no; ?>"> </span>
			</a>
			</center>
		</td>
	</tr>
	<?php
	$no++;
		}
	}

	?>
</table>