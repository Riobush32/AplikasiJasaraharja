<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><i class="nav-icon fas fa-cube"></i> <?= $title ?></h1>
          <hr>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
      <!-- MULAI DISINI -->
      <div class="container">
      <div class="row">
  <div class="col-sm-12 grid-margin stretch-card">
    <div class="card">
      <div class="row">
        <div class="col-sm-12">
        <a href="" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">Tambah Data</a>
          <a href="" target="blank" class="btn btn-success">Cetak Data
          </a>
        </div>
      </div>
      <div class="card-body">
        <form method="GET">
          <div class="form-group">
              <div class="input-group">
                  <input type="hidden" name="page" value="v_buku">
                  <input type="text" name="cari" class="form-control" placeholder="Masukkan Judul">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                            <button class="btn-danger" type="button" onclick="location.href='?page=v_buku'">Reset</button>
                        </div>
                      </div>
                    </div>
        </form>
        <h2>Data Kamar Pasien</h2>
         <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Kamar</th>
                          <th>Waktu Penginapan</th>
                          <th>Harga/Malam</th>
                          <th>Total Harga Penginapan</th>
                        </tr>
                      </thead>
                      <tbody>
                         <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td> 
                          <td></td> 
                         </tr>

                         <tr>
                             <td>
                              <a href="" class="btn btn-secondary">Cetak</a>
                            </td>
                            <td>
                              <a href="" class="btn btn-success">Tambah</a>
                            </td>
                            <td>
                              <a href="" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                              <a href="" class="btn btn-danger">Hapus</a>
                            </td>
                         </tr>
                      </tbody>
                    </table>
      </div>
    </div>
  </div>
</div>
    </div>
   <!-- SELESAI DISINI -->
</section>
<!-- /.content -->
</div>

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Kamar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?= site_url('barang/proses') ?>">
      <div class="container">
		<!-- MULAI DISINI -->
        <div class="col-sm-12">
			<div class="row">
	<div class="col-sm-12 grid-margin stretch-card">
		<div class="card">
      <a href="?page=v_buku" class="btn btn-info">Lihat Data</a>
			<div class="card-body">
				<form class="form-sample" action="" method="POST">
          <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Kode Kamar</h5>
                </div>
                <div class="card-body">
                  <input type="text" name="ko" class="form-control">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Nama Kamar</h5>
                </div>
                <div class="card-body">
                  <input type="text" name="no" class="form-control">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Waktu Penginapan</h5>
                </div>
                <div class="card-body">
                  <input type="text" name="satuan" class="form-control">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Harga/Malam</h5>
                </div>
                <div class="card-body">
                  <input type="text" name="satuan" class="form-control">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Total Harga Penginapan</h5>
                </div>
                <div class="card-body">
                  <input type="text" name="hb" class="form-control">
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
        <!-- SELESAI DISINI -->
  </div>

</form>
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




  <script src="<?= base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
  <script>
    $(document).ready(function() {
      $('#kategori').on('change', function() {
        var idx = $(this).val();
        var url = "<?= site_url('barang/get_subkategori'); ?>";
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
        type: 'post',
        url: url,
        data: 'idx=' + idx,
        success: function(data) {
          $('#subkategori').html(data); //menampilkan data ke dalam modal
        }
      });
    });
    });
  </script>