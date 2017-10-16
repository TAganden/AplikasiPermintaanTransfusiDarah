<?php
	require('koneksi.php');
	$link = koneksi_db();

	
?>
<br>
<h3>Data Kantong Darah</h3><br>

<form enctype="multipart/form-data" method="post" action="petugas.php?menu=kantong_darah&action=tambah">
	<button type="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Data Pendonor
	</button>

</form>
<br>

<table class="table table-bordered table-striped">
	<tr>
		<td>
			<strong><center>No</center></strong>
		</td>
		<td>
			<strong><center>Kode Barcode</center></strong>
		</td>
		<td>
			<strong><center>ID Donor</center></strong>
		</td>
		<td>
			<strong><center>Jenis Darah</center></strong>
		</td>
		<td>
			<strong><center>Tanggal Pengambilan</center></strong>
		</td>
		<td>
			<strong><center>Jenis Darah</center></strong>
		</td>
		<td></td>
	</tr>
</table>