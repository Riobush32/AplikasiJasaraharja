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

              <form method="post" action="<?= site_url('rumahsakit/update') ?>">
                <input type="hidden" name="id" value="<?= $edit->IDrs ?>">

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Nama Rumah Sakit</label>
                      <input type="text"  name="nama" class="form-control"  value="<?= $edit->nama_rs ?>">
                    </div>

                    <div class="form-group">
                      <label>Nama Direktur</label>
                      <input type="text"  name="dir" class="form-control"  value="<?= $edit->nama_direktur ?>">
                    </div>

                    <div class="form-group">
                      <label>Nama PIC</label>
                      <input type="text"  name="pic" class="form-control"  value="<?= $edit->nama_pic ?>">
                    </div>

                    <div class="form-group">
                      <label>No Hp</label>
                      <input type="text"  name="hp" class="form-control"  value="<?= $edit->no_telepon ?>">
                    </div>

                    <div class="form-group">
                      <label>No Rekening</label>
                      <input type="text"  name="rekening" class="form-control"  value="<?= $edit->no_telepon ?>">
                    </div>

                    <input type="submit" class="btn btn-primary btn-sm" value="Update">
                    <a href="<?= site_url('rumahsakit'); ?>" class="btn btn-danger btn-sm">Cancel</a>

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




