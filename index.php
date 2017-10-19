<?php
session_start();
require( 'header.php' );
require('koneksi.php');
$link = koneksi_db();
?>
<?php
if ( isset( $_GET[ 'menu' ] ) ) {
	$menu = $_GET['menu'];
	if ( ( $menu == 'tentang_kami' ) ) {
		require( 'tentang_kami/menu_tentang_kami.php' );
	}elseif(($menu == 'beranda')){
		require('menu_beranda_utama.php');
	}
		
}else{
	require( 'tentang_kami/menu_tentang_kami.php' );
}

if ( isset( $_GET[ 'action' ] ) ) {
	$action = $_GET['action'];
	if (($menu == 'tentang_kami') &&( $action == 'tampil' ) ) {
		require( 'tentang_kami/tentang_kami.php' );
	}elseif(($menu == 'tentang_kami') &&( $action == 'cari' )){
		require('tentang_kami/cari_tentang_kami.php');
	}elseif(($menu == 'beranda') &&( $action == 'tampil' )){
		require('beranda_utama.php');
	}
		
}else{
	require( 'tentang_kami/tentang_kami.php' );
}
?>
<?php
require( 'footer.php' );
?>