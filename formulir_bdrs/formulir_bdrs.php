<?php
	require('koneksi.php');
	$link = koneksi_db();
?>
<h3>Data Pendonor</h3><br>
<form enctype="multipart/form-data" method="post" action="petugas.php?menu=formulir&action=tambah">
	<button type="submit" class="btn btn-default">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Data Formulir BDRS
	</button>

</form>