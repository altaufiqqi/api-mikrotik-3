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
							<a href="paket" class="nav-link ">
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
							<a href="#" class="nav-link active">
								<i class="nav-icon fas fa-hand-holding-usd"></i>
								<p>
									Tagihan
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="btagihan" class="nav-link active">
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
							<a href="keuangan" class="nav-link ">
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
			<div class="card card-default">
				<div class="card-header">
					<h3 class="card-title"><b>Buat Tagihan</b></h3>
				</div>

				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="col-sm-6"></div>
							<div class="form-group">
								<label>Bulan</label>
								<select class="form-control select2 select2-hidden-accessible" style="width: 50%;"
									data-select2-id="1" tabindex="-1" aria-hidden="true">
									<option selected="selected" data-select2-id="3">-- Pilih Bulan --</option>
									<option>Januari</option>
									<option>Februari</option>
									<option>Maret</option>
									<option>April</option>
									<option>Mei</option>
									<option>Juni</option>
									<option>Juli</option>
									<option>Agustus</option>
									<option>September</option>
									<option>Oktober</option>
									<option>November</option>
									<option>Desember</option>
								</select><span class="select2 select2-container select2-container--default" dir="ltr"
									data-select2-id="2" style="width: 100%;"></span>
								<span class="dropdown-wrapper" aria-hidden="true"></span>
							</div>
							<!-- /.form-group -->
							<div class="form-group ">
								<label>Tahun</label>
								<select class="form-control select2 select2-hidden-accessible" style="width: 50%;"
									data-select2-id="4" tabindex="-1" aria-hidden="true">
									<option selected="selected" data-select2-id="6">-- Pilih Tahun --</option>
									<option>2010</option>
									<option>2011</option>
									<option>2012</option>
									<option>2013</option>
									<option>2014</option>
									<option>2015</option>
									<option>2016</option>
									<option>2017</option>
									<option>2018</option>
									<option>2019</option>
									<option>2020</option>
									<option>2021</option>
									<option>2022</option>
								</select><span
									class="select2 select2-container select2-container--default select2-container--disabled"
									dir="ltr" data-select2-id="5" style="width: 100%;"></span>
								<span class="dropdown-wrapper" aria-hidden="true"></span>
							</div>
							<!-- /.form-group -->
						</div>
						<div class="col-sm-6 mt-4">
							<span style="float: right">
								<a href="buat_tagihan.php">
									<button type="button" class="btn btn-default">Batal</button>
								</a>
								<a href="notif_berhasil.php">
									<button type="button" class="btn btn-primary">Buat Tagihan</button>
								</a>
							</span>
						</div>
					</div>
				</div>
			</div>

			<!-- /.Peringatan-->
			<div class="callout callout-info">
				<h5><i class="fas fa-info"></i> Data Tagihan</h5>
				<b>Bulan Agustus 2021</b>
			</div>


			<?php
				//mengambil jumlah data
				$get1 = mysqli_query($koneksi,"SELECT * FROM tbl_tagihan");
				$count1 = mysqli_num_rows($get1);
			?>
			<div class="card">
				<!-- /.card-header -->
				<div class="card-body">
					<a href="c_tambah_tagihan">
						<button type="button" class="btn btn-success mb-3">
							<i class="far fa-plus-square mr-2"></i>Tambah Data Tagihan
						</button>
					</a>
					<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
									Showing <?=$count1;?> entries
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
											<th class="sorting sorting_asc pb-3" tabindex="0" aria-controls="example1"
												rowspan="1" colspan="1" aria-sort="ascending"
												aria-label="Rendering engine: activate to sort column descending">
												No
											</th>
											<th class="sorting pb-3" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1" aria-label="Browser: activate to sort column ascending"
												style="">
												ID
											</th>
											<th class="sorting pb-3" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1" aria-label="Platform(s): activate to sort column ascending"
												style="">
												Nama
											</th>
											<th class="sorting pb-3" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1"
												aria-label="Engine version: activate to sort column ascending" style="">
												Paket
											</th>
											<th class="sorting pb-3" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1" aria-label="CSS grade: activate to sort column ascending"
												style="">
												Tagihan
											</th>
											<th class="sorting pb-3" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1" aria-label="CSS grade: activate to sort column ascending"
												style="">
												Status
											</th>
											<th class="sorting pb-2" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1" aria-label="CSS grade: activate to sort column ascending"
												style="">
												Aksi
												<span style="float: right">
													<button type="button"
														class="btn btn-default btn-sm checkbox-toggle">
														<i class="far fa-square"></i>
													</button>
												</span>
											</th>
											<th class="sorting pb-2" tabindex="0" aria-controls="example1" rowspan="1"
												colspan="1" aria-label="CSS grade: activate to sort column ascending"
												style="">
												Ingatkan
												<span style="float: right">
													<button type="button"
														class="btn btn-default btn-sm checkbox-toggle">
														<i class="far fa-square"></i>
													</button>
												</span>
											</th>
										</tr>
									</thead>
									<?php
									$no = 1;
									$data_tagihan = mysqli_query($koneksi,"SELECT * FROM tbl_tagihan");
									while ($tampil = mysqli_fetch_array($data_tagihan)) {
										?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $tampil['id']; ?></td>
											<td><?= $tampil['nama']; ?></td>
											<td><?= $tampil['paket']; ?></td>
											<td><?= $tampil['tagihan']; ?></td>
											<td><button type="button" class="btn btn-block btn-primary btn-danger btn-xs">Belum Bayar</button></td>
											<td><button type="button" class="btn btn-block btn-primary btn-xs">Konfirmasi Pembayaran</button></td>
											<td><button type="button" class="btn btn-block btn-primary btn-success btn-xs">Whatsapp</button></td>
										</tr>
									<?php } ?>
									<tfoot>
										<tr>
											<th rowspan="1" colspan="1"></th>
											<th rowspan="1" colspan="1" style=""></th>
											<th rowspan="1" colspan="1" style=""></th>
											<th rowspan="1" colspan="1" style=""></th>
											<th rowspan="1" colspan="1" style=""></th>
										</tr>
									</tfoot>
								</table>
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
