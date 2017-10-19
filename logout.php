<?php
	session_start();
	session_destroy();	
	echo ("<script> location.href ='halaman_utama.php';</script>");
?>