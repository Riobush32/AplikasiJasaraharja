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
            <tr class="bg-dark text-center">
              <th>No.</th>
              <th>Nama</th>
              <th>Tempat Lahir / Tgl</th>
              <th>KTP</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
            <?php 

            $no=0;
            foreach ($barang as $key) { 

              ?>
              <tr>
                <td><?= ++$no ;?></td>
                <td><?= $key->nama ;?></td>
                <td><?= $key->tempat_lahir ;?><?= $key->tanggal_lahir ;?></td>
                <td><?= $key->ktp ;?></td>
                <td><?= $key->alamat ;?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>


