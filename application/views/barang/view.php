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
								<a target="_blank" href="<?= site_url('assets/cetak');?>"
									class="btn btn-success">Cetak </a>
								<br>
								<table id="example1" class="table table-bordered table-striped table-sm">
									<thead>
										<tr>
											<th>No</th>
											<th>Jenis Barang</th>
											<th>Merk</th>
											<th>Type</th>
											<th>Jumlah</th>
											<th></th>

									</thead>
									<tbody>
										<?php 
                
                $no=1;
                foreach ($barang as $key ) { ?>

										<tr>
											<td width="30px">
												<center><?= $no++ ?></center>
											</td>
											<td><?= $key->jenis_barang ?></td>
											<td><?= $key->merk ?></td>
											<td><?= $key->type ?></td>
											<td><?= $key->jumlah ?></td>
										</tr>
										<?php }  ?>

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
				<h4 class="modal-title">Tambah Barang</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>

			</div>
			<div class="modal-body">

				<form method="post" action="<?= site_url('barang/add') ?>">


					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Jenis Barang</label>
								<input type="text" name="jenis_barang" class="form-control" required="" placeholder="Masukkan nama barang...">
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
								<label>Jumlah</label>
								<input type="number" name="jumlah" class="form-control" required="" placeholder="Masukkan jumlah...">
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
