<?php
	require('koneksi.php');
	$link = koneksi_db();
?>
<br>
<form action="proses_tambah_permintaan.php" enctype="multipart/form-data" method="post">
<h4>Permintaan Transfusi Darah</h4><br>
<div class="col-md-12">
<table class="table">
	<tr>
		<td class="col-md-2">
			Bagian
		</td>
		<td class="col-md-10">
			<input type="text" name="bagian" class="form-control">
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
			<input type="text" name="nama_dokter" class="form-control">
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
			<input type="text" name="ruangan" class="form-control">
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
			<input type="text" name="diagnosa_sementara" class="form-control">
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
			<input type="text" name="indikasi_tranfusi" class="form-control">
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
			<input type="text" name="nama_penderita" class="form-control">
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
			<input type="text" name="nomor_register" class="form-control">
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

<div class="col-md-3">
	<table class="table">
		<tr>
		<td>
			Umur
		</td>
		<td>
			<input type="text" name="umur" class="form-control">
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
			<input type="text" name="hb" class="form-control">
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
			<input type="text" name="alamat" class="form-control">
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
			<input type="date" name="tanggal_permintaan" class="form-control">
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
			<input type="time" name="waktu_permintaan" class="form-control">
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

<div class="col-md-6">
	<table class="table">
		<tr>
		<td class="col-md-2">
			Metoda
		</td>
		<td class="col-md-4">
			<select name="metoda" class="form-control">
				<option value="manual">Manual</option>
				<option value="optipres">Optipres</option>
				<option value="apheresis">Apheresis</option>
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
			Jumlah
		</td>
		<td class="col-md-4">
			<input type="text" name="jumlah" class="form-control" placeholder="Unit">
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
				<option value="segera">Segera (dilakukan cross-match tahap I selama 20 menit)</option>
				<option value="biasa">Biasa (dilakukan cross-match tahap I-II-III selama 60 menit)</option>
				
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
			<input type="date" name="tanggal_transfusi_sebelumnya" class="form-control">
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
			<input type="text" name="jenis_darah_transfusi_sebelumnya" class="form-control">
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
			<textarea rows="3" class="form-control" name="reaksi_transfusi_sebelumnya"></textarea>
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
			<textarea rows="3" class="form-control" name="riwayat_kehamilan_sebelumnya" placeholder="Contoh : Abortus, Premature, Kematian Bayi, Kelainan Congenital, Icterus, Anemia"></textarea>
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
			<textarea rows="3" class="form-control" name="keterangan_lainnya"></textarea>
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