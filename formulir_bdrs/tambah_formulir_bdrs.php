<?php
	require('koneksi.php');
	$link = koneksi_db();

	$query = "select * from rumah_sakit";
	$result = mysqli_query($link,$query);
?>


<h3>Tambah Formulir BDRS</h3>

<form action="formulir_bdrs/proses_tambah_formulir_bdrs.php" method="post" enctype="multipart/form-data">

<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Tanggal
				</td>
				<td class="col-md-4">
					<input type="date" required name="tanggal" class="form-control">
				</td>
			</tr>
		</table>
	</div>
	
	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Bank Darah Rumah Sakit
				</td>
				<td class="col-md-4">
					<select name="rumah_sakit" class="form-control">
					<?php
						while($data_rs = mysqli_fetch_array($result)){
							
							echo "<option value='".$data_rs['RUMAH_SAKIT_ID']."'>".$data_rs['NAMA']."</option>";
						}
						?>
						
					</select>
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
					<select name="jenis_darah" class="form-control" id="jenis_darah">
						<option value="wb">Whole Blood</option>
						<option value="pcr">Packed Red Cells</option>
						<option value="tc">Thrombocyt Concentrate</option>
						<option value="lp">Liquid Plasma</option>
						<option value="ffp">Fresh Frozen Plasma</option>
						<option value="c">Cryoprecipitate</option>
						<option value="wrc">Washed Red Cells</option>
						<option value="bc">Buffy Coat</option>
					</select>
				</td>
			</tr>
		</table>
	</div>

	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Golongan Darah
				</td>
				<td class="col-md-4">
					<select name="golongan_darah" class="form-control" id="gol_darah">
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					</select>
				</td>
			</tr>
		</table>
	</div>

	<div class="col-md-12">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Barcode
				</td>
				<td class="col-md-10">
					<div class="input-group control-group after-add-more">
						<input type="text" name="barcode[]" class="typeahead form-control" placeholder="Barcode" required>
						<div class="input-group-btn">
							<button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
						</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<div class="col-md-11"></div>
	<div class="col-md-1">
		<input type="submit" name="submit" class="btn btn-primary" value="Submit"><br>
		<br>
	</div>
</form>

<!--<h2>Hasil: <span id="hasil"></span></h2>-->

<div class="copy hide">
	<div class="control-group input-group" style="margin-top:10px">
		<input type="text" name="barcode[]" class="typeahead form-control" placeholder="Barcode" required>
		<div class="input-group-btn">
			<button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	$( document ).ready( function () {

		$( ".add-more" ).click( function () {
				var html = $( ".copy" ).html();
				$( ".after-add-more" ).after( html );
				autocomplete();
			}
		);
		$( "body" ).on( "click", ".remove", function () {
			$( this ).parents( ".control-group" ).remove();
		} );
	} );

	autocomplete();

	function autocomplete() {

		$( 'input.typeahead' ).typeahead( {
			source: function ( query, process ) {
				var jenis_darah_nilai=document.getElementById('jenis_darah').value;
				var gol_darah_nilai=document.getElementById('gol_darah').value;
				return $.get( 'formulir_bdrs/proses_autocomplete_formulir_bdrs.php?jenis='+jenis_darah_nilai+'&gol_darah='+gol_darah_nilai, {
						query: query
					},
					function ( data ) {
						console.log( data );
						data = $.parseJSON( data );
						return process( data );
					} );
			}
		} );
	}
	//	
	//	document.getElementById("tombol_form").
	//	addEventListener("click", tampilkan_nilai_form);
	//	
//		function tampilkan_nilai_form(){
//	    var nilai_form=document.getElementById("gol_darah").value;
//	    document.getElementById("hasil").innerHTML=nilai_form;
//	}
</script>