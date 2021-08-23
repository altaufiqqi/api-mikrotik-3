<!-- Content Header (Page header) -->

<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Beranda | <small>Administrator</small></h1>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Content Header (Page header) -->
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<!-- Info boxes -->
		<div class="row">
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3>3</h3>

						<p>Paket</p>
					</div>
					<div class="icon">
						<i class="fas fa-hand-holding-heart"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i
							class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-warning ">
					<div class="inner">
						<h3><?= $hotspotuser; ?></h3>

						<p>Pelanggan</p>
					</div>
					<div class="icon">
						<i class="nav-icon fas fa-users"></i>
					</div>
					<a href="#" class="small-box-footer ">More info
						<i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-primary">
					<div class="inner">
						<h3><?php echo $hotspotactive ?></h3>

						<p>Pelanggan Aktif</p>
					</div>
					<div class="icon">
						<i class="fas fa-user-clock"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i
							class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-success">
					<div class="inner">
						<h3>2</h3>

						<p>Lunas</p>
					</div>
					<div class="icon">
						<i class="fas fa-user-check"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i
							class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-6">
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<h3>1</h3>

						<p>Belum Bayar</p>
					</div>
					<div class="icon">
						<i class="fas fa-user-times"></i>
					</div>
					<a href="#" class="small-box-footer">More info <i
							class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
		<!-- /.row -->
		<!-- /.content-header -->
		<!-- /.content -->
	</div>
<hr color="#c4c4c4" />
<!-- /.content-wrapper -->
<div class="row">
	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box">
			<span class="info-box-icon bg-info elevation-1"><i class="fas fa-tachometer-alt"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">CPU Load</span>
				<span class="info-box-number">
					<?= $cpu; ?>
					<small>%</small>
				</span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-12 col-sm-6 col-md-3">
		<div class="info-box mb-3">
			<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-clock"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">Uptime</span>
				<span class="info-box-number"><?= $uptime; ?></span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>
	<!-- /.col -->
</div>