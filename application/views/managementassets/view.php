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
											<th>Nama barang</th>
											<th>Merk</th>
											<th>Type</th>
											<th>Asal</th>
											<th>Tahun</th>
											<th>Jumlah</th>
											<th>Nomor Activa</th>
											<th>Lokasi</th>
											<th>keterangan</th>
											<th>QrCode</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php 
                
                $no=1;
                foreach ($assets as $key ) { ?>

										<tr>
											<td width="30px">
												<center><?= $no++ ?></center>
											</td>
											<td><?= $key->nama_barang ?></td>
											<td><?= $key->merk ?></td>
											<td><?= $key->type ?></td>
											<td><?= $key->asal ?></td>
											<td><?= $key->tahun ?></td>
											<td><?= $key->jumlah ?></td>
											<td><?= $key->nomor_activa ?></td>
											<td><?= $key->lokasi ?></td>
											<td><?= $key->keterangan ?></td>
											<td><img width="200" src="./qrcode/<?= $key->qrcode ?>" alt="QrCode: <?= $key->qrcode ?>"></td>
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
								<label>Nama Barang</label>
								<input type="text" name="nama_barang" class="form-control" required="" placeholder="Masukkan nama barang...">
							</div>

							<div class="form-group">
								<label>Merk</label>
								<input type="text" name="merk" class="form-control" required="" placeholder="Masukkan merk...">
							</div>

							<div class="form-group">
								<label>Type</label>
								<input type="text" name="type" class="form-control" required="" placeholder="Masukkan type...">
							</div>

							<div class="form-group">
								<label>Asal</label>
								<input type="text" name="asal" class="form-control" required="" placeholder="Masukkan asal...">
							</div>

							<div class="form-group">
								<label>Tahun</label>
								<input type="text" name="tahun" class="form-control" required="" placeholder="Masukkan tahun...">
							</div>

							<div class="form-group">
								<label>Jumlah</label>
								<input type="text" name="jumlah" class="form-control" required="" placeholder="Masukkan jumlah...">
							</div>

							<div class="form-group">
								<label>Nomor Activa</label>
								<input type="text" name="nomor_activa" class="form-control" required="" placeholder="Masukkan Nomor Activa...">
							</div>

							<div class="form-group">
								<label>lokasi</label>
								<input type="text" name="lokasi" class="form-control" required="" placeholder="Masukkan Lokasi...">
							</div>

							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" name="keterangan" class="form-control" required="" placeholder="Masukkan Keterangan...">
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
