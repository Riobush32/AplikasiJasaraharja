<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><i class="fas fa-medicine"></i> <?= $title ?> <?= $rs->nama_rs ?></h1>
          <hr>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <!-- Small boxes (Stat box) -->
      <div class="row">


        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <?= $title ?> <?= $rs->nama_rs ?>
            </div>
            <div class="card-body">
              <form method="post" action="<?= site_url('rumahsakit/updateobat') ?>">
                <input type="hidden" name="rs" value="<?= $rs->IDrs ?>">
                <input type="hidden" name="id" value="<?= $edit->id_obat ?>">

                <div class="row">
                  <div class="col-sm-12">

                    <div class="form-group">
                      <label>Nama Obat</label>
                      <input type="text" name="nama" class="form-control" value="<?= $edit->nama_obat ?>">
                    </div>

                    <div class="form-group">
                      <label>Harga</label>
                      <input type="text" onkeyup='formatRupiah(this)' name="harga" class="form-control" value="<?= $edit->harga_obat ?>">
                    </div>

                    <input type="submit" class="btn btn-primary btn-sm" value="Update">
                    <a href="<?= site_url('rumahsakit/detailobat/'.$rs->IDrs); ?>" class="btn btn-danger btn-sm">Cancel</a>

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

