
<br>
<form action="pendonor/proses_tambah_pendonor.php" enctype="multipart/form-data" method="post">
	<h3>Tambah Data Pendonor</h3><br>


	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					ID
				</td>
				<td class="col-md-4">
					<input type="text" required name="id" class="form-control">
				</td>
			</tr>
		</table>
	</div>


	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Nama
				</td>
				<td class="col-md-4">
					<input type="text" required name="nama" class="form-control">
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
					<select name="golongan_darah" class="form-control">
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


	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Tempat Lahir
				</td>
				<td class="col-md-4">
					<input type="text" required name="tempat_lahir" class="form-control">
				</td>
			</tr>
		</table>
	</div>


	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Jenis Kelamin
				</td>
				<td class="col-md-4">
					<select name="jenis_kelamin" class="form-control">
						<option value="pria">Pria</option>
						<option value="wanita">Wanita</option>
					</select>
				</td>
			</tr>
		</table>
	</div>


	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Tanggal/Bulan/Tahun Lahir
				</td>
				<td class="col-md-4">
					<input type="date" required name="tanggal_lahir" class="form-control">
				</td>
			</tr>
		</table>
	</div>


	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					No Telepon
				</td>
				<td class="col-md-4">
					<input type="text" required name="no_telp" class="form-control">
				</td>
			</tr>
		</table>
	</div>


	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Pekerjaan
				</td>
				<td class="col-md-4">
					<select name="pekerjaan" class="form-control">
						<option value="tni">TNI</option>
						<option value="polri">POLRI</option>
						<option value="mahasiswa/pelajar">Mahasiswa/Pelajar</option>
						<option value="swasta/wiraswasta">Swasta/Wiraswasta</option>
						<option value="lain-lain">Lain-Lain</option>
					</select>
				</td>
			</tr>
		</table>
	</div>


	<div class="col-md-12">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Alamat Rumah
				</td>
				<td class="col-md-10">
					<textarea rows="2" required class="form-control" name="alamat"></textarea>
				</td>
			</tr>
		</table>
	</div>

	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Kelurahan
				</td>
				<td class="col-md-4">
					<input type="text" required name="kelurahan" class="form-control">
				</td>
			</tr>
		</table>
	</div>

	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Kecamatan
				</td>
				<td class="col-md-4">
					<input type="text" required name="kecamatan" class="form-control">
				</td>
			</tr>
		</table>
	</div>

	<div class="col-md-3">
		<table class="table">
			<tr>
				<td class="col-md-1">
					RT
				</td>
				<td class="col-md-2">
					<input type="text" required name="rt" class="form-control">
				</td>
			</tr>
		</table>
	</div>

	<div class="col-md-3">
		<table class="table">
			<tr>
				<td class="col-md-1">
					RW
				</td>
				<td class="col-md-2">
					<input type="text" required name="rw" class="form-control">
				</td>
			</tr>
		</table>
	</div>
	
	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Kode POS
				</td>
				<td class="col-md-4">
					<input type="text" required name="kode_pos" class="form-control">
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