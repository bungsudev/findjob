<html lang="en">

<?php $this->load->view("components/head"); ?>

<body>
	<?php $this->load->view("components/nav"); ?>

	<div class="container-fluid bg-light">
		<div class="row">
			<div class="col d-flex justify-content-center mt-3">
				<div class="loginBox mb-3">
					<div class="d-flex justify-content-center">
						<img src="assets/images/login/avatar.png" alt="loginfindjob" width="120px" height="120px">
					</div>
					<hr>
					<h4 class="d-flex justify-content-center">Sign in FindJob</h4>
					<form action="login" method="POST">
						<div class="form-group">
							<label class="sr-only" for="identity">Email</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><span class="oi oi-envelope-closed"></span></div>
								</div>
								<input type="text" class="form-control" id="identity" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label class="sr-only" for="password">Password</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text"><span class="oi oi-key"></span></div>
								</div>
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<button class="ml-0 btn btn-block btn-info" id="btnsignin">SIGN IN</button>
						</div>
						<div class="form-group">
							<div class="ml-1 row">
								<div class="reg1 col-lg-7">Belum memiliki akun?</div>
								<div class="reg2 col-lg-5">
									<a href="signup">Daftar disini</a>
								</div>
							</div>
						</div>
						<hr> <span class="d-flex justify-content-center">or</span>
						<div class="g-signin2 d-flex justify-content-center" data-onsuccess="onSignIn"
							data-theme="dark"></div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('components/footer'); ?>
	<?php $this->load->view('components/script'); ?>
</body>

</html>