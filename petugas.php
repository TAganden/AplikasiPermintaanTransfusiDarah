<?php
session_start();
require( 'header.php' );
$tgl = date( 'd-m-Y' );
date_default_timezone_set( "Asia/Jakarta" );
$menu = $_GET['menu'];
$action = $_GET['action'];

?>
<nav class="navbar navbar-inverse">
	<a class="navbar-brand" href="petugas.php?menu=profile&action=tampil">Aplikasi Permintaan Transfusi Darah</a>
	<form role="search" class="navbar-form navbar-right" action="logout.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<button type="submit" name="tombol" class="btn btn-primary"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</button>
		</div>
	</form>
</nav>
<div class="container-fluid ">
	<div class="row">
		<div class="col-md-2 "><br>
			<?php
				if(($menu=='profile')){
					require('menu_profile_petugas.php');
				}else if(($menu=='beranda')){
					require('menu_beranda_petugas.php');
				}else if(($menu=='permintaan')){
					require('menu_permintaan_petugas.php');
				}elseif($menu=='kantong_darah'){
					require('kantong_darah\menu_kantong_darah_petugas.php');
				}elseif($menu=='pendonor'){
					require('pendonor\menu_pendonor_petugas.php');
				}elseif($menu=='formulir'){
					require('menu_formulir_petugas.php');
				}elseif($menu=='kegiatan_donor'){
					require('menu_kegiatan_donor_petugas.php');
				}
			?>
			

		</div>

		<div class="col-md-10">
			<?php
				if(($menu=='profile')&&($action=='tampil')){
					require('profile_rumah_sakit.php');
				}else if(($menu=='beranda')&&($action=='tampil')){
					require('beranda_rumah_sakit.php');
				}else if(($menu=='permintaan')&&($action=='tampil')){
					require('permintaan_petugas.php');
				}else if(($menu=='kantong_darah')&&($action=='tampil')){
					require('kantong_darah\kantong_darah.php');
				}else if(($menu=='kantong_darah')&&($action=='tambah')){
					require('kantong_darah\tambah_kantong_darah.php');
				}else if(($menu=='pendonor')&&($action=='tampil')){
					require('pendonor\pendonor_petugas.php');
				}else if(($menu=='pendonor')&&($action=='tambah')){
					require('pendonor\tambah_pendonor_petugas.php');
				}else if(($menu=='pendonor')&&($action=='lihat')){
					require('pendonor\lihat_pendonor.php');
				}else if(($menu=='pendonor')&&($action=='ubah')){
					require('pendonor\ubah_pendonor.php');
				}
			?>
		</div>
	</div>
</div>
<?php
require( 'footer.php' );
?>