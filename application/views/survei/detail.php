<script src="<?= base_url()?>assets/js/signature.js" type="text/javascript"></script>
<style>

 #note{position:absolute;left:50px;top:35px;padding:0px;margin:0px;cursor:default;}
 .hover-zoom {height: 600px; overflow: hidden; position:relative}
 .hover-zoom img {transition: transform .5s ease;}
 .hover-zoom:hover img {transform: scale(10);}
</style>

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
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
              Detail Survei
            </div>
            <div class="card-body">
              <a href="<?= site_url('survei');?>" class="btn btn-primary btn-sm"> Kembali</a>
              <br>
              <br>

              <table class="table table-striped table-sm">
                <tr>
                  <td>Hari</td>
                  <td>:</td>
                  <td><?= $detail->hari_survei ?>,<?= $detail->tgl_survei ?> </td>
                </tr>
                <tr>
                  <td>Petugas</td>
                  <td>:</td>
                  <td><?= $detail->nama_petugas ?></td>
                </tr>
                <tr>
                  <td>Nama Korban</td>
                  <td>:</td>
                  <td><?= $detail->nama_korban ?></td>
                </tr>
                <tr>
                  <td>Alamat Korban</td>
                  <td>:</td>
                  <td><?= $detail->alamat_korban ?></td>
                </tr>
                <tr>
                  <td>Lokasi</td>
                  <td>:</td>
                  <td><?= $detail->lokasi_kecelakaan ?></td>
                </tr>
                <tr>
                  <td>Status Survei</td>
                  <td>:</td>
                  <td>
                    <form action="<?= site_url('survei/update_status')?>" method="POST" role="form">

                      <input type="hidden" name="id_" value="<?= $detail->id_survei ?>">
                      <input type="hidden" name="nama" value="<?= $detail->nama_korban ?>">
                      <input type="hidden" name="alamat" value="<?= $detail->alamat_korban ?>">
                      <input type="hidden" name="lokasi" value="<?= $detail->lokasi_kecelakaan ?>">
                      <div class="form-group">
                       <?php if($this->session->userdata('akses') == 3) : ?>

                        <?php 
                        if($detail->status_berkas == 3){ ?>
                          Selesai Diperiksa
                        <?php }else{ ?>
                          <label for="">Pilih Status <?= $detail->status_berkas; ?></label>
                          <select class="form-control" name="status" required>
                            <option value="1">Draf</option>
                            <option value="2">Lengkap</option>

                          </select>
                          <br>
                          <button type="submit" class="btn btn-primary">Proses</button>
                        <?php } ?>

                      <?php endif ?>


                      <?php if($this->session->userdata('akses') == 2) : ?>
                       <?php   if($detail->status_berkas == 3){ ?>

                       <?php }else{ ?>
                         <select class="form-control" name="status" required>
                          <option value="">Pilih Status</option>
                          <option value="3">Disetujui</option>
                          <option value="4">Ditolak</option>
                        </select>
                      <?php } ?>
                    <?php endif ?>


                  </div>


                </td>
              </tr>
              <?php if($this->session->userdata('akses') == 2) : ?>
                <tr>
                  <td>Komentar</td>
                  <td>:</td>
                  <td>
                    <div class="form-group">
                      <textarea class="form-control" name="komentar"></textarea> 
                      <br>
                      <button type="submit" class="btn btn-primary">Proses</button>
                    </div>
                  </td>
                </tr>
              <?php endif ?>
            </form>

          </table>
        </div>



      </div>
    </div>

    <div class="col-sm-6">
      <div class="card">
        <div class="card-header">
          Sumber Informasi
        </div>
        <div class="card-body">
          <?php  if($detail->status_berkas == 3){ ?>
          <?php }else{ ?>
           <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
            <i class="fa fa-plus"></i>
          </button>
        <?php } ?>
        <br>
        <br>
        <table class="table table-striped table-sm">
          <tr>
            <th>No</th>
            <th>Sumber Informasi</th>
            <th>Tanda Tangan</th>
            <?php   if($detail->status_berkas == 3){ ?>

            <?php }else{ ?>
              <th>Action</th>
            <?php } ?>
          </tr>
          <?php 
          $no=1;
          foreach ($informasi as $key ) { ?>
           <tr>
            <td><?= $no++ ?></td>
            <td><?= $key->Keterangan ?></td>
            <td>
              <center><img src="<?= base_url('tandatangan/'.$key->TandaTangan)?>" style="height: 30px;widows: 50px;"></center></td>
              <?php 
              if($detail->status_berkas == 3){ ?>
              <?php }else{ ?>
                <td>
                  <a href="<?= site_url('survei/delete_/'.$key->id_sumber) ?>" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
              <?php } ?>
            </tr>
            <?php
          }

          ?>

        </table>



      </div>

    </div>

    <div class="card">
      <div class="card-header">
        Foto Kunjungan
      </div>
      <div class="card-body">
        <?php  if($detail->status_berkas == 3){ ?>
        <?php }else{ ?>
          <a href="<?= site_url('survei/add_kunjungan/'.$detail->id_survei)?>" class="btn btn-info btn-sm">
            <i class="fa fa-plus"></i> 
          </a>
          <br>
          <br>
        <?php } ?>
        <table class="table table-striped">
          <tr>
            <th>No</th>
            <th>Jenis Dokumen</th>
            <th>Foto</th>
            <?php 
            if($detail->status_berkas == 3){ ?>
            <?php }else{ ?>
              <th>Action</th>
            <?php } ?>
          </tr>
          <?php 
          $no=1;
          foreach ($kunjungan as $key ) { ?>
           <tr>
            <td><?= $no++ ?></td>
            <td><?= $key->namaberkas ?></td>

            <td>
              <center>
                <span class="hover-zoom"><img src="<?= base_url('survei/'.$key->Gambar)?>" style="height: 30px;widows: 50px;"></span></center></td>
                <?php  if($detail->status_berkas == 3){ ?>
                <?php }else{ ?>
                  <td>
                    <center>
                      <a href="<?= site_url('survei/delete__/'.$key->id_gambar_survei) ?>" class="btn btn-danger btn-sm tombol-hapus">
                        <i class="fa fa-trash"></i>
                      </a>
                    </center>
                  </td>
                <?php } ?>
              </tr>
            <?php }  ?>
          </table>
        </div>
      </div>
    </div>

  </div>
</section>
</div>


<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="container">

        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-12">
                <form method="post" action="<?= site_url('survei/proses_info')?>"  enctype="multipart/form-data">

                  <input type="hidden" name="id" value="<?= $detail->id_survei ?>">
                  <div class="form-group">
                    <label for="">Sumber Informasi</label>
                    <textarea class="form-control" name="keterangan"></textarea>
                  </div>
                 <!--  <div class="form-group">
                    <label for="">Upload Tanda Tangan</label>
                    <input type="file" class="form-control" name="sampul">
                  </div>

                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                  </div> -->

                  <div id="signature-pad">
                    <div style="border:solid 1px teal; width:100%;height:110px;padding:3px;position:relative;">
                      <div id="note" onmouseover="my_function();">The signature should be inside box</div>
                      <canvas id="the_canvas" width="350px" height="100px" ></canvas>
                    </div>
                    <div style="margin:10px;">
                      <input type="hidden" id="signature" name="signature">
                      <button type="submit" id="save_btn" class="btn btn-primary" data-action="save-png"><span class="glyphicon glyphicon-ok"></span>Simpan</button>
                      <button type="button" id="clear_btn" class="btn btn-danger" data-action="clear"><span class="glyphicon glyphicon-remove"></span> Clear</button>
                      
                    </div>
                  </div>





                  <form>


                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <script>
      var wrapper = document.getElementById("signature-pad");
      var clearButton = wrapper.querySelector("[data-action=clear]");
      var savePNGButton = wrapper.querySelector("[data-action=save-png]");
      var canvas = wrapper.querySelector("canvas");
      var el_note = document.getElementById("note");
      var signaturePad;
      signaturePad = new SignaturePad(canvas);

      clearButton.addEventListener("click", function (event) {
        document.getElementById("note").innerHTML="The signature should be inside box";
        signaturePad.clear();
      });
      savePNGButton.addEventListener("click", function (event){
        if (signaturePad.isEmpty()){
          alert("Please provide signature first.");
          event.preventDefault();
        }else{
          var canvas  = document.getElementById("the_canvas");
          var dataUrl = canvas.toDataURL();
          document.getElementById("signature").value = dataUrl;
        }
      });
      function my_function(){
        document.getElementById("note").innerHTML="";
      }
    </script>





