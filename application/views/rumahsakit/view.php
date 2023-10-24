<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
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
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
               <?= $title ?>
             </div>
             <div class="card-body">
              <?php if($this->session->userdata('akses') == 1 ) : ?>
               <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                 <i class="fa fa-plus"></i> Tambah Data
               </button>
             <?php endif ?>
             <a target="_blank" href="<?= site_url('rumahsakit/cetak');?>" class="btn btn-success">Cetak </a>
             <br>
             <table id="example1" class="table table-bordered table-striped table-sm">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Rumah Sakit</th>
                  <th>Direktur</th>
                  <th>PIC</th>
                  <th>No Hp</th>
                  <th>No Rek</th>
                  <td>Ttd</td>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                
                $no=1;
                foreach ($rs as $key ) { ?>

                 <tr>
                  <td width="30px"><center><?= $no++ ?></center></td>
                  <td><?= $key->nama_rs ?></td>
                  <td><?= $key->nama_direktur ?></td>
                  <td><?= $key->nama_pic ?></td>
                  <td><?= $key->no_telepon ?></td>
                  <td><?= $key->no_rec ?></td>
                  <td>
                    <center><img src=<?= base_url()?>images/ttd/<?= $key->img_ttd ?> style="height: 40px"></center></td>
                    <td width="200px">
                      <center>
                        <?php if($this->session->userdata('akses') == 1 ) : ?>
                          <a href="<?= site_url('rumahsakit/edit/'.$key->IDrs);?>" class="btn btn-primary btn-sm">Edit</a>
                        <?php endif ?>
                        <!--   <a href="" class="btn btn-danger btn-sm">Hapus</a> -->
                        <a href="<?= site_url('rumahsakit/detail/'.$key->IDrs);?>" class="btn btn-success btn-sm">Detail</a>
                      </center>
                    </td>
                  </tr>
                  <?php
                }5
                ?>

              </tbody>
            </table>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Rumah Sakit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">

        <form method="post" action="<?= site_url('rumahsakit/proses') ?>">


          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label>Nama Rumah Sakit</label>
                <input type="text"  name="nama" class="form-control"  required="">
              </div>

              <div class="form-group">
                <label>Direktur</label>
                <input type="text"  name="dir" class="form-control"  required="">
              </div>

              <div class="form-group">
                <label>Nama PIC</label>
                <input type="text"  name="pic" class="form-control"  >
              </div>

              <div class="form-group">
                <label>No Hp</label>
                <input type="text"  name="hp" class="form-control"  >
              </div>

              <div class="form-group">
                <label>No Rekening</label>
                <input type="text"  name="rekening" class="form-control" >
              </div>

              <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
              <a href="<?= site_url('rumahsakit'); ?>" class="btn btn-danger btn-sm">Cancel</a>

            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>


