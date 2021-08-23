<!-- Page header (Data Pelanggan) -->
<div class="content-header">
<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-6">
			<h1 class="m-0">Data Tagihan | <small>Administrator</small></h1>
		</div>
	</div>
</div>
</div>

<!-- Main content -->

<div class="card">
<!-- card-header -->
<div class="card-body">
	<!-- /.Peringatan-->
	<h5><i class="fas fa-info pb-3"></i> Tambah Pelanggan</h5>

	<form action="" method="post">
		<table style="font-size: 14px;">
			<tr>
				<td width="130">ID</td>
				<td class="pt-2"><input type="text" name="id_pelanggan"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td class="pt-2"><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Paket</td>
				<td class="pt-2"><input type="text" name="paket"></td>
			</tr>
			<tr>
				<td>Tagihan</td>
				<td class="pt-2"><input type="text" name="tagihan"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td class="pt-2"><input type="text" name="status"></td>
			</tr>
			<tr>
				<td class="pt-3"><input type="submit" value="simpan" name="proses"></td>
			</tr>
		</table>
	</form>

	<?php
	include "koneksi_db.php";

	if (isset($_POST['proses'])) {
		mysqli_query($koneksi, "insert into data_pelanggan set
		id_pelanggan = '$_POST[id_pelanggan]',
		nama = '$_POST[nama]',
		no_hp = '$_POST[no_hp]',
		alamat = '$_POST[alamat]',
		email = '$_POST[email]',
		paket = '$_POST[paket]'");

		echo "berhasil tersimpan";
		echo "<meta http-equiv=refresh content=2;URL='pelanggan_data'>";
	}

	?>
</div>

<!-- /.card-body -->
