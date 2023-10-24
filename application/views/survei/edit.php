
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
              Data Survei
            </div>
            <div class="card-body">
              <a href="<?= site_url('survei');?>" class="btn btn-primary btn-sm"> Kembali</a>
              <br>
              <br>
              <form action="<?= site_url('survei/proses');?>" method="POST" role="form">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Hari</label>
                      <select name="hari" class="form-control" required>
                        <option value="<?= $edit->hari_survei ?>" selected><?= $edit->hari_survei ?></option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Tanggal</label>
                      <input type="date" name="tanggal" value="<?= $edit->tgl_survei ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="">Petugas Survey</label>
                      <input name="petugas" type="text" class="form-control" value="<?= $this->session->userdata('nama')?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="">Jenis Survei</label>

                      <br>
                      <?php 
                      if($edit->jenis1 == 1){ ?>
                        <input type="checkbox" name="jenis1" value=""> Keterjaminan Korban
                      <?php } else{ ?>
                        <input type="checkbox" name="jenis1" value="2"  checked> Keterjaminan Korban
                      <?php } ?>
                      
                      <br>
                      <?php 
                      if($edit->jenis2 == 1){ ?>
                        <input type="checkbox" name="jenis2" value=""> Keabsahan Ahliwaris
                      <?php } else{ ?>
                        <input type="checkbox" name="jenis2" value="2" checked> Keabsahan Ahliwaris
                      <?php } ?>



                      <br>
                      <?php 
                      if($edit->jenis3 == 1){ ?>
                       <input type="checkbox" name="jenis3" value=""> Keabsahan Biaya perawatan / pengobatan
                     <?php } else{ ?>
                       <input type="checkbox" name="jenis3" value="" checked> Keabsahan Biaya perawatan / pengobatan
                     <?php } ?>

                     <br>
                     <input type="checkbox" name="jenis4" value=""> Lainnya
                   </div>
                   <div class="form-group">
                    <label for="">Nama Korban</label>
                    <input type="text" name="korban" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Alamat Korban</label>
                    <input type="text" name="alamat" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Tempat / Tgl Kecelakaan</label>
                    <input type="text" name="kejadian" class="form-control">
                  </div>
                </div>

                <div class="col-sm-6">


                 <!--  <div class="form-group">
                    <label for="">Lokasi</label>
                    <div id="googleMap" style="width:100%;height:200px;"></div>
                  </div> -->

                <!--   <div class="form-group">
                    <label for="">Sumber Informasi</label>
                    <input type="text" name="info1" class="form-control" placeholder="Sumber Informasi 1">
                    <br>
                    <input type="text" name="info2" class="form-control" placeholder="Sumber Informasi 2">
                    <br>
                    <input type="text" name="info3" class="form-control" placeholder="Sumber Informasi 3">
                    <br>
                  </div> -->

                 <!--  <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="file_name" class="form-control">
                  </div> -->

                  <div class="form-group">
                    <label for="">Kesimpulan</label>
                    <textarea name="kesimpulan" class="form-control"></textarea>
                  </div>

                  <button type="submit" value="Simpann" class="btn btn-primary">Simpan</button>
                  <a href="<?= site_url('survei')?>" class="btn btn-danger">Cancel</a>
                </div>

              </form>

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


<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $('#submit').submit(function(e){
      e.preventDefault(); 
      $.ajax({
        url:'<?=  site_url('survei/proses')?>',
        type:"post",
                 data:new FormData(this), //this is formData
                 processData:false,
                 contentType:false,
                 cache:false,
                 async:false,
                 success: function(data){
                  alert("Upload Image Successful.");
                }
              });
    });
    

  });
  
</script>




