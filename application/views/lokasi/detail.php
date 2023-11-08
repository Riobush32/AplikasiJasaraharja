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
          <div class="card" >
            <div class="card-body bg-black">
              <h5 class="card-title">Detail Lokasi</h5>
            </div>
            <div class="card-body">
              <dl class="row">
                <dt class="col-sm-3">Nama Lokasi</dt>
                <dd class="col-sm-9"><?= $lokasi->nama_lokasi ?></dd>

                <dt class="col-sm-3">Alamat</dt>
                <dd class="col-sm-9">
                  <?= $lokasi->alamat ?>
                </dd>

                <dt class="col-sm-3">Google Maps Link</dt>
                <dd class="col-sm-9"><?= $lokasi->link_maps ?></dd>

                <dt class="col-sm-3">Qr Code Alamat</dt>
                <dd class="col-sm-9">
                    <img width="200" src="../../qrcode/<?= $lokasi->qrcode ?>" alt="QrCode: <?= $lokasi->qrcode ?>">
                    
                </dd>

                <dt class="col-sm-3">
                  
                </dt>
                <dd class="col-sm-9">
                  <?php if($this->session->userdata('akses') == 1 ) : ?>
													<a href="<?= site_url('lokasi/edit/'.$lokasi->id_lokasi);?>" class="btn btn-primary btn-sm">
														Edit
													</a>
                  <?php endif ?>
                </dd>
              </dl>
            </div>
          </div>
        </div>

        <div class="col-sm-7">
          <div class="card">
            <div class="card-header">
              Data lokasi
            </div>
            <div class="card-body">
              <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                  <tr class="bg-dark">
                    <th width="50px">No</th>
                    <th>Nama Lokasi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($lokasi as $u) :
                    ?>
                    <tr>
                      <td><center><?= $no++ ?></center></td>
                      <td><?= $u->nama_lokasi ?></td>
                      <td width="100">
                        <center>
                          <a href="<?= site_url('kelaskamar/edit/' . $u->id_lokasi) ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-edit"></i> 
                          </a>
                          <a href="<?= site_url('kelaskamar/delete/' . $u->id_lokasi) ?>" class="btn btn-danger btn-sm tombol-hapus">
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