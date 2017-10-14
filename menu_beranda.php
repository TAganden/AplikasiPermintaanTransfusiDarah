<?php
session_start();
?>
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation">
					<a href="rumahsakit.php?menu=profile&action=tampil"><?php echo $_SESSION['s_nama_rumah_sakit']; ?></a>
				</li>
				<li role="presentation" class="active">
					<a href="rumahsakit.php?menu=beranda&action=tampil">Beranda</a>
				</li>
				<li role="presentation">
					<a href="rumahsakit.php?menu=permintaan&action=tampil">Permintaan Transfusi</a>
				</li>
			</ul>