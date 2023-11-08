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

              <form method="post" action="<?= site_url('barang/update') ?>">
                <input type="hidden" name="id" value="<?= $edit->id_barang ?>">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Nama Barang</label>
                      <input type="text"  name="jenis_barang" class="form-control"  value="<?= $edit->jenis_barang ?>">
                    </div>

                    <div class="form-group">
                      <label>Merk</label>
                      <input type="text"  name="merk" class="form-control"  value="<?= $edit->merk ?>">
                    </div>

                    <div class="form-group">
                      <label>type</label>
                      <input type="text"  name="type" class="form-control"  value="<?= $edit->type ?>">
                    </div>

                    <div class="form-group">
                      <label>Jumlah</label>
                      <input type="number"  name="jumlah" class="form-control"  value="<?= $edit->jumlah ?>" min="0" >
                    </div>


                    <input type="submit" class="btn btn-primary btn-sm" value="Update">
                    <a href="<?= site_url('barang'); ?>" class="btn btn-danger btn-sm">Cancel</a>

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




