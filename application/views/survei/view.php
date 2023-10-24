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
             List Survei
           </div>
           <div class="card-body">
            <?php if($this->session->userdata('akses') == 1 || $this->session->userdata('akses') == 3 ) : ?>
            <a href="<?= site_url('survei/add');?>" class="btn btn-primary btn-sm"> Tambah Data</a>
            <br>
            <br>
          <?php endif ?>
          <div class="table-responsive">
            <table  id="example1" class="table table-striped table-sm table-bordered table-hover">
              <thead>
                <tr class="bg-dark">
                  <th width="30px">No</th>
                  <th width="80px">Tanggal</th>
                  <th>Korban</th>
                  <th>Alamat</th>
                  <th>Keterangan</th>
                  <th>Petugas</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=1;
                foreach ($survei as $key ) { 
                  $id = $key->id_survei;
                  ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= date('d/m/Y', strtotime($key->tgl_survei)) ?></td>
                    <td><?= $key->nama_korban ?></td>
                    <td><?= $key->alamat_korban ?></td>
                    <td><?= $key->keterangan ?></td>
                    <td><?= $key->nama_petugas ?></td>
                    <td width="100px">
                      <center>
                        <?php 
                        if($key->status_berkas == 1){ ?>
                          <span class="badge badge-danger">Draft</span>
                        <?php } elseif($key->status_berkas == 2){ ?> 
                          <span class="badge badge-primary">lengkap</span>
                        <?php }elseif($key->status_berkas == 3){ ?> 
                          <span class="badge badge-success"> Acc</span>
                        <?php } ?>
                      </center>
                    </td>
                    <td width="200px">
                      <center>
                       <?php if($this->session->userdata('akses') == 1 ) : ?>
                        <a href="<?= site_url('survei/edit/'.$id)?>" class="btn btn-primary btn-sm">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href="<?= site_url('survei/detail/'.$id)?>" class="btn btn-warning btn-sm">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="<?= site_url('survei/delete/'.$id)?>" class="btn btn-danger btn-sm tombol-hapus">
                          <i class="fa fa-trash"></i>
                        </a>
                      <?php endif ?>

                      <?php if($this->session->userdata('akses') == 2 ) : ?>
                        <a href="<?= site_url('survei/detail/'.$id)?>" class="btn btn-warning btn-sm">
                          <i class="fa fa-file"></i>
                        </a>
                      <?php endif ?>

                      <?php if($this->session->userdata('akses') == 3 ) : ?>
                        <a href="<?= site_url('survei/edit/'.$id)?>" class="btn btn-primary btn-sm">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href="<?= site_url('survei/detail/'.$id)?>" class="btn btn-warning btn-sm">
                          <i class="fa fa-file"></i>
                        </a>
                        <a href="<?= site_url('survei/delete/'.$id)?>" class="btn btn-danger btn-sm tombol-hapus">
                          <i class="fa fa-trash"></i>
                        </a>
                      <?php endif ?>


                      <?php if($key->status_berkas == 3){ ?>



                        <a target="_blank" href="<?= site_url('survei/cetak/'.$id)?>" class="btn btn-success btn-sm">
                          <i class="fa fa-print"></i>
                        </a>

                      <?php } ?>

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








