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

              <form method="post" action="<?= site_url('rumahsakit/updateronsen') ?>">
                <input type="hidden" name="id" value="<?= $edit->IDronsen ?>">
                <input type="hidden" name="rs" value="<?= $edit->IDrs ?>">
                <div class="row">
                  <div class="col-sm-12">
                   
                   <div class="form-group">
                      <label>Keterangan</label>
                      <input type="text" onkeyup='formatRupiah(this)' name="keterangan" class="form-control" value="<?= $edit->keterangan ?>">
                    </div>

                    <div class="form-group">
                      <label>Harga</label>
                      <input type="text" onkeyup='formatRupiah(this)' name="harga" class="form-control" value="<?= $edit->harga_ronsen ?>">
                    </div>

                    <input type="submit" class="btn btn-primary btn-sm" value="Update">
                    <a href="<?= site_url('rumahsakit/detailronsen?id='.$rs->IDrs); ?>" class="btn btn-danger btn-sm">Cancel</a>






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




