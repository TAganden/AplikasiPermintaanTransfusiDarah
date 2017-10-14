<?php
session_start();
?>
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation" class="active">
					<a href="petugas.php?menu=profile&action=tampil"><?php echo $_SESSION['s_nama']; ?></a>
				</li>
				<li role="presentation">
					<a href="petugas.php?menu=beranda&action=tampil">Beranda</a>
				</li>
				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      					Data <span class="caret"></span>
    				</a>
    				<ul class="dropdown-menu">
    					<li>
    						<a href="">Stok Darah</a>
    					</li>
    					<li>
    						<a href="">Pendonor</a>
    					</li>
    					<li>
    						<a href="">Kegiatan Donor</a>
    					</li>
    					<li>
    						<a href="">Kantong Darah</a>
    					</li>
    					<li>
    						<a href="">Laporan Bulanan</a>
    					</li>
    				</ul>
				</li>
				<li role="presentation">
					<a href="petugas.php?menu=permintaan&action=tampil">Permintaan Transfusi</a>
				</li>
			</ul>