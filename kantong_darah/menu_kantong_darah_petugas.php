
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation">
					<a href="petugas.php?menu=profile&action=tampil"><?php echo $_SESSION['s_nama']; ?></a>
				</li>
				<li role="presentation">
					<a href="petugas.php?menu=beranda&action=tampil">Beranda</a>
				</li>
				<li role="presentation">
					<a href="petugas.php?menu=permintaan&action=tampil">Permintaan Transfusi</a>
				</li>
				<li role="presentation" class="active">
					<a href="petugas.php?menu=kantong_darah&action=tampil">Kantong Darah</a>
				</li>
				<li role="presentation">
					<a href="petugas.php?menu=pendonor&action=tampil">Pendonor</a>
				</li>
				<li role="presentation">
					<a href="petugas.php?menu=formulir&action=tampil">Formulir BDRS</a>
				</li>
				<li role="presentation">
					<a href="petugas.php?menu=kegiatan_donor&action=tampil">Kegiatan Donor</a>
				</li>
			</ul>