<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><i class="nav-icon fas fa-hospital"></i> <?= $title ?> <?= $detail->nama_rs ?></h1>
          <hr>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <!-- Main content -->
  <section class="content">
    <section class="content">
      <div class="container-fluid">

       <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              Dashboard
            </div>
            <div class="card-body">
             <div class="row">
               <div class="col-lg-4 col-12">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3><?= $t_kamar ?></h3>

                    <p>Data Kamar</p>
                  </div>
                  <div class="icon">
                    <i class="ion fas fa-procedures"></i>
                  </div>
                  <a href="<?= site_url('rumahsakit/detailkamar?id='.$detail->IDrs);?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-12">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3><?= $t_obat ?></h3>

                    <p>Data Obat</p>
                  </div>
                  <div class="icon">
                    <i class="ion fas fa-capsules"></i>
                  </div>
                  <a href="<?= site_url('rumahsakit/detailobat/'.$detail->IDrs);?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-12">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?= $t_ronsen ?></h3>
                    <p>Data Ronsen</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="<?= site_url('rumahsakit/detailronsen?id='.$detail->IDrs);?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
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

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Ronsen</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?= site_url('barang/proses') ?>">
        <div class="container">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <a href="?page=v_buku" class="btn btn-info">Lihat Data</a>
                  <div class="card-body">
                    <form class="form-sample" action="" method="POST">
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Kode Ronsen</h5>
                        </div>
                        <div class="card-body">
                          <input type="text" name="ko" class="form-control">
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Keterangan</h5>
                        </div>
                        <div class="card-body">
                          <input type="text" name="no" class="form-control">
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Harga Ronsen</h5>
                        </div>
                        <div class="card-body">
                          <input type="text" name="satuan" class="form-control">
                        </div>
                      </div>


                      <br>
                      <button type="submit" name="proses" class="btn btn-primary me-2">Proses Data</button>
                      <button class="btn btn-danger">Cancel</button>  
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-lg2">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Obat</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?= site_url('barang/proses') ?>">
        <div class="container">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <a href="?page=v_buku" class="btn btn-info">Lihat Data</a>
                  <div class="card-body">
                    <form class="form-sample" action="" method="POST">
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Kode Ronsen</h5>
                        </div>
                        <div class="card-body">
                          <input type="text" name="ko" class="form-control">
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Keterangan</h5>
                        </div>
                        <div class="card-body">
                          <input type="text" name="no" class="form-control">
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-title mb-0">Harga Ronsen</h5>
                        </div>
                        <div class="card-body">
                          <input type="text" name="satuan" class="form-control">
                        </div>
                      </div>


                      <br>
                      <button type="submit" name="proses" class="btn btn-primary me-2">Proses Data</button>
                      <button class="btn btn-danger">Cancel</button>  
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


