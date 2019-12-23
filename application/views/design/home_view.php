<html lang="en">
<?php $this->load->view("components/head"); ?>

<body>
	<?php $this->load->view("components/nav"); ?>

	<div id="carouselFindJob" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="headpict d-block w-100" src="assets/images/findjob.jpg" alt="findjob homepage">
			</div>
			<div class="carousel-item">
				<img class="headpict d-block w-100" src="assets/images/findjob2.jpg" alt="findjob homepage">
			</div>
			<div class="carousel-item">
				<img class="headpict d-block w-100" src="assets/images/findjob3.jpg" alt="findjob homepage">
			</div>
		</div>
		<div class="carousel-caption d-md-block">
			<h1>Cari Kesempatan Karir Terbaikmu</h1>
			<h5>Pantang menyerah adalah tekad utama mencari karir terbaik!</h5>
			<h4>#IndonesianBekerja</h4>
		</div>
	</div>
	<div class="d-flex justify-content-center mt-5 mb-5">
		<h1 class="text-dark">Find Jobs Here!</h1>
	</div>
	<div class="container-fluid d-flex justify-content-center">
		<div class="row">
			<div class="col-sm-12 col-lg-6 d-flex justify-content-center">
				<div class="boxInner">
					<h4 class="text-secondary"><b>Pencari Kerja</b></h4>
					<img class="d-block mx-auto mt-4 imgScale" src="assets/images/jobseeker.png"
						alt="Cari kerja di FindJob." width="200" height="100">
					<p>Temukan masa depan anda bersama <strong>FindJob!</strong></p>
					<button class="btn btn-block btn-info">Cari Lowongan <span
							class="oi oi-chevron-right float-right mt-1"></span>
					</button>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6 d-flex justify-content-center">
				<div class="boxInner">
					<h4 class="text-secondary"><b>Perusahaan</b></h4>
					<img class="d-block mx-auto mt-4 imgScale" src="assets/images/employee.png"
						alt="Cari kerja di FindJob." width="200" height="100">
					<p>Rekrut pelamar kerja terbaik Anda di <strong>FindJob!</strong></p>
					<button class="btn btn-block btn-info">Posting Lowongan <span
							class="oi oi-chevron-right float-right mt-1"></span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Category Explore Job-->
	<div class="midCategory mt-5 p-3">
		<div class="container">
			<div class="text-center">
				<h1 class="text-dark">Explore Job</h1>
				<h5 class="text-secondary">Discover jobs that best match your interest</h5>
			</div>
			<div class="row mt-5">
				<div class="col-6 col-lg-3 d-flex justify-content-center">
					<div class="categoryBox text-center">
						<a href="#">
							<img src="assets/images/kategori/IT.png" alt="Kategori IT Findjob">
							<div>
								<h6 class="text-secondary mt-1">Computer IT</h6>
							</div>
						</a>
					</div>
				</div>
				<div class="col-6 col-lg-3 d-flex justify-content-center">
					<div class="categoryBox text-center">
						<a href="#">
							<img src="assets/images/kategori/accounting.png" alt="Kategori akuntan Findjob">
							<div>
								<h6 class="text-secondary mt-1">Accounting & Finance</h6>
							</div>
						</a>
					</div>
				</div>
				<div class="col-6 col-lg-3 d-flex justify-content-center">
					<div class="categoryBox text-center">
						<a href="#">
							<img src="assets/images/kategori/recruitment.png" alt="Kategori Human Resource Findjob">
							<div>
								<h6 class="text-secondary mt-1">Human Resource</h6>
							</div>
						</a>
					</div>
				</div>
				<div class="col-6 col-lg-3 d-flex justify-content-center">
					<div class="categoryBox text-center">
						<a href="#">
							<img src="assets/images/kategori/creative.png" alt="Kategori media creative Findjob">
							<div>
								<h6 class="text-secondary mt-1">Media Creative</h6>
							</div>
						</a>
					</div>
				</div>
				<!-- baris ke dua -->
				<div class="col-6 col-lg-3 d-flex justify-content-center">
					<div class="categoryBox text-center">
						<a href="#">
							<img src="assets/images/kategori/administration.png" alt="Kategori administration Findjob">
							<div>
								<h6 class="text-secondary mt-1">Administration</h6>
							</div>
						</a>
					</div>
				</div>
				<div class="col-6 col-lg-3 d-flex justify-content-center">
					<div class="categoryBox text-center">
						<a href="#">
							<img src="assets/images/kategori/general _service.png"
								alt="Kategori general services Findjob">
							<div>
								<h6 class="text-secondary mt-1">General Services</h6>
							</div>
						</a>
					</div>
				</div>
				<div class="col-6 col-lg-3 d-flex justify-content-center">
					<div class="categoryBox text-center">
						<a href="#">
							<img src="assets/images/kategori/sales.png" alt="Kategori sales dan marketing Findjob">
							<div>
								<h6 class="text-secondary mt-1">Sales & Marketing</h6>
							</div>
						</a>
					</div>
				</div>
				<div class="col-6 col-lg-3 d-flex justify-content-center">
					<div class="categoryBox text-center">
						<a href="#">
							<img src="assets/images/kategori/consultation.png"
								alt="Kategori management dan consultation Findjob">
							<div>
								<h6 class="text-secondary mt-1">Management & Consultant</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('components/footer'); ?>
	<?php $this->load->view('components/script'); ?>
</body>

</html>