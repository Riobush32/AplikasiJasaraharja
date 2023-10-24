<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><i class="fas fa-hospital-alt"></i> <?= $title ?> <?= $rs->nama_rs ?></h1>
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
          <div class="card">
            <div class="card-header">
              Data Ronsen
            </div>
            <div class="card-body">
              <?php if($this->session->userdata('akses') == 1 ) : ?>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                 <i class="fa fa-plus"></i> Tambah Data
               </button>
             <?php endif ?>
             <a target="_blank" href="<?= site_url('rumahsakit/cetakronsen?id='.$rs->IDrs);?>" class="btn btn-success">
              <i class="fa fa-print"></i>
            Cetak</a>
            <br>
            <div class="table-responsive">
             <table id="example1" class="table table-bordered table-striped table-sm">
              <thead>
                <tr class="bg-dark">
                  <th width="50px">No</th>
                  <th>Keterangan</th>
                  <th>Harga</th>
                  <?php if($this->session->userdata('akses') == 1 ) : ?>
                    <th>Action</th>
                  <?php endif ?>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($kamar as $u) :
                  ?>
                  <tr>
                    <td><center><?= $no++ ?></center></td>
                    <td><?= $u->keterangan ?></td>
                    <td><?= $u->harga_ronsen ?></td>
                    <td width="100">
                      <center>
                        <a href="<?= site_url('rumahsakit/editronsen/' . $u->IDronsen) ?>" class="btn btn-primary btn-sm">
                          <i class="fa fa-edit"></i> 
                        </a>
                        <a href="<?= site_url('rumahsakit/deleteronsen/' . $u->IDronsen) ?>" class="btn btn-danger btn-sm tombol-hapus">
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

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Ronsen</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">

        <form method="post" action="<?= site_url('rumahsakit/prosesronsen') ?>">
          <input type="hidden" name="rs" value="<?= $rs->IDrs ?>">

          <div class="row">
            <div class="col-sm-12">

              <div class="form-group">
                <label>Keterangan</label>
                <input type="text"  name="keterangan" class="form-control" placeholder="Keterangan" required="">
              </div>

              <div class="form-group">
                <label>Harga</label>
                <input type="text" onkeyup='formatRupiah(this)' name="harga" class="form-control" placeholder="Harga" required="">
              </div>

              <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
              <a href="<?= site_url('rumahsakit/detailronsen?id='.$rs->IDrs); ?>" class="btn btn-danger btn-sm">Cancel</a>

            </div>



          </div>


        </form>


      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
  function formatRupiah(obj) {
    var angka = obj.value;
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split = number_string.split(','),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
      separator = sisa ? '.' : '';
      rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    obj.value = rupiah;

    gettotal();
    // document.getElementById("tes").innerHTML = rupiah;
  }
</script>