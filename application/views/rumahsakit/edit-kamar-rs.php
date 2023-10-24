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

              <form method="post" action="<?= site_url('rumahsakit/updatekamar') ?>">
                <input type="hidden" name="id" value="<?= $edit->id_kamar ?>">
                <input type="hidden" name="rs" value="<?= $edit->IDrs ?>">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Nama Kamar</label>
                      <select class="form-control" name="kamar">
                        <?php
                        foreach ($k_kamar as $k2) {

                          $id_ = $k2->id_kk;
                          $nm = $k2->nama_kelas;
                          if ($id_ == $edit->kelas_kamar)
                            echo "<option value='$id_' selected>$nm</option>";
                          else
                            echo "<option value='$id_'>$nm</option>";
                        }
                        ?>

                      </select>
                    </div>

                    <div class="form-group">
                      <label>Harga</label>
                      <input type="text" onkeyup='formatRupiah(this)' name="harga" class="form-control" value="<?= $edit->harga ?>">
                    </div>

                    <input type="submit" class="btn btn-primary btn-sm" value="Update">
                    <a href="<?= site_url('rumahsakit/detailkamar?id='.$rs->IDrs); ?>" class="btn btn-danger btn-sm">Cancel</a>






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




