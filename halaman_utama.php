<?php 
session_start();
if(isset($_SESSION['s_username'])){
	if(isset($_SESSION['s_petugas_id'])){
		echo ("<script> location.href ='petugas.php?menu=beranda&action=tampil';</script>");
	}elseif(isset($_SESSION['s_rumah_sakit_id'])){
		echo ("<script> location.href ='rumahsakit.php?menu=profile&action=tampil';</script>");
	}
		
	}else if(isset($_SESSION['s_pesan'])){
		require('header.php'); 
		require('isi_halaman_utama.php'); 
		require('footer.php');
		unset($_SESSION['s_pesan']);
	}else{
		require('header.php'); 
		require('isi_halaman_utama.php'); 
		require('footer.php');
	}?>