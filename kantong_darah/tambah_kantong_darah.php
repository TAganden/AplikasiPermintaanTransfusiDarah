<form action="kantong_darah/proses_tambah_kantong_darah.php" enctype="multipart/form-data" method="post">
	<h3>Tambah Data Kantong Darah</h3><br>

	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Kode Barcode UTDC
				</td>
				<td class="col-md-4">
					<input type="text" required name="kode_barcode" class="form-control">
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
					<input type="text" class="typeahead form-control" required="required" name="id_pendonor">
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
					<input type="text" required name="volume" class="form-control"><div class="input-group-addon">ml</div>
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
				<option value="Whole Blood" >Whole Blood</option>
				<option value="Packed Red Cells">Packed Red Cells</option>
				<option value="Thrombocyt Concentrate">Thrombocyt Concentrate</option>
				<option value="Liquid Plasma">Liquid Plasma</option>
				<option value="Fresh Frozen Plasma">Fresh Frozen Plasma</option>
				<option value="Cryoprecipitate">Cryoprecipitate</option>
				<option value="Washed Red Cells">Washed Red Cells</option>
				<option value="Buffy Coat">Buffy Coat</option>
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
					<input type="date" required name="tanggal_pengambilan" class="form-control">
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
					<input type="time" required name="waktu_pengambilan" class="form-control">
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
					<input type="date" required name="tanggal_kadaluarsa" class="form-control">
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