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
            <div class="card-header">
              Tambah Kelas Kamar
            </div>
            <div class="card-body">
              <form method="post" action="<?= site_url('kelaskamar/proses') ?>">

                <div class="form-group">
                  <label>Nama Kelas Kamar</label>
                  <input type="text" name="nama" class="form-control" placeholder="nama" required>
                </div>


                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="<?= site_url('kelaskamar');?>" class="btn btn-danger">Reset</a>

              </form>
            </div>
          </div>
        </div>

        <div class="col-sm-7">
          <div class="card">
            <div class="card-header">
              Data Kelas Kamar
            </div>
            <div class="card-body">
              <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                  <tr class="bg-dark">
                    <th width="50px">No</th>
                    <th>Nama Kelas Kamar</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($kamar as $u) :
                    ?>
                    <tr>
                      <td><center><?= $no++ ?></center></td>
                      <td><?= $u->nama_kelas ?></td>
                      <td width="100">
                        <center>
                          <a href="<?= site_url('kelaskamar/edit/' . $u->id_kk) ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> 
                          </a>
                          <a href="<?= site_url('kelaskamar/delete/' . $u->id_kk) ?>" class="btn btn-danger btn-sm tombol-hapus">
                            <i class="fa fa-trash"></i> 
                          </a>
                        </center>
                      </td>
                    </tr>

                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>