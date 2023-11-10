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

              <form method="post" action="<?= site_url('lokasi/update') ?>">
                <input type="hidden" name="id" value="<?= $edit->id_lokasi ?>">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
						<label>Nama Lokasi</label>
						<input type="text" name="nama_lokasi" class="form-control" required="" placeholder="Masukkan nama barang..." value="<?= $edit->nama_lokasi ?>">
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" required="" placeholder="Masukkan merk..." value="<?= $edit->alamat ?>">
					</div>

					<div class="form-group">
						<label>Link Google Maps</label>
						<input type="text" name="link_maps" class="form-control" required="" placeholder="Masukkan type..." value="<?= $edit->link_maps ?>">
					</div>


                    <input type="submit" class="btn btn-primary btn-sm" value="Update">
                    <a href="<?= site_url('lokasi/detail/'.$edit->id_lokasi );?> " class="btn btn-danger btn-sm">Cancel</a>

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




