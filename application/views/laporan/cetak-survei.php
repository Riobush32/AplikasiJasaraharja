<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
  <title></title>
</head>
<body>

  <div class="container">
    <p><strong><center><?= $judul ;?></center></strong></p>
    <hr>
    <div class="row">
      <div class="col-sm-12">
        <table id="example1" class="table table-bordered table-sm table-hover">
          <thead>
            <tr class="bg-dark">
              <th>No.</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Lokasi</th>
              <th>Petugas</th>
            </tr>
          </thead>
          <tbody>
            <?php 

            $no=0;
            foreach ($barang as $key) { 

              ?>
              <tr>
                <td><?= ++$no ;?></td>
                <td><?= $key->nama_korban ;?></td>
                <td><?= $key->alamat_korban ;?></td>
                <td><?= $key->lokasi_kecelakaan ;?></td>
                <td><?= $key->nama_petugas ;?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
