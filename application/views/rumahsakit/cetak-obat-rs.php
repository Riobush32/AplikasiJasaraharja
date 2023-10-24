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
    <div class="row">


     <div class="col-sm-12">
      <center> <h4><?= $title ?> <?= $rs->nama_rs ?></h4></center>
      <hr>
      <div class="table-responsive">
       <table id="example1" class="table table-bordered table-striped table-sm">
        <thead>
          <tr class="bg-dark">
            <th width="50px">No</th>
            <th>Nama Obat</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($obat as $u) :
            ?>
            <tr>
              <td><center><?= $no++ ?></center></td>
              <td><?= $u->nama_obat ?></td>
              <td><?= $u->harga_obat ?></td>
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

