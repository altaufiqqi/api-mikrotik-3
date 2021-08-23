<?php
include "koneksi_db.php";
?>
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
							<a href="pakett" class="nav-link active">
								<i class="nav-icon fas fa-hand-holding-heart"></i>
								<p>
									Paket
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="pelanggan_data" class="nav-link ">
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
							<a href="#" class="nav-link ">
								<i class="nav-icon fas fa-wallet"></i>
								<p>
									Pembayaran
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
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
							<h1 class="m-0">Paket | <small>Administrator</small></h1>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->
			<!-- Content Header (Page header) -->
			<!-- Main content -->

			<div class="card">
				<!-- /.card-header -->
				<div class="card-body">
					<!-- /.button tambah admin -->
					<a href="tbh_paket" class="">
						<button type="button" class="btn btn-block btn-primary btn-success mb-3"
							style="width:160px;height:44px">
							<i class="far fa-plus-square mr-2"></i>Tambah Paket</button>
					</a>
					<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="row">
							<div class="col-sm-12 col-md-6 ">
								<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
									Showing 3 entries
								</div>
							</div>
							<div class="col-sm-12 col-md-6 mb-2">
								<div id="example1_filter" class="dataTables_filter">

									<span style="float: right">
										<div class="input-group input-group-sm" style="width: 150px;">
											<input type="text" name="table_search" class="form-control float-right"
												placeholder="Search">

											<div class="input-group-append">
												<button type="submit" class="btn btn-default">
													<i class="fas fa-search"></i>
												</button>
											</div>
										</div>
									</span>

								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
									role="grid" aria-describedby="example1_info">
									<thead>
										<tr role="row">
											<th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
												rowspan="1" colspan="1" aria-sort="ascending"
												aria-label="Rendering engine: activate to sort column descending">
												No
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1" aria-label="Platform(s): activate to sort column ascending"
												style="">
												ID
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1"
												aria-label="Engine version: activate to sort column ascending" style="">
												Paket
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1" aria-label="CSS grade: activate to sort column ascending"
												style="">
												Tarif
											</th>
											<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1" aria-label="CSS grade: activate to sort column ascending"
												style="">
												Aksi
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="odd">
											<td class="dtr-control sorting_1" tabindex="0">1</td>
											<td style="">P001</td>
											<td style="">10 Mbps</td>
											<td style="">Rp 270.000</td>
											<td style="">
												<div class="timeline-footer">
													<a class="btn btn-warning">
														<i class="fas fa-user-edit"></i>
													</a>
													<a class="btn btn-danger ml-1">
														<i class="fas fa-trash-alt"></i>
													</a>
												</div>	
											</td>
										</tr>
										<tr class="odd">
											<td class="dtr-control sorting_1" tabindex="0">2</td>
											<td style="">P002</td>
											<td style="">20 Mbps</td>
											<td style="">Rp 320.000</td>
											<td style="">
												<div class="timeline-footer">
													<a class="btn btn-warning">
														<i class="fas fa-user-edit"></i>
													</a>
													<a class="btn btn-danger ml-1">
														<i class="fas fa-trash-alt"></i>
													</a>
												</div>
											</td>
										</tr>
                                        <tr class="odd">
											<td class="dtr-control sorting_1" tabindex="0">3</td>
											<td style="">P003</td>
											<td style="">50 Mbps</td>
											<td style="">Rp 580.000</td>
											<td style="">
												<div class="timeline-footer">
													<a class="btn btn-warning">
														<i class="fas fa-user-edit"></i>
													</a>
													<a class="btn btn-danger ml-1">
														<i class="fas fa-trash-alt"></i>
													</a>
												</div>
											</td>
										</tr>
										<?php
										$no = 1;
										$ambildata = mysqli_query($koneksi, "select * from tb_tambah_paket");
										while ($tampil = mysqli_fetch_array($ambildata)) {
											$warna = ($no % 2 == 1) ? "white" : "#eee";
											echo "
											<tr bgcolor='$warna'>
												<td>$no</td>
												<td>$tampil[id_paket]</td>
												<td>$tampil[paket]</td>
												<td>$tampil[tarif]</td>
												<td>
													<a class='btn btn-danger' href='?kode=$tampil[id_paket]'>
														<i class='fas fa-trash-alt'></i>
													</a>
												</td>
											<tr>";
											$no++;
										}
										?>
									</tbody>
								</table>
								<?php
						if (isset($_GET['kode'])) {
							mysqli_query($koneksi, "delete from tb_tambah_paket where id_paket='$_GET[kode]'");

							echo "Data berhasil dihapus";
							echo "<meta http-equiv=refresh content=2;URL='paket'>";
						}
						?>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-5">
								<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
									Showing
									1 to 10 of 30 entries</div>
							</div>
							<div class="col-sm-12 col-md-7">
								<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
									<ul class="pagination pagination-sm m-0 float-right">
										<li class="page-item"><a class="page-link" href="#">«</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">»</a></li>
									</ul>
								</div>
							</div>
						</div>
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
		<script src="<?= base_url('asset/template/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
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
