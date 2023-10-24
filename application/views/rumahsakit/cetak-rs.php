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
       <center> <h4> <?= $title ?></h4></center>
       <hr>
       <div class="table-responsive">
               <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Rumah Sakit</th>
                    <th>Direktur</th>
                    <th>PIC</th>
                    <th>No Hp</th>
                    <th>No Rek</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  
                  $no=1;
                  foreach ($rs as $key ) { ?>
                   <tr>
                    <td width="30px"><center><?= $no++ ?></center></td>
                    <td><?= $key->nama_rs ?></td>
                    <td><?= $key->nama_direktur ?></td>
                     <td><?= $key->nama_pic ?></td>
                    <td><?= $key->no_telepon ?></td>
                    <td><?= $key->no_rec ?></td>
                  </tr>
                  <?php
                }5
                ?>

              </tbody>
            </table>
          