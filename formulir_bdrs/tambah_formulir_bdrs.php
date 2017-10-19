<h3>Tambah Formulir BDRS</h3>
<div class="row-fluid">
	<div class="span6">
		<form action="petugas.php?menu=formulir&action=tambah" method="post">
			<table class="table table-condensed">
				<thead>
					<tr>
						<th width="300px">Jenis Barang</th>
						<th width="100px">Jumlah</th>
						<th width="80px"></th>
					</tr>
				</thead>
				<!--elemet sebagai target append-->
				<tbody id="itemlist">
					<tr>
						<td><input name="jenis_input[0]" class="form-control"/>
						</td>
						<td><input name="jumlah_input[0]" class="form-control"/>
						</td>
						<td></td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td>
							<button class="btn btn-small btn-default" onclick="additem(); return false"><i class="glyphicon glyphicon-plus"></i></button>
							<button name="submit" class="btn btn-small btn-primary"><i class="glyphicon glyphicon-ok"></i></button>
						</td>
					</tr>
				</tfoot>
			</table>
		</form>
	</div>
	<div class="span6">
		<p>Hasil :</p>
		<p>
			<?php
			if ( isset( $_POST[ 'submit' ] ) ) {
				$jenis = $_POST[ 'jenis_input' ];
				$jumlah = $_POST[ 'jumlah_input' ];

				foreach ( $jenis as $key => $j ) {
					echo "<p>" . $j . " : " . $jumlah[ $key ] . "</p>";
				}
			}
			?>
		</p>
	</div>
</div>
<script>
	var i = 1;

	function additem() {
		var itemlist = document.getElementById( 'itemlist' );

		//                membuat element
		var row = document.createElement( 'tr' );
		var jenis = document.createElement( 'td' );
		var jumlah = document.createElement( 'td' );
		var aksi = document.createElement( 'td' );

		//                meng append element
		itemlist.appendChild( row );
		row.appendChild( jenis );
		row.appendChild( jumlah );
		row.appendChild( aksi );

		//                membuat element input
		var jenis_input = document.createElement( 'input' );
		jenis_input.setAttribute( 'name', 'jenis_input[' + i + ']' );
		jenis_input.setAttribute( 'class', 'form-control' );

		var jumlah_input = document.createElement( 'input' );
		jumlah_input.setAttribute( 'name', 'jumlah_input[' + i + ']' );
		jumlah_input.setAttribute( 'class', 'form-control' );

		var hapus = document.createElement( 'span' );

		jenis.appendChild( jenis_input );
		jumlah.appendChild( jumlah_input );
		aksi.appendChild( hapus );

		hapus.innerHTML = '<button class="btn btn-small btn-default"><i class="glyphicon glyphicon-trash"></i></button>';
		//                Aksi Delete
		hapus.onclick = function () {
			row.parentNode.removeChild( row );
		};

		i++;
	}
</script>