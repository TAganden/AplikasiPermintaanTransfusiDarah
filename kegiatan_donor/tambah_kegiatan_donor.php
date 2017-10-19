<form action="kegiatan_donor/proses_tambah_kegiatan_donor.php" enctype="multipart/form-data" method="post">
	<h3>Tambah Data Kegiatan Donor</h3><br>

	<div class="col-md-12">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Nama Acara
				</td>
				<td class="col-md-10">
					<input type="text" required name="nama_acara" class="form-control">
				</td>
			</tr>
		</table>
	</div>

	<div class="col-md-12">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Tanggal
				</td>
				<td class="col-md-10">
					<input type="date" required name="tanggal" class="form-control">
				</td>
			</tr>
		</table>
	</div>
	
	<div class="col-md-12">
		<table class="table">
			<tr>
				<td class="col-md-2">
					Waktu
				</td>
				<td class="col-md-10">
				<input type="time" required name="waktu" class="form-control">
				</td>
			</tr>
		</table>
	</div>
	
	<div class="col-md-12">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Alamat
		</td>
		<td class="col-md-10">
			<textarea name="alamat" class="form-control" rows="3"></textarea>
		</td>
	</tr>
	</table>
	</div>
	<div class="col-md-11"></div>
	<div class="col-md-1">
		<input type="submit" name="submit" class="btn btn-primary" value="Submit">
</div>
</form>