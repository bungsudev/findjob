<html lang="en">
<?php $this->load->view("components/head"); ?>

<body>
	<?php $this->load->view("components/nav"); ?>
	<div class="container-fluit p-5 bg-light">
		<div class="row">
			<div class="container-fluid text-center p-3">
				<h3 class="text-dark">Recruit better with FindJob</h3>
				<h5 class="text-dark">More talent discovery, conversations that deliver.</h5>
			</div>
		</div>
		<div class="row justify-content-center mt-3">
			<div class="col-12 col-sm-12 col-lg-6  bg-white p-5 rounded">
				<form>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Email">
						</div>
						<div class="form-group col-md-6">
							<label for="nama">Nama</label>
							<input type="nama" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password">
						</div>
						<div class="form-group col-md-6">
							<label for="re-password">Ulang password</label>
							<input type="password" class="form-control" name="re_password" id="re_password"
								placeholder="Ulang password">
						</div>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" class="form-control" id="alamat" name="alamat" placeholder="1234 Main St">
					</div>
					<div class="form-row">
						<div class="form-group col-md-9">
							<label for="kota">Kota</label>
							<input type="text" class="form-control" name="kota" id="kota" placeholder="Nama kota">
						</div>
						<div class="form-group col-md-3">
							<label for="kodepos">Kode pos</label>
							<input type="text" class="form-control" name="kodepos" id="kodepos" placeholder="Kode pos">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="nama_perusahaan">Nama perusahaan</label>
							<input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan"
								placeholder="Nama perusahaan">
						</div>
						<div class="form-group col-md-6">
							<label for="jabatan">Jabatan</label>
							<input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan Anda">
						</div>
					</div>
					<button type="submit" class="ml-0 btn btn-info float-right">SIGN UP</button>
				</form>
			</div>
		</div>
	</div>
	<?php $this->load->view('components/footer'); ?>
	<?php $this->load->view('components/script'); ?>
</body>

</html>