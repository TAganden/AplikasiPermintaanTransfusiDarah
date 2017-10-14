<?php
	require('koneksi.php');
	$link = koneksi_db();
	$id = $_GET['id'];
	$query = "select * from permintaan_transfusi where permintaan_id=$id";
	$result = mysqli_query($link,$query);
	$data = mysqli_fetch_array($result);
?>
<br>
<form action="proses_ubah_permintaan.php?id=<?php echo $id; ?>" enctype="multipart/form-data" method="post">
<h4>Permintaan Transfusi Darah</h4><br>
<div class="col-md-12">
<table class="table">
	<tr>
		<td class="col-md-2">
			Bagian
		</td>
		<td class="col-md-10">
			<input type="text" name="bagian" class="form-control" value="<?php echo $data['BAGIAN']; ?>">
		</td>
	</tr>
</table>
</div>


<div class="col-md-12">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Nama Dokter
		</td>
		<td class="col-md-10">
			<input type="text" name="nama_dokter" class="form-control" value="<?php echo $data['NAMA_DOKTER']; ?>">
		</td>
	</tr>
	</table>
</div>
<div class="col-md-12">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Ruangan
		</td>
		<td class="col-md-10">
			<input type="text" name="ruangan" class="form-control" value="<?php echo $data['RUANGAN']; ?>">
		</td>
	</tr>
	</table>
</div>

<div class="col-md-12">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Diagnosa Sementara
		</td>
		<td class="col-md-10">
			<input type="text" name="diagnosa_sementara" class="form-control" value="<?php echo $data['DIAGNOSA_SEMENTARA']; ?>">
		</td>
	</tr>
	</table>
</div>

<div class="col-md-12">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Indikasi Transfusi
		</td>
		<td class="col-md-10">
			<input type="text" name="indikasi_tranfusi" class="form-control" value="<?php echo $data['INDIKASI_TRANSFUSI']; ?>">
		</td>
	</tr>
	</table>
</div>

<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Nama Penderita
		</td>
		<td class="col-md-4">
			<input type="text" name="nama_penderita" class="form-control" value="<?php echo $data['NAMA_PASIEN']; ?>">
		</td>
	</tr>
	</table>
</div>

<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Nomor Register
		</td>
		<td class="col-md-4">
			<input type="text" name="nomor_register" class="form-control" value="<?php echo $data['NO_REG']; ?>">
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
				<option value="pria" <?php if($data['JENIS_KELAMIN']=="pria") echo 'selected="selected"'; ?>>Pria</option>
				<option value="wanita" <?php if($data['JENIS_KELAMIN']=="wanita") echo 'selected="selected"'; ?>>Wanita</option>
			</select>
		</td>
	</tr>
	</table>
</div>

<div class="col-md-3">
	<table class="table">
		<tr>
		<td>
			Umur
		</td>
		<td>
			<input type="text" name="umur" class="form-control" value="<?php echo $data['UMUR_PASIEN']; ?>">
		</td>
	</tr>
	</table>
</div>

<div class="col-md-3">
	<table class="table">
		<tr>
		<td>
			Hb
		</td>
		<td>
			<input type="text" name="hb" class="form-control" value="<?php echo $data['HB']; ?>">
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
			<input type="text" name="alamat" class="form-control" value="<?php echo $data['ALAMAT']; ?>">
		</td>
	</tr>
	</table>
</div>

<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Tanggal Permintaan
		</td>
		<td class="col-md-4">
			<input type="date" name="tanggal_permintaan" class="form-control" value="<?php echo $data['TANGGAL']; ?>">
		</td>
	</tr>
	</table>
</div>

<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Waktu Permintaan
		</td>
		<td class="col-md-4">
			<input type="time" name="waktu_permintaan" class="form-control" value="<?php echo $data['WAKTU']; ?>">
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
				<option value="Whole Blood" <?php if($data['JENIS_DARAH']=="Whole Blood") echo 'selected="selected"'; ?>>Whole Blood</option>
				<option value="Packed Red Cells" <?php if($data['JENIS_DARAH']=="Packed Red Cells") echo 'selected="selected"'; ?>>Packed Red Cells</option>
				<option value="Thrombocyt Concentrate" <?php if($data['JENIS_DARAH']=="Thrombocyt Concentrate") echo 'selected="selected"'; ?>>Thrombocyt Concentrate</option>
				<option value="Liquid Plasma" <?php if($data['JENIS_DARAH']=="Liquid Plasma") echo 'selected="selected"'; ?>>Liquid Plasma</option>
				<option value="Fresh Frozen Plasma" <?php if($data['JENIS_DARAH']=="Fresh Frozen Plasma") echo 'selected="selected"'; ?>>Fresh Frozen Plasma</option>
				<option value="Cryoprecipitate" <?php if($data['JENIS_DARAH']=="Cryoprecipitate") echo 'selected="selected"'; ?>>Cryoprecipitate</option>
				<option value="Washed Red Cells" <?php if($data['JENIS_DARAH']=="Washed Red Cells") echo 'selected="selected"'; ?>>Washed Red Cells</option>
				<option value="Buffy Coat" <?php if($data['JENIS_DARAH']=="Buffy Coat") echo 'selected="selected"'; ?>>Buffy Coat</option>
			</select>
		</td>
	</tr>
	</table>
</div>

<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Metoda
		</td>
		<td class="col-md-4">
			<select name="metoda" class="form-control">
				<option value="manual" <?php if($data['METODA']=="manual") echo 'selected="selected"'; ?>>Manual</option>
				<option value="optipres" <?php if($data['METODA']=="optipres") echo 'selected="selected"'; ?>>Optipres</option>
				<option value="apheresis" <?php if($data['METODA']=="apheresis") echo 'selected="selected"'; ?>>Apheresis</option>
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
			<select name="golongan_darah" class="form-control">
				<option value="A+" <?php if($data['GOLONGAN_DARAH']=="A+") echo 'selected="selected"'; ?>>A+</option>
				<option value="A-" <?php if($data['GOLONGAN_DARAH']=="A-") echo 'selected="selected"'; ?>>A-</option>
				<option value="B+" <?php if($data['GOLONGAN_DARAH']=="B+") echo 'selected="selected"'; ?>>B+</option>
				<option value="B-" <?php if($data['GOLONGAN_DARAH']=="B-") echo 'selected="selected"'; ?>>B-</option>
				<option value="AB+" <?php if($data['GOLONGAN_DARAH']=="AB+") echo 'selected="selected"'; ?>>AB+</option>
				<option value="AB-" <?php if($data['GOLONGAN_DARAH']=="AB-") echo 'selected="selected"'; ?>>AB-</option>
				<option value="O+" <?php if($data['GOLONGAN_DARAH']=="O+") echo 'selected="selected"'; ?>>O+</option>
				<option value="O-" <?php if($data['GOLONGAN_DARAH']=="O-") echo 'selected="selected"'; ?>>O-</option>
			</select>
		</td>
	</tr>
	</table>
</div>

<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Jumlah
		</td>
		<td class="col-md-4">
			<input type="text" name="jumlah" class="form-control" placeholder="Unit" value="<?php echo $data['JUMLAH']; ?>">
		</td>
	</tr>
	</table>
</div>

<div class="col-md-12">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Kebutuhan Darah
		</td>
		<td class="col-md-10">
			<select name="kebutuhan_darah" class="form-control">
				<option value="segera" <?php if($data['KEBUTUHAN_DARAH']=="segera") echo 'selected="selected"'; ?>>Segera (dilakukan cross-match tahap I selama 20 menit)</option>
				<option value="biasa" <?php if($data['KEBUTUHAN_DARAH']=="biasa") echo 'selected="selected"'; ?>>Biasa (dilakukan cross-match tahap I-II-III selama 60 menit)</option>
				
			</select>
		</td>
	</tr>
	</table>
</div>

<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Tanggal Transfusi Sebelumnya
		</td>
		<td class="col-md-4">
			<input type="date" name="tanggal_transfusi_sebelumnya" class="form-control" value="<?php echo $data['TRANSFUSI_SEBELUMN_TGL']; ?>">
		</td>
	</tr>
	</table>
</div>

<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Jenis Darah Transfusi Sebelumnya
		</td>
		<td class="col-md-4">
			<input type="text" name="jenis_darah_transfusi_sebelumnya" class="form-control" value="<?php echo $data['TRANSFUSI_SEBELUM_JENIS']; ?>">
		</td>
	</tr>
	</table>
</div>

<div class="col-md-12">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Reaksi Transfusi Sebelumnya
		</td>
		<td class="col-md-10">
			<textarea rows="3" class="form-control" name="reaksi_transfusi_sebelumnya"><?php echo $data['TRANSFUSI_SEBELUM_REAKSI']; ?></textarea>
		</td>
	</tr>
	</table>
</div>

<div class="col-md-12">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Riwayat Kehamilan Sebelumnya
		</td>
		<td class="col-md-10">
			<textarea rows="3" class="form-control" name="riwayat_kehamilan_sebelumnya" placeholder="Contoh : Abortus, Premature, Kematian Bayi, Kelainan Congenital, Icterus, Anemia"><?php echo $data['RIWAYAT_KEHAMILAN']; ?></textarea>
		</td>
	</tr>
	</table>
</div>

<div class="col-md-12">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Keterangan Lainnya
		</td>
		<td class="col-md-10">
			<textarea rows="3" class="form-control" name="keterangan_lainnya"><?php echo $data['KETERANGAN_TAMBAHAN']; ?></textarea>
		</td>
	</tr>
	</table>
</div>
<div class="col-md-11"></div>
<div class="col-md-1">
<input type="submit" name="ubah" class="btn btn-primary" value="Ubah"><br>
<br>

</div>

</form>