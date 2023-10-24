<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1>
            <i class="fa fa-file"></i>
            <?= $title ?></h1>
            <hr>
          </div>
        </div>
      </div><!-- /.container -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

         <div class="col-sm-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <?= $title ?>
            </div>
            <div class="card-body">

              <div class="row">
                <div class="col-sm-4">
                  <?php 
                  $pesan = $this->session->flashdata('pesan');
                  if(!empty($pesan)){
                    echo "<div class='alert alert-info'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    $pesan
                    </div>";
                  } ?>

                  <form method="get" class="form-horizontal">
                    <div class="form-group">
                      <label>Dari Tanggal</label>

                      <input type="date" name="dari" value="<?= set_value('dari', $this->input->get('dari'));?>" class='form-control' id="tanggal" placeholder='Dari Tanggal'>

                    </div>

                    <div class="form-group">
                      <label>Sampai Tanggal</label>
                      <input type="date" name="sampai" value="<?= set_value('sampai', $this->input->get('sampai'));?>" class='form-control' id="tanggal2" placeholder='Sampai Tanggal'>
                    </div>

                    <div class="form-group">
                      <input type="submit" name="cari" value="Cari" class='btn btn-primary'>
                      <a href="<?= site_url('laporan/brgkeluar/');?>" class='btn btn-warning'>Reset</a>
                      <?php 
                      if(isset($_GET['cari'])){ ?>
                        <a href="<?= site_url('laporan/cetakpengajuan?dari='.$this->input->get('dari').'&sampai='.$this->input->get('sampai').'&print');?>" target="_blank" class="btn btn-success"><i class='fa fa-print'></i>  Cetak Laporan</a>
                      <?php } ?>
                    </div>
                  </form>

                </div>
              </div>


              <div class="row">
                <div class="col-sm-12">
                 <?php 
                 if(isset($_GET['cari'])){
                  echo "<hr>";
                  if(!empty($barang)){ ?>
                    <p><strong><center><?= $judul ;?></center></strong></p>
                    <hr>
                    <table id="example1" class="table table-bordered table-sm table-hover">
                      <thead>
                        <tr class="bg-dark">
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Tempat Lahir / Tgl</th>
                          <th>KTP</th>
                          <th>Alamat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 

                        $no=0;
                        foreach ($barang as $key) { 

                          ?>
                          <tr>
                            <td><?= ++$no ;?></td>
                            <td><?= $key->nama ;?></td>
                            <td><?= $key->tempat_lahir ;?><?= $key->tanggal_lahir ;?></td>
                            <td><?= $key->ktp ;?></td>
                            <td><?= $key->alamat ;?></td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  <?php }else{
                    echo "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    Tidak ada transaksi dari ".$this->input->get('dari')." sampai ".$this->input->get('sampai')."
                    </div>";
                  }
                } ?>
                






              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


          

        </div>


      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


