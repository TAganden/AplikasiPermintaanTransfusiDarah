<?php
		session_start();
		require ('koneksi.php');
		
		$link = koneksi_db();
		$pilihan = $_POST['pilihan'];
		
		if($pilihan=="rumah_sakit"){
			$sql="select * from rumah_sakit where username='".$_POST['username']."' and password='".$_POST['password']."'";
			$res = mysqli_query($link,$sql);
			$ketemu = mysqli_num_rows($res);
			while($data = mysqli_fetch_array($res)){
				$username = $data['USERNAME'];
				$password = $data['PASSWORD'];
				$rumah_sakit_id = $data['RUMAH_SAKIT_ID'];
				$nama_rumah_sakit = $data['NAMA'];
				$email = $data['EMAIL'];
				$no_telp = $data['NO_TELEPON'];
				$alamat = $data['ALAMAT'];
			}
			if($ketemu > 0)
			{
				$_SESSION['s_username']= $username;
				$_SESSION['s_password']= $password;
				$_SESSION['s_rumah_sakit_id']= $rumah_sakit_id;
				$_SESSION['s_nama_rumah_sakit']= $nama_rumah_sakit;
				$_SESSION['s_email'] = $email;
				$_SESSION['s_no_telp'] = $no_telp;
				$_SESSION['s_alamat'] = $alamat;
				echo ("<script> location.href ='rumahsakit.php?menu=profile&action=tampil';</script>");

			}
			else
			{
				$_SESSION['s_pesan'] = "Email atau Password Salah";
				echo ("<script> location.href ='halaman_utama.php';</script>");
			}
		}else if($pilihan=="petugas"){
			$sql="select * from petugas_pmi where username='".$_POST['username']."' and password='".$_POST['password']."'";
			$res = mysqli_query($link,$sql);
			$ketemu = mysqli_num_rows($res);
			while($data = mysqli_fetch_array($res)){
				$username = $data['USERNAME'];
				$password = $data['PASSWORD'];
				$email = $data['EMAIL'];
				$nama_petugas = $data['NAMA'];
				$petugas_id = $data['PETUGAS_PMI_ID'];
			}
			if($ketemu > 0)
			{
				$_SESSION['s_username']= $username;
				$_SESSION['s_password']= $password;
				$_SESSION['s_email']= $email;
				$_SESSION['s_nama']= $nama_petugas;
				$_SESSION['s_petugas_id']= $petugas_id;
				echo ("<script> location.href ='petugas.php?menu=profile&action=tampil';</script>");

			}
			else
			{
				$_SESSION['s_pesan'] = "Email atau Password Salah";
				echo ("<script> location.href ='halaman_utama.php';</script>");
			}
		}
		
		
		
		
		
	?>