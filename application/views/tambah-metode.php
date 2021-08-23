<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RouteLINK | Beranda</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?= base_url('asset/template/') ?>plugins/fontawesome-free/css/all.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet"
		href="<?= base_url('asset/template/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('asset/template/') ?>dist/css/adminlte.min.css">
</head>

<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">

		<!-- Loading -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__wobble" src="asset/logo.png" height="60" width="60">
			<p class="animation__wobble">RouteLINK</p>
		</div>

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-light">
			<!-- Left navbar links garis 3-->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto ">
				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-danger navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-th-large"></i>
					</a>
				</li>
			</ul>
		</nav>

		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Logo -->
			<a href=".." class="brand-link">
				<img src="asset/logo.png" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light"><b>RouteLINK</b></span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Admin -->
				<div class="user-panel mt-1 mb-3 d-flex">
					<div class="image">
						<img src="asset/profil.png" class="img-circle elevation-2" alt="User Image"
							style="width:48px;height:48px;">
					</div>
					<div class="info">
						<a href="#" class="d-block" style="font-size:16px">Rizal Pradana</a>
						<a href="#" class="d-block" style="font-size:14px">Admin1</a>
					</div>
				</div>
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item menu-open">
							<a href="dashboard" class="nav-link">
								<i class="nav-icon fas fa-chart-line"></i>
								<p>
									Beranda
								</p>
							</a>
						<li class="nav-item">
							<a href="layanan" class="nav-link ">
								<i class="nav-icon fas fa-hand-holding-heart"></i>
								<p>
									Paket
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ">
								<i class="nav-icon fas fa-users"></i>
								<p>
									Pelanggan
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-hand-holding-usd"></i>
								<p>
									Tagihan
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="btagihan" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Buat Tagihan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="dtagihan" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Data Tagihan</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="keuangan" class="nav-link active">
								<i class="nav-icon fas fa-wallet"></i>
								<p>
									Pembayaran
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ">
								<i class="nav-icon fas fa-cogs"></i>
								<p>
									Pengaturan
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="pengaturan" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Profil Admin</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="./index.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Keluar</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper pl-3">
			<!-- Content Header (Page header) -->

			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Buat Tagihan | <small>Administrator</small></h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->
			<!-- Content Header (Page header) -->
			<!-- Main content -->
            
		<div class="content-wrapper pl-3">
			<!-- Content Header (Page header) -->

			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Metode Pembayaran | <small>Administrator</small></h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->
			<!-- Content Header (Page header) -->
			<!-- Main content -->

			<div class="card" style="width: 85%;">
				<!-- /.card-header -->
				<div class="card-body">
					<!-- /.button tambah admin -->
					<h4 class="mb-4">Tambah Metode Pembayaran</h4>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Transfer Via Bank</h3>


							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>

						<div class="card-body">
							<div class="form-group">
								<label for="exampleInputBank">Nama Bank</label>
								<input type="email" class="form-control" id="exampleInputBank" placeholder="Nama Bank">
							</div>
							<div class="form-group">
								<label for="exampleInputNorek">Nomor Rekening</label>
								<input type="password" class="form-control" id="exampleInputNorek"
									placeholder="Nomor Rekening">
							</div>
							<div class="form-group">
								<label for="exampleInputNama">Atas Nama</label>
								<input type="password" class="form-control" id="exampleInputNama"
									placeholder="Atas Nama">
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-default ms-2 " >Batal</button>
							<button type="submit" class="btn btn-primary ">Simpan</button>
						</div>

					</div>
					<!-- DROPDOWN TRANSFER VIA E-WALLET -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Transfer Via E-Wallet</h3>


							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
									<i class="fas fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label for="exampleInputWallet">Nama E-Wallet</label>
								<input type="email" class="form-control" id="exampleInputBank" placeholder="Nama Bank">
							</div>
							<div class="form-group">
								<label for="NoHP">Nomor HP</label>
								<input type="password" class="form-control" id="NoHP" placeholder="Nomor Rekening">
							</div>
							<div class="form-group">
								<label for="namaEwallet">Atas Nama</label>
								<input type="password" class="form-control" id="namaEwallet" placeholder="Atas Nama">
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-default ms-2">Batal</button>
							<button type="submit" class="btn btn-primary ">Simpan</button>
						</div>

					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.content-wrapper -->

				<!-- Control Sidebar -->
				<aside class="control-sidebar control-sidebar-dark">
					<!-- Control sidebar content goes here -->
				</aside>
				<!-- /.control-sidebar -->

				<!-- Main Footer -->
				<footer class="main-footer text-center">
					© 2003 - 2021 Routelink • All rights reserved • Love from Yogyakarta
				</footer>
			</div>
			<!-- ./wrapper -->

			<!-- REQUIRED SCRIPTS -->
			<!-- jQuery -->
			<script src="<?= base_url('asset/template/') ?>plugins/jquery/jquery.min.js"></script>
			<!-- Bootstrap -->
			<script src="<?= base_url('asset/template/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
			<!-- overlayScrollbars -->
			<script
				src="<?= base_url('asset/template/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
			</script>
			<!-- AdminLTE App -->
			<script src="<?= base_url('asset/template/') ?>dist/js/adminlte.js"></script>

			<!-- PAGE PLUGINS -->
			<!-- jQuery Mapael -->
			<script src="<?= base_url('asset/template/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
			<script src="<?= base_url('asset/template/') ?>plugins/raphael/raphael.min.js"></script>
			<script src="<?= base_url('asset/template/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
			<script src="<?= base_url('asset/template/') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
			<!-- ChartJS -->
			<script src="<?= base_url('asset/template/') ?>plugins/chart.js/Chart.min.js"></script>

			<!-- AdminLTE for demo purposes -->
			<script src="<?= base_url('asset/template/') ?>dist/js/demo.js"></script>
			<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
</body>

</html>
