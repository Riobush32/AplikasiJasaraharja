<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container">
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
			<div class="container">
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<?= $title ?>
							</div>
							<div class="card-body">

								<form method="post" action="<?= site_url('aktiva/update/'.$edit->id_aktiva) ?>">

									<div class="row">
										<div class="col-sm-12">
											<input type="hidden" name="id_lokasi" value="<?= $edit->id_lokasi ?>">
											<input type="hidden" name="id" value="<?= $edit->id_aktiva ?>">

											<div class="form-group">
												<label>Barang</label>
												<select class="custom-select" name="id_barang">
													<option class="text-info" selected value="<?= $edit->id_barang ?>">
														<?php
                                                            $data_barang = $this->db->get_where('tbl_barang',['id_barang' => $edit->id_barang]);
                                                            $deteail_barang = $data_barang->row();
                                                            echo $deteail_barang->jenis_barang;
                                                        ?>
													</option>
													<?php foreach ($barang as $br ) { ?>
                                                        <option value="<?= $br->id_barang;?>">
                                                            <?= $br->jenis_barang;?>
                                                        </option>
													<?php } ?>
												</select>
											</div>

											<div class="form-group">
												<label>Nomor Aktiva</label>
												<input type="text" name="nomor_aktiva" class="form-control" required=""
													placeholder="Masukkan nomor activa..."
													value="<?= $edit->nomor_aktiva; ?>">
											</div>

											<div class="form-group">
												<label>Asal</label>
												<input type="text" name="asal" class="form-control" required=""
													placeholder="Masukkan asal..." value="<?= $edit->asal ?>">
											</div>

											<div class="form-group">
												<label>Keterangan</label>
												<input type="text" name="ket" class="form-control" required=""
													placeholder="Masukkan keterangan..." value="<?= $edit->ket ?>">
											</div>

											<div class="form-group">
												<label>Jumlah</label>
												<input type="number" name="jumlah" class="form-control" required=""
													placeholder="Masukkan jumlah..." value="<?= $edit->jumlah ?>">
											</div>

											<div class="form-group">
												<label>Tahun</label>
												<input type="text" name="tahun" class="form-control" required=""
													placeholder="Masukkan tahun..." value="<?= $edit->tahun ?>">
											</div>

											<input type="submit" class="btn btn-primary btn-sm" value="Simpan">
											<a href="<?= site_url('lokasi/detail/'.$edit->id_lokasi); ?>"
												class="btn btn-danger btn-sm">Cancel</a>

										</div>
									</div>
								</form>


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
