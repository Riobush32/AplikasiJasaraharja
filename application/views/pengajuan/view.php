<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><i class="nav-icon fas fa-book"></i> <?= $title ?></h1>
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


        <div class="col-sm-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
             List Pengajuan
           </div>
           <div class="card-body">
            <?php if($this->session->userdata('akses') == 1  || $this->session->userdata('akses') == 3) : ?>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
              Tambah Data
            </button>
          <?php endif ?>
          <br>
          <br>
          <div class="table-responsive">
            <table id="example1" class="table table-striped table-sm table-bordered table-hover">
              <thead>
                <tr class="bg-dark">
                  <th width="30px">No</th>
                  <th width="80px">Nama</th>
                  <th>Tempat Tgl Lahir</th>
                  <th>No KTP</th>
                  <th>Pekerjaan</th>
                  <th>Hp / Tlp.</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no=1;
                foreach ($pengajuan as $key ) {
                 $id = $key->id_pengaju;
                 ?>
                 <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $key->nama2 ?></td>
                  <td><?= $key->tempat_lahir2 ?> , <?= $key->tanggal_lahir2 ?></td>
                  <td><?= $key->ktp2 ?></td>
                  <td><?= $key->pekerjaan2 ?></td>
                  <td><?= $key->nohp2 ?></td>
                  <td><?= $key->alamat2 ?></td>
                  <td>
                    <?php
                    if($key->status_pengajuan == 1){ ?>
                      <span class="badge badge-danger">Belum di Diperiksa</span>
                      <?php
                    }elseif($key->status_pengajuan == 2){ ?>
                      <span class="badge badge-success">Selesai Survei</span>
                      <?php
                    }
                    ?>
                  </td>
                  <td width="150px">
                    <center>
                      <a target="_blank" href="<?= site_url('pengajuan/edit/'.$key->id_pengaju)?>" class="btn btn-info btn-sm">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a target="_blank" href="<?= site_url('pengajuan/cetak/'.$key->id_pengaju)?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-print"></i>
                      </a>
                      <?php if($this->session->userdata('akses') == 1 ||  $this->session->userdata('akses') == 3) : ?>
                      <a target="_blank" href="<?= site_url('pengajuan/hapus/'.$key->id_pengaju)?>" class="btn btn-danger btn-sm tombol-hapus">
                        <i class="fa fa-trash"></i>
                      </a>
                    <?php endif ?>
                    <?php if($this->session->userdata('akses') == 1 ||  $this->session->userdata('akses') == 4) : ?>

                    <?php
                    if($key->status_pengajuan == 1){ ?>
                   <!--   <a href="<?= site_url('survei/korban/'.$id)?>" class="btn btn-success btn-sm">
                       <i class="fa fa-search"></i>
                     </a> -->
                     <?php
                   }elseif($key->status_pengajuan == 2){ ?>

                    <?php
                  }
                  ?>

                <?php endif ?>

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

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">

        <img src="<?= site_url() ?>assets/images/jasa.png"  class="brand-image img-circle elevation-3" style="height: 50px;"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="post" action="<?= site_url('pengajuan/proses') ?>">
        <div class="container">
          <div class="row">
           <div class="col-sm-6">

           </div>
           <div class="col-sm-6">

           </div>
         </div>
         <br>
         <div class="row">
           <div class="col-sm-12">
            <center><u><span style="font-size:20px">FORMULIR PENGAJUAN SANTUNAN JASA RAHARJA</span></u>
              <br>
            (diisi dan ditandatangani oleh penerima dana santunan)</center>
          </div>
        </div>
        <div class="row">
         <div class="col-sm-12">
           <br>
           <br>
           <b>1. Saya yang bertanda tangan di bawah ini :</b>
           <form class="form-horizontal">
            <table class="table table-sm">
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td colspan="4"><input type="" class="form-control" name="nama"></td>
              </tr>
              <tr>
                <td>Tempat & Tgl. Lahir</td>
                <td>:</td>
                <td>
                  <div class="row">
                    <div class="col-4">
                      <input type=""   class="form-control" name="tempat">
                    </div>
                    <div class="col-4">
                      <input type="date" class="form-control" name="tgl">
                    </div>
                    <div class="col-4">
                      <input type="text" placeholder="umur" class="form-control" name="umur">
                    </div>
                  </div></td>
                  <td>Tahun</td>
                  <td colspan="2">Jenis Kelamin <input type="checkbox" name="jk" value="laki - laki" > L <input type="checkbox" name="jk" value="Perempuan"> P </td>
                </tr>
                <tr>
                  <td>Nomor KTP/NIK</td>
                  <td>:</td>
                  <td><input class="form-control" type="" name="ktp"></td>
                  <td>Pekerjaan</td>
                  <td><input type="" class="form-control" name="pekerjaan"></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td colspan="4"><input class="form-control" type="" name="alamat"></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>No Ponsel/Telp</td>
                  <td><input class="form-control" type="" name="ponsel"></td>
                </tr>

              </table>

              <table class="table">
                <tr>
                  <td width="300px">Hubungan dengan korban sebagai :</td>
                  <td><input type="text" name="hubungan" class="form-control"></td>
                </tr>
              </table>

              <table class="table">
                <tr>
                  <td>dengan ini mengajukan santunan* :</td>
                  <td><input type="checkbox"  name="santunan1" value="2"> Meninggal Dunia</td>
                  <td><input type="checkbox"  name="santunan2" value="2">Luka - luka</td>
                  <td><input type="checkbox"  name="santunan3" value="2">Cacat Tetap</td>
                  <td><input type="checkbox"  name="santunan4" value="2">Penguburan</td>
                </tr>
                <tr>
                  <td>*boleh lebih dari satu</td>
                  <td><input type="checkbox"  name="santunan5" value="2">Biaya Ambulans</td>
                  <td colspan="3"><input type="checkbox"  name="santunan6" value="2">Biaya P3K</td>
                </tr>
              </table>
              <br>
              <b>Akibat Kecelakaan Lalu Lintas Sebagai Berikut :</b>
              <table class="table">
                <tr>
                  <td>Waktu Kejadian: hari</td>
                  <td><input class="form-control" type="text" name="harikejadian"></td>
                  <td>Tanggal</td>
                  <td><input class="form-control"  type="date" name="tanggalkejadian"></td>
                  <td>Jam</td>
                  <td><input class="form-control"  type="time" name="jamkejadian"></td>
                </tr>
                <tr>
                  <td>Tempat Kejadian:</td>
                  <td colspan="5"><input class="form-control"  type="text" name="tempatkejadian"></td>
                </tr>
              </table>
              <br>
              <br>
              <b>Kasus kecelakaan yang dialami oleh korban adalah :</b>
              <br>
              <br>
              <table>
                <tr>
                  <td><input type="checkbox" name="kasus1" value="1"></td>
                  <td colspan="3">korban penumpang/awak kendaraan angkutan umum yang mengalami kecelakaan</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="kasus2" value="1"></td>
                  <td colspan="3">korban pejalan kaki atau pengemudi/penumpang kendaraan tidak bermotor yang tabrakan dengan kendaraan bermotor</td>
                </tr> 
                <tr>
                  <td><input type="checkbox" name="kasus3" value="1"></td>
                  <td colspan="3">Korban pengemudi/penumpang kendaraan bermotor yang tabrakan dengan kendaraan bermotor lain</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="kasus4" value="1"></td>
                  <td>korban ditabrak oleh kendaraan bermotor</td>
                  <td><input type="checkbox" name="kasus5" value="1"></td>
                  <td>korban ditabrak/tabrakan dengan kereta api</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="kasus6" value="1"></td>
                  <td colspan="3">korban pengemudi/penumpang kendaraan bermotor pribadi yang mengalami kecelakaan tunggal</td>
                </tr>
                <tr>
                  <td><input type="checkbox" name="kasus7" value="1"></td>
                  <td colspan="3">korban pengemudi/penumpang kendaraan bermotor pribadi yang bertabrakan dengan pejalan kaki/bukan kendaraan bermotor</td>
                </tr>
              </table>

              <br>
              <br>

              <b>2. Identitas korban kecelakaan (tidak perlu diisi jika yang mengajukan adalah korban sendiri), sebagai berikut :</b>
              <br>
              <br>
              <table class="table table-sm">
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td colspan="4"><input type="" class="form-control" name="nama2"></td>
                </tr>
                <tr>
                  <td>Tempat & Tgl. Lahir</td>
                  <td>:</td>
                  <td>
                    <div class="row">
                      <div class="col-4">
                        <input type=""   class="form-control" name="tempat2">
                      </div>
                      <div class="col-4">
                        <input type="date" class="form-control" name="tgl2">
                      </div>
                      <div class="col-4">
                        <input type="text" placeholder="umur" class="form-control" name="umur2">
                      </div>
                    </div></td>
                    <td>Tahun</td>
                    <td colspan="2">Jenis Kelamin <input type="checkbox" name="jk2" value="laki - laki" > L <input type="checkbox" name="jk2" value="Perempuan"> P </td>
                  </tr>
                  <tr>
                    <td>Nomor KTP/NIK</td>
                    <td>:</td>
                    <td><input class="form-control" type="" name="ktp2"></td>
                    <td>Pekerjaan</td>
                    <td><input type="" class="form-control" name="pekerjaan2"></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td colspan="4"><input class="form-control" type="" name="alamat2"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>No Ponsel/Telp</td>
                    <td><input class="form-control" type="" name="ponsel2"></td>
                  </tr>

                </table>


                <div style="border: 1px solid red";>
                  <table>
                    <tr>
                      <td><b>3 </b>.<br></td>
                      <td>Dalam pengajuan santunan Jasa Raharja ini saya menyatakan dnegan sebenar-benarnya, dalam keadaan sadar dan tanpa paksaan dari pihak manapun, bahwa :</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>
                        <ul type="a">
                          <li>Saya bersedia memenuhi ketentuan dan persyaratan yang berlaku dalam penvgajuan santunan Jasa Raharja</li>
                          <li>Seluruh keterangan yang saya berikan dan seluruh dokumen persyaratan yang saya serahkan adalah benar dan absah</li>
                          <li>Apabila di kemudian hari terbukti bahwa keterangan yang saya berikan tidak benar dan/atau dokumen persyaratan yang saya serahkan tidak absah, maka saya bersedia dituntut di muka pengadilan sesuai ketentuan hukum yang berlaku dan bersedia mengembalikan seluruh dana santunan yang telah saya terima</li>
                          <li>Saya bersedia mengembalikan dana santunan yang telah saya terima apabila di kemudian hari ternyata fitemukan adanya kesalahan dalam perhitungan jumlah dana santunan yang seharusnya saya terima</li>
                          <li>Apabila penyerahan dana melalui pemindah bukuan atau transfer bank, maka Bukti Pemindahbukuan/Transfer Bank milik PT. Jasa Raharja (Persero) berlaku juga sebagai bukti tanda terima dana santunan yang sah</li>
                        </ul>
                      </td>
                    </tr>
                  </table>
                </div>

                <br>
                <br>

                <table width="100%">
                  <tr>
                    <td width="60%"></td>
                    <td>Diajukan di </td>
                    <td>:</td>
                    <td><input type="" name="tempatpengajuan"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><input type="date" name="tglpengajuan"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="3">Yang Mengajukan,
                      <br>
                      (tanda tangan/ cap jempol, stempel instansi/badan hukum
                      <br>
                      <br>
                      <br>
                      <br>
                      Nama Lengkap :<input type="text" name="namapengaju"></td>
                    </tr>
                  </table>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>


                </div>








              </form>
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





