<?php
if ( isset( $_SESSION[ 's_pesan' ] ) ) {
	?>
	<div class="alert alert-warning" role="alert" align="center">
		<strong>Warning! </strong>
		<?php echo $_SESSION['s_pesan']; ?>
	</div>
	<?php
}
?>
<br>
<br>
<br>
<div class="container-fluid" align="center"><br>
	<h1>Aplikasi Permintaan Transfusi Darah</h1>
</div>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<table class="table table-bordered">
				<form enctype="multipart/form-data" action="login.php" method="post">
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" placeholder="Email" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" placeholder="Password" class="form-control">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<center>
								<label class="radio-inline">
  									<input type="radio" name="pilihan" value="rumah_sakit" checked> Rumah Sakit
								</label>
							


								<label class="radio-inline">
  									<input type="radio" name="pilihan" value="petugas"> Petugas
								</label>
							</center>
						</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" class="form-control btn-primary" value="Login" </td>
					</tr>
				</form>
			</table>
		</div>
	</div>
</div>