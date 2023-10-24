
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cetak Data Kamar</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
</head>
<body>



  <div class="container">
    <!-- Small boxes (Stat box) -->
    <div class="row mt-4">


      <div class="col-sm-12">
       <center> <h4>Data Kamar Rumah Sakit <?= $rs->nama_rs ?></h4></center>
       <hr>
       <div class="table-responsive">
         <table id="example1" class="table table-bordered table-striped table-sm">
          <thead>
            <tr class="bg-dark">
              <th width="50px">No</th>
              <th>Nama Kelas Kamar</th>
              <th>Harga</th>
              
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($kamar as $u) :
              ?>
              <tr>
                <td><center><?= $no++ ?></center></td>
                <td><?= $u->nama_kelas ?></td>
                <td><?= $u->harga ?></td>

              </tr>

            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->


</body>
</html>

