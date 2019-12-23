<html lang="en">
<?php $this->load->view("components/head"); ?>

<body>
	<?php $this->load->view("components/nav"); ?>

	<div class="container-fluid bg-light d-flex justify-content-center">
		<div class="row">
			<div class="col-lg-12 text-center mt-5">
				<h5><strong class="text-secondary">Kami sangat senang anda disini!</strong></h5>
				<h6 class="text-secondary">Apa yang bisa kami bantu?</h6>
			</div>
			<div class="col-lg-4 d-flex justify-content-center">
				<div class="signupBox mt-5 mb-5 text-center">
					<h5><strong>Saya mencari pekerjaan</strong></h5>
					<h6 class="small text-secondary">Buat akun sebagai pencari kerja</h6 class="small">
					<img class="mt-4 imgScale" src="assets/images/login/promotion.svg" alt="Daftar kerja di FindJob"
						width="100px">
					<a href="signup/pekerja">
						<button class="btn btn-info btn-block mx-auto mt-4 mb-2 btn200">MULAI MENCARI KERJA</button>
					</a>
					<small class="textNone">Kamu juga dapat daftar menggunakan <a href="#">Google</a></small>
				</div>
			</div>
			<div class="d-none d-lg-block col-lg-2 p-0">
				<div class="hrRight mt-5"></div>
			</div>
			<div class="d-none d-lg-block col-lg-2 p-0">
				<div class="hrLeft mt-5"></div>
			</div>
			<div class="col-lg-4  d-flex justify-content-center">
				<div class="signupBox mt-5 mb-5 text-center">
					<h5><strong>Saya mencari karyawan</strong></h5>
					<h6 class="small text-secondary">Buat akun sebagai perekrut</h6 class="small">
					<img class="mt-4 imgScale" src="assets/images/login/enterprise.svg"
						alt="Daftar rekruiter di FindJob" width="100px">
					<a href="signup/perusahaan">
						<button class="btn btn-info btn-block mx-auto btn200 mt-4 mb-2">MULAI MENJADI PEREKRUT</button>
					</a>
					<small class="textNone">Kamu juga dapat daftar menggunakan <a href="#">Google</a></small>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('components/footer'); ?>
	<?php $this->load->view('components/script'); ?>
</body>

</html>