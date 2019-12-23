</head>
<body class="nav-md footer_fixed">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col menu_fixed">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="home" class="site_title"><i class="fa fa-binoculars"></i> <span>FindJob!</span></a>
						<!-- <img width="230px" height="55" src="assets/images/LogoFindJob.svg" alt="FindJob Logo"> -->
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="vendor/template/production/images/img.jpg" alt="..."
								class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>Al azmi</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<ul class="nav side-menu">
							<?php $role = '1'; ?>
							
								<li><a href="company/home"><i class="fa fa-home"></i> Beranda </a></li>								
								<li><a><i class="fa fa-tasks"></i> Kelola lamaran <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="company/manage/daftar_pelamar/">Daftar pelamar</a></li>
										<li><a href="company/manage/proses/">Dalam proses</a></li>
										<li><a href="company/manage/pelamar_terpilih/">Pelamar terpilih</a></li>
										<li><a href="company/manage/histori_pelamar/">Histori</a></li>
										<li><a href="company/manage/daftar_hitam/">Daftar hitam</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-bullhorn"></i> Kelola lowongan <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="#">Tambah lowongan</a></li>
										<li><a href="#">Lowongan aktif</a></li>
										<li><a href="#">Histori</a></li>
									</ul>
								</li>
								
								<li><a><i class="fa fa-sitemap"></i> Kelola daftar perusahaan </a></li>
								<li><a><i class="fa fa-users"></i> Kelola pengguna </a></li>
								<li><a><i class="fa fa-line-chart"></i> Statistik </a></li>
								<li><a><i class="fa fa-print"></i> Laporan </a></li>
								<?php if ($role == '2'): ?>
							<?php endif; ?>
							</ul>
						</div>

					</div>
				</div>
			</div>