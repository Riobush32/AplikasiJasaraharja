<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><i class="nav-icon fas fa-search"></i> <?= $title ?></h1>
          <hr>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              List Data Cacat Tetap
            </div>
            <div class="card-body">
              <a href="<?= site_url('dashboard');?>" class="btn btn-primary btn-sm">
                <i class="fa fa-backward"></i>
              Kembali</a>
              <br>
              <br>
              <div class="table-responsive">
                <table  id="example1" class="table table-striped table-sm table-bordered table-hover">
                  <thead>
                    <tr class="bg-dark">
                      <th width="30px">No</th>
                      <th width="80px">Nama</th>
                      <th>Tempat lahir</th>
                      <th>KTP</th>
                      <th>Alamat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    foreach ($cacat as $key ){ 
                      $id = $key->id_pengaju;
                      ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $key->nama ?></td>
                        <td><?= $key->tempat_lahir ?> , <?= $key->tanggal_lahir ?></td>
                        <td><?= $key->ktp ?></td>
                        <td><?= $key->alamat ?></td>
                        <td width="200px">
                          <center>
                            <a target="_blank" href="<?= site_url('survei/cetak/'.$id)?>" class="btn btn-success btn-sm">
                              <i class="fa fa-print"></i>
                            </a>
                          </center>
                        </td>
                      </tr>
                      <?php
                    }
                    ?>


                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>








