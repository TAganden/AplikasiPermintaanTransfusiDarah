<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<center>
				<img src="gambar/Logo-Palang-Merah-Indonesia.png" class="img-rounded">
			</center>
			<br>

			<p align="justify">Inilah yang terpenting dari tujuan lambang. Pada masa konflik, lambang tersebut yang dihasilkan oleh Konvensi Jenewa merupakan suatu tanda perlindungan yang mudah terlihat. Ini dimaksud agar diketahui oleh para kombatan (pihak yang berperang), bahwa orang-orang (Sukarelawan dari Perhimpunan Nasional/orang medis), Unit Medis (Rumah Sakit, Pos P3K), dan sarana transportasi (laut, udara dan darat)</p>
			<hr>

			<h3>Cari tahu tentang data diri donor kamu!</h3>
			<div class="col-md-4">
				<h4>Masukan ID Donor disini :</h4>
			</div>
			<form action="index.php?menu=tentang_kami&action=cari" enctype="multipart/form-data" method="post">
				<div class="col-md-4"><input type="text" class="form-control" name="id_donor">
				</div>
				<div class="col-md-2"><input type="submit" name="submit" value="Submit" class="form-control btn-danger">
				</div>
			</form>
			<?php
			if ( isset( $_SESSION[ 's_pesan_tentang_kami' ] ) ) {
				?>
			<div class="alert alert-danger alert-dismissible fade in col-md-12" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
				<strong>Maaf! </strong>
				<?php echo $_SESSION['s_pesan_tentang_kami'];
	unset($_SESSION['s_pesan_tentang_kami']);?>
			</div>
			<?php
			}
			?>
		</div>

	</div>
</div>