<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1 class="m-0"><i class="nav-icon fas fa-hospital"></i> <?= $title ?></h1>
					<hr>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<!-- MULAI DISINI -->
		<section class="content">
			<div class="container-fluid">
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<?= $title ?>
							</div>
							<div class="card-body">
								<?php if($this->session->userdata('akses') == 1 ) : ?>
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
									<i class="fa fa-plus"></i> Tambah Data
								</button>
								<?php endif ?>
								<a target="_blank" href="<?= site_url('rumahsakit/cetak');?>"
									class="btn btn-success">Cetak </a>
								<br>
								<table id="example1" class="table table-bordered table-striped table-sm">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Qr Code Image</th>
											<th>Qr Code Data</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
                
                $no=1;
                foreach ($rs as $key ) { ?>

										<tr>
											<td width="30px">
												<center><?= $no++ ?></center>
											</td>
											<td><?= $key->nama_asset ?></td>
											<td><?= $key->qrcode_data ?></td>
											<td><img width="200" src="./qrcode/<?= $key->qrcode_path ?>" alt="QrCode: <?= $key->qrcode_data ?>"></td>
										</tr>
										<?php
                }5
                ?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

					<div id="map"></div>
			</div><!-- /.container-fluid -->
		</section>
		<!-- SELESAI DISINI -->
	</section>
	<!-- /.content -->
</div>

<div class="modal fade" id="modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Asset</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

			</div>
			<div class="modal-body">

				<form method="post" action="<?= site_url('assets/proses') ?>">


					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama_asset" class="form-control" required="">
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" required="">
							</div>


							<input type="submit" class="btn btn-primary btn-sm" value="Simpan">
							<a href="<?= site_url('rumahsakit'); ?>" class="btn btn-danger btn-sm">Cancel</a>

						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<script
        src="https://maps.googleapis.com/maps/api/js?key=INSERT_YOUR_API_KEY&callback=initMap&v=weekly"
        defer
      ></script>