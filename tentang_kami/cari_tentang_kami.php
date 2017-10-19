<?php

$id = $_POST['id_donor'];

$query_pendonor = "select * from pendonor where pendonor_id='$id'";
$result_pendonor = mysqli_query( $link, $query_pendonor );
$data_pendonor = mysqli_fetch_array( $result_pendonor );
$ketemu = mysqli_num_rows($result_pendonor);

?>
<?php
	if($ketemu>0){
?>
<div class="col-md-3">
	<div class="col-md-7"></div>
	<div class="col-md-5"><button onClick="location.href ='index.php'" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Kembali</button></div>

</div>

<div class="col-md-6">
<h3>Data diri anda</h3>
<table class="table">
	<tr>
		<td class="col-md-3">
			<strong>ID Donor</strong>
		</td>
		<td class="col-md-9">
			:
			<?php echo $data_pendonor['PENDONOR_ID']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Nama Lengkap</strong>
		</td>
		<td>
			:
			<?php echo $data_pendonor['NAMA']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Tempat Lahir</strong>
		</td>
		<td>
			: <?php echo $data_pendonor['TEMPAT_LAHIR']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Tanggal Lahir</strong>
		</td>
		<td>
			:
			<?php echo $data_pendonor['TANGGAL_LAHIR']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Alamat</strong>
		</td>
		<td>
			:
			<?php echo $data_pendonor['ALAMAT']." ".$data_pendonor['RT_RW'].", ".$data_pendonor['KELURAHAN'].", ".$data_pendonor['KECAMATAN']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>No. Telepon</strong>
		</td>
		<td>
			:
			<?php echo $data_pendonor['NO_TELEPON']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Pekerjaan</strong>
		</td>
		<td>
			: <?php echo $data_pendonor['PEKERJAAN']; ?>
		</td>
	</tr>
	<tr>
		<td>
			<strong>Golongan Darah</strong>
		</td>
		<td>
			:
			<?php echo $data_pendonor['GOLONGAN_DARAH']; ?>
		</td>
	</tr>
	
</table>
<hr style="border: dotted">
<?php
$query_riwayat_pendonor = "select * from riwayat_donor where pendonor_id = '$id'";
$result_riwayat_pendonor = mysqli_query( $link, $query_riwayat_pendonor );

?>

<h3>Data riwayat donor</h3>
<table class="table table-bordered table-striped">
	<tr>
		<td class="col-md-1">
			<strong>
				<center>No</center>
			</strong>
		</td>
		<td class="col-md-2">
			<strong>
				<center>Tanggal</center>
			</strong>
		</td>
		<td class="col-md-8">
			<strong>
				<center>Alamat</center>
			</strong>
		</td>
	</tr>
	<?php
	$no = 1;
	while ( $data_riwayat_pendonor = mysqli_fetch_array( $result_riwayat_pendonor ) ) {
		?>
	<tr>
		<td>
			<center>
				<?php echo $no; ?>
			</center>
		</td>
		<td>
			<center>
				<?php echo $data_riwayat_pendonor['TANGGAL'];?>
			</center>
		</td>
		<td>
			<?php echo $data_riwayat_pendonor['ALAMAT'];?>
		</td>
	</tr>
	<?php
		$no++;
	}
	?>
</table>
<?php
				 }else{
		$_SESSION['s_pesan_tentang_kami'] = "ID donor yang anda masukan salah atau tidak terdaftar! Masukan kembali ID donor anda";
		echo ("<script> location.href ='index.php';</script>");
	}
?>
</div>
