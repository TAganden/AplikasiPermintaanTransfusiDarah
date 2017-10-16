<?php
	require('koneksi.php');
	$link = koneksi_db();
	$id = $_GET['id'];
	$query_pendonor = "select * from pendonor where pendonor_id = '$id'";
	$result_pendonor = mysqli_query($link,$query_pendonor);
	$data_pendonor = mysqli_fetch_array($result_pendonor);

	$rt_rw = explode("/",$data_pendonor['RT_RW']);
	$rt = $rt_rw[0];
	$rw = $rt_rw[1];
?>
<br>
<form action="pendonor/proses_ubah_pendonor.php?id=<?php echo $id;?>" enctype="multipart/form-data" method="post">
	<h3>Ubah Data Pendonor</h3><br>


	<div class="col-md-6">
		<table class="table">
			<tr>
				<td class="col-md-2">
					ID
				</td>
				<td class="col-md-4">
					<input type="text" required name="id" class="form-control" value="<?php echo $data_pendonor['PENDONOR_ID']; ?>">
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
					<input type="text" required name="nama" class="form-control" value="<?php echo $data_pendonor['NAMA']; ?>">
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
					<select name="golongan_darah" class="form-control" disabled>
						<option value="A+" <?php if($data_pendonor['GOLONGAN_DARAH']=="A+") echo 'selected="selected"'; ?>>A+</option>
						<option value="A-" <?php if($data_pendonor['GOLONGAN_DARAH']=="A-") echo 'selected="selected"'; ?>>A-</option>
						<option value="B+" <?php if($data_pendonor['GOLONGAN_DARAH']=="B+") echo 'selected="selected"'; ?>>B+</option>
						<option value="B-" <?php if($data_pendonor['GOLONGAN_DARAH']=="B-") echo 'selected="selected"'; ?>>B-</option>
						<option value="AB+" <?php if($data_pendonor['GOLONGAN_DARAH']=="AB+") echo 'selected="selected"'; ?>>AB+</option>
						<option value="AB-" <?php if($data_pendonor['GOLONGAN_DARAH']=="AB-") echo 'selected="selected"'; ?>>AB-</option>
						<option value="O+" <?php if($data_pendonor['GOLONGAN_DARAH']=="O+") echo 'selected="selected"'; ?>>O+</option>
						<option value="O-" <?php if($data_pendonor['GOLONGAN_DARAH']=="O-") echo 'selected="selected"'; ?>>O-</option>
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
					<input type="text" required name="tempat_lahir" class="form-control" value="<?php echo $data_pendonor['TEMPAT_LAHIR']; ?>">
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
						<option value="pria" <?php if($data_pendonor['JENIS_KELAMIN']=="pria") echo 'selected="selected"'; ?>>Pria</option>
						<option value="wanita" <?php if($data_pendonor['JENIS_KELAMIN']=="wanita") echo 'selected="selected"'; ?>>Wanita</option>
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
					<input type="date" required name="tanggal_lahir" class="form-control" value="<?php echo $data_pendonor['TANGGAL_LAHIR']; ?>">
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
					<input type="text" required name="no_telp" class="form-control" value="<?php echo $data_pendonor['NO_TELEPON']; ?>">
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
						<option value="tni" <?php if($data_pendonor['PEKERJAAN']=="tni") echo 'selected="selected"'; ?>>TNI</option>
						<option value="polri" <?php if($data_pendonor['PEKERJAAN']=="polri") echo 'selected="selected"'; ?>>POLRI</option>
						<option value="mahasiswa/pelajar" <?php if($data_pendonor['PEKERJAAN']=="mahasiswa/pelajar") echo 'selected="selected"'; ?>>Mahasiswa/Pelajar</option>
						<option value="swasta/wiraswasta" <?php if($data_pendonor['PEKERJAAN']=="swasta/wiraswasta") echo 'selected="selected"'; ?>>Swasta/Wiraswasta</option>
						<option value="lain-lain" <?php if($data_pendonor['PEKERJAAN']=="lain-lain") echo 'selected="selected"'; ?>>Lain-Lain</option>
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
					<textarea rows="2" required class="form-control" name="alamat"><?php echo $data_pendonor['ALAMAT']; ?></textarea>
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
					<input type="text" required name="kelurahan" class="form-control" value="<?php echo $data_pendonor['KELURAHAN']; ?>">
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
					<input type="text" required name="kecamatan" class="form-control" value="<?php echo $data_pendonor['KECAMATAN']; ?>">
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
					<input type="text" required name="rt" class="form-control" value="<?php echo $rt; ?>">
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
					<input type="text" required name="rw" class="form-control" value="<?php echo $rw; ?>">
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
					<input type="text" required name="kode_pos" class="form-control" value="<?php echo $data_pendonor['KODE_POS']; ?>">
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