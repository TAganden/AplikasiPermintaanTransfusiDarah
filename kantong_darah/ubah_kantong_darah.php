<?php
	require('koneksi.php');
	$link = koneksi_db();
	$id = $_GET['id'];
	
	$query_kantong = "select * from kantong_darah where kode_barcode='$id'";
	$result_kantong = mysqli_query($link,$query_kantong);
	$data_kantong = mysqli_fetch_array($result_kantong);

	$query_darah = "select * from gol_darah where id_golongan_darah='".$data_kantong['ID_GOLONGAN_DARAH']."'";
	$result_darah = mysqli_query($link,$query_darah);
	$data_darah = mysqli_fetch_array($result_darah);
?>


<form action="kantong_darah/proses_ubah_kantong_darah.php?id=<?php echo $id;?>" enctype="multipart/form-data" method="post">
	<h3>Ubah Data Kantong Darah</h3><br>

	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Kode Barcode UTDC
				</td>
				<td class="col-md-4">
					<input type="text" required name="kode_barcode" class="form-control" value="<?php echo $data_kantong['KODE_BARCODE'];?>">
				</td>
			</tr>
		</table>
	</div>

	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					ID Pendonor
				</td>
				<td class="col-md-4">
					<input type="text" class="typeahead form-control" required="required" name="id_pendonor" value="<?php echo $data_kantong['PENDONOR_ID'];?>">
				</td>
			</tr>
		</table>
	</div>
	
	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Volume
				</td>
				<td class="col-md-4">
				<div class="input-group">
					<input type="text" required name="volume" class="form-control" value="<?php echo $data_kantong['VOLUME_DARAH'];?>"><div class="input-group-addon">ml</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
	
	<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Jenis Darah
		</td>
		<td class="col-md-4">
			<select name="jenis_darah" class="form-control">
				<option value="Whole Blood" <?php if($data_darah['JENIS_DARAH']=="Whole Blood") echo 'selected="selected"'; ?>>Whole Blood</option>
				<option value="Packed Red Cells" <?php if($data_darah['JENIS_DARAH']=="Packed Red Cells") echo 'selected="selected"'; ?>>Packed Red Cells</option>
				<option value="Thrombocyt Concentrate" <?php if($data_darah['JENIS_DARAH']=="Thrombocyt Concentrate") echo 'selected="selected"'; ?>>Thrombocyt Concentrate</option>
				<option value="Liquid Plasma" <?php if($data_darah['JENIS_DARAH']=="Liquid Plasma") echo 'selected="selected"'; ?>>Liquid Plasma</option>
				<option value="Fresh Frozen Plasma" <?php if($data_darah['JENIS_DARAH']=="Fresh Frozen Plasma") echo 'selected="selected"'; ?>>Fresh Frozen Plasma</option>
				<option value="Cryoprecipitate" <?php if($data_darah['JENIS_DARAH']=="Cryoprecipitate") echo 'selected="selected"'; ?>>Cryoprecipitate</option>
				<option value="Washed Red Cells" <?php if($data_darah['JENIS_DARAH']=="Washed Red Cells") echo 'selected="selected"'; ?>>Washed Red Cells</option>
				<option value="Buffy Coat" <?php if($data_darah['JENIS_DARAH']=="Buffy Coat") echo 'selected="selected"'; ?>>Buffy Coat</option>
			</select>
		</td>
	</tr>
	</table>
</div>
	
	<div class="col-md-3">
		<table class="table">
			<tr>
				<td class="col-md-1">
					Tanggal Pengambilan
				</td>
				<td class="col-md-2">
					<input type="date" required name="tanggal_pengambilan" class="form-control" value="<?php echo $data_kantong['TGL_PENGAMBILAN'];?>">
				</td>
			</tr>
		</table>
	</div>
	<div class="col-md-3">
		<table class="table">
			<tr>
				<td class="col-md-1">
					Waktu Pengambilan
				</td>
				<td class="col-md-2">
					<input type="time" required name="waktu_pengambilan" class="form-control" value="<?php echo $data_kantong['WAKTU_PENGAMBILAN'];?>">
				</td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Tanggal Kadaluarsa
				</td>
				<td class="col-md-4">
					<input type="date" required name="tanggal_kadaluarsa" class="form-control" value="<?php echo $data_kantong['TGL_KADALUARSA'];?>">
				</td>
			</tr>
		</table>
	</div>
	
	<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-1">
			Status
		</td>
		<td class="col-md-2">
			<select name="status" class="form-control">
				<option value="tersedia" <?php if($data_kantong['STATUS']=="tersedia") echo 'selected="selected"'; ?>>Tersedia</option>
				<option value="tidak tersedia" <?php if($data_kantong['STATUS']=="tidak tersedia") echo 'selected="selected"'; ?>>Tidak Tersedia</option>
			</select>
		</td>
	</tr>
	</table>
</div>
	<div class="col-md-11"></div>
	<div class="col-md-1">
		<input type="submit" name="submit" class="btn btn-primary" value="Submit"><br>
		<br>

</form>


<script>
	/*autocomplete muncul setelah user mengetikan minimal2 karakter */
	$( 'input.typeahead' ).typeahead( {
		source: function ( query, process ) {
			return $.get( 'kantong_darah/proses_autocomplete_id_pendonor.php', {
					query: query
				},
				function ( data ) {
					console.log( data );
					data = $.parseJSON( data );
					return process( data );
				} );
		}
	} );
</script>