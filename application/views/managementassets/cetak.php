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
											<th>Jenis Barang</th>
											<th>Merk</th>
											<th>Type</th>
											<th>Asal</th>
											<th>Tahun</th>
											<th>Jumlah</th>
											<th>Nomor Activa</th>
											<th>Lokasi</th>
											<th>keterangan</th>
											<!-- <th>QrCode</th> -->
											<!-- <th></th> -->
										</tr>
									</thead>
									<tbody>
										<?php 
                
                $no=1;
                foreach ($assets as $key ) { ?>

										<tr>
											<td width="30px">
												<center><?= $no++ ?></center>
											</td>
											<td><?= $key->nama_barang ?></td>
											<td><?= $key->merk ?></td>
											<td><?= $key->type ?></td>
											<td><?= $key->asal ?></td>
											<td><?= $key->tahun ?></td>
											<td><?= $key->jumlah ?></td>
											<td><?= $key->nomor_activa ?></td>
											<td><?= $key->lokasi ?></td>
											<td><?= $key->keterangan ?></td>
											<!-- <td><img width="200" src="./qrcode/<?= $key->qrcode ?>" alt="QrCode: <?= $key->qrcode ?>"></td> -->
										</tr>
										<?php }  ?>

									</tbody>
            </table>
            