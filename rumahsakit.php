<?php
require( 'header.php' );
$tgl = date( 'd-m-Y' );
date_default_timezone_set( "Asia/Jakarta" );
$menu = $_GET['menu'];
$action = $_GET['action'];

?>
<nav class="navbar navbar-inverse">
	<a class="navbar-brand" href="rumahsakit.php?menu=profile&action=tampil">Unit Donor Darah PMI Kota Bandung</a>
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
					require('menu_profile.php');
				}else if(($menu=='beranda')){
					require('menu_beranda.php');
				}else if(($menu=='permintaan')){
					require('menu_permintaan.php');
				}
			?>
			

		</div>

		<div class="col-md-10">
			<?php
				if(($menu=='profile')&&($action=='tampil')){
					require('profile_rumah_sakit.php');
				}else if(($menu=='beranda')&&($action=='tampil')){
					require('beranda.php');
				}else if(($menu=='permintaan')&&($action=='tampil')){
					require('permintaan.php');
				}else if(($menu=='permintaan')&&($action=='tambah')){
					require('tambah_permintaan.php');
				}else if(($menu=='permintaan')&&($action=='ubah')){
					require('ubah_permintaan.php');
				}
			?>
		</div>
	</div>
</div>
<?php
require( 'footer.php' );
?>