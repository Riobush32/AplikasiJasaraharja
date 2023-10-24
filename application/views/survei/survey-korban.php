<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
// variabel global marker
var marker;

function taruhMarker(peta, posisiTitik){

  if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
    
  }
  
  function initialize() {
    var propertiPeta = {
      center:new google.maps.LatLng(-8.5830695,116.3202515),
      zoom:9,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };

    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);


</script>
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
            <a href="<?= site_url('survei');?>" class="btn btn-primary btn-sm"> Kembali</a>
            <br>
            <br>
            <form action="<?= site_url('survei/proses');?>" method="POST" role="form">
              <input type="text" name="id" value="<?= $ct->id_pengaju ?>">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Hari</label>
                    <select name="hari" class="form-control" required>
                      <option value="" selected>Pilih Hari</option>
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
                    <input type="date" name="tanggal" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="">Petugas Survey</label>
                    <input name="petugas" type="text" class="form-control" value="<?= $this->session->userdata('nama')?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="">Jenis Survey</label>
                    <br>
                    <input type="checkbox" name="jenis1" value="2"> Keterjaminan Korban
                    <br>
                    <input type="checkbox" name="jenis2" value="2"> Keabsahan Ahliwaris
                    <br>
                    <input type="checkbox" name="jenis3" value="2"> Keabsahan Biaya perawatan / pengobatan
                    <br>
                    <input type="checkbox" name="jenis4" value="2"> Lainnya
                  </div>
                  <div class="form-group">
                    <label for="">Nama Korban</label>
                    <input type="text" name="korban" class="form-control" value="<?= $ct->nama ?>">
                  </div>
                  <div class="form-group">
                    <label for="">Alamat Korban</label>
                    <input type="text" name="alamat" class="form-control" value="<?= $ct->alamat ?>">
                  </div>

                  <div class="form-group">
                    <label for="">Tempat / Tgl Kecelakaan</label>
                    <input type="text" name="kejadian" class="form-control" value="<?= $ct->tempatkejadian ?>">
                  </div>
                </div>

                <div class="col-sm-6">


                <!--   <div class="form-group">
                    <label for="">Lokasi</label>
                    <div id="googleMap" style="width:100%;height:200px;"></div>
                  </div> -->

                  <div class="form-group">
                    <label for="">Sumber Informasi</label>
                    <input type="text" name="info1" class="form-control" placeholder="Sumber Informasi 1">
                    <br>
                    <input type="text" name="info2" class="form-control" placeholder="Sumber Informasi 2">
                    <br>
                    <input type="text" name="info3" class="form-control" placeholder="Sumber Informasi 3">
                    <br>
                  </div>

                  <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="file_name" class="form-control">
                  </div>

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







