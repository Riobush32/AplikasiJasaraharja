<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-12">
					<h1 class="m-0"><i class="fas fa-hospital-alt"></i> <?= $title ?></h1>
					<hr>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-sm-5 col-12">
					<div class="card">
						<div class="card-header bg-black">
							<h5 class="card-title">Detail Lokasi</h5>
						</div>
						<div class="card-body">
							<dl class="row">
								<dt class="col-sm-3">Nama Lokasi</dt>
								<dd class="col-sm-9"><?= $lokasi->nama_lokasi ?></dd>

								<dt class="col-sm-3">Alamat</dt>
								<dd class="col-sm-9">
									<?= $lokasi->alamat ?>
								</dd>

								<dt class="col-sm-3">Google Maps Link</dt>
								<dd class="col-sm-9"><?= $lokasi->link_maps ?></dd>

								<dt class="col-sm-3">Qr Code Alamat</dt>
								<dd class="col-sm-9">
									<img width="200" src="../../qrcode/<?= $lokasi->qrcode ?>"
										alt="QrCode: <?= $lokasi->qrcode ?>">

								</dd>

								<dt class="col-sm-3">

								</dt>
								<dd class="col-sm-9">
									<?php if($this->session->userdata('akses') == 1 ) : ?>
									<a href="<?= site_url('lokasi/edit/'.$lokasi->id_lokasi);?>"
										class="btn btn-primary btn-sm">
										<i class="fa fa-edit"></i> Edit
									</a>
									<a href="<?= site_url('lokasi/delete/'.$lokasi->id_lokasi);?>"
										class="btn btn-danger btn-sm">
										<i class="fa fa-trash"> Delete</i>
									</a>
									<?php endif ?>
								</dd>
							</dl>
						</div>
					</div>
				</div>

				<div class="col-sm-7">
					<div class="card">
						<div class="card-header bg-black align-items-center d-flex justify-content-between">

							<div class="w-25">Data Barang</div>

							<div class="d-flex justify-content-end w-100">
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
									<i class="fa fa-plus"></i> Tambah Data
								</button>
							</div>
							<!--  -->

						</div>
						<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Jenis Barang</th>
										<!-- <th scope="col">Merk</th>
										<th scope="col">Type</th> -->
										<th scope="col">Jumlah</th>
									</tr>
								</thead>
								<tbody>
									<?php  $no=1; foreach ($aktiva as $key ) { ?>
									<tr>
										<th scope="row"><?= $no ?></th>
										<td><?= $key->id_barang ?></td>
										<!-- <td><?= $key->jumlah ?></td> -->
									</tr>
									<?php $no++; } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
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

				<form method="post" action="<?= site_url('aktiva/add') ?>">


					<div class="row">
						<div class="col-sm-12">
							<input type="hidden" name="id_lokasi" value="<?= $lokasi->id_lokasi ?>">

							<div class="form-group">
								<label>Barang</label>
								<select class="custom-select" name="id_barang">
									<?php foreach ($barang as $br ) { ?>
									<option value="<?= $br->id_barang;?>"><?= $br->jenis_barang;?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label>Nomor Aktiva</label>
								<input type="text" name="nomor_aktiva" class="form-control" required=""
									placeholder="Masukkan nomor activa...">
							</div>

							<div class="form-group">
								<label>Asal</label>
								<input type="text" name="asal" class="form-control" required=""
									placeholder="Masukkan asal...">
							</div>

							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" name="ket" class="form-control" required=""
									placeholder="Masukkan keterangan...">
							</div>

							<div class="form-group">
								<label>Jumlah</label>
								<input type="text" name="jumlah" class="form-control" required=""
									placeholder="Masukkan jumlah...">
							</div>

							<div class="form-group">
								<label>Tahun</label>
								<input type="text" name="tahun" class="form-control" required=""
									placeholder="Masukkan tahun...">
							</div>

							<input type="submit" class="btn btn-primary btn-sm" value="Simpan">
							<a href="<?= site_url('lokasi/detail/'.$lokasi->id_lokasi); ?>" class="btn btn-danger btn-sm">Cancel</a>

						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>

	<!-- /.modal-dialog -->


</div>
