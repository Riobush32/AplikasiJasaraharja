<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak laporan Survei</title>
	<style type="text/css">
		body {
			width: 960px;
			margin: auto;
		}
		#customers {

			border-collapse: collapse;
			width: 100%;
		}

		#customers td, #customers th {
			border: 1px solid black;
			padding: 6px;
		}

		

		

		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			
			color: black;
		}
	</style>
</head>
<body>
	<div><b>PT. JASA RAHARJA<br>Perwakilan Kisaran</b></div>
	<br><br>
	<center>
		<b>LAPORAN  HASIL SURVEI</b><br>
		No. PP /<?= $ct->NoUrut ?> /<?= substr($ct->tgl_survei,0,4 )?>
	</center>
	<br>
	<br>
	<table width="100%">
		<tr>
			<td>Hari/Tanggal survei:</td>
			<td><?= $ct->hari_survei ?></td>
			<td>Petugas survey:</td>
			<td><?= $ct->nama_petugas ?></td>
		</tr>
		<tr>
			<td>Jenis Survei</td>
			<td>
				<?php 
				if($ct->jenis1 == 2){ ?>
					<input type="checkbox" checked> Keterjaminan Korban
				<?php }else{ ?>
					<input type="checkbox" > Keterjaminan Korban
					<?php
				}
				?>
			</td>
			<td>
				<?php 
				if($ct->jenis2 == 2){ ?>
					<input type="checkbox" checked> Keabsahan ahli waris
				<?php }else{ ?>
					<input type="checkbox" > Keabsahan ahli waris
					<?php
				}
				?>
			</td>
			<td>
				<?php 
				if($ct->jenis3 == 2){ ?>
					<input type="checkbox" checked> Keabsahan biaya perawatan / pengobatan
				<?php }else{ ?>
					<input type="checkbox" > Keabsahan biaya perawatan / pengobatan
					<?php
				}
				?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<?php 
				if($ct->jenis3 == 4){ ?>
					<input type="checkbox" checked> Lainnya
				<?php }else{ ?>
					<input type="checkbox" > Lainnya
					<?php
				}
				?>
			</td>
		</tr>
	</table>
	<table width="100%" >
		<tr>
			<td width="250px">Nama Korban / No Berkas :</td>
			<td style="text-align: left;"><?= $ct->nama_korban ?></td>
			<td width="300px">No Berkas :</td>
			
		</tr>
		<tr>
			<td width="250px">Alamat Korban : </td>
			<td><?= $ct->alamat_korban ?></td>
			
		</tr>
		<tr>
			<td width="250px">Tempat/Tgl Kejadian : </td>
			<td><?= $ct->lokasi_kecelakaan ?></td>
			
		</tr>

	</table>
	<br>
	
	Sumber Informasi
	<br>
	<table id="customers">
		<tr>
			<th>No</th>
			<th><center>Identitas / Detil Sumber Informasi dan Metode Perolehan Sumber Informasi</center></th>
			<th>Tanda Tangan</th>
		</tr>
		<?php 
		$no=1;
		foreach ($informasi as $key ) { ?>
			<tr>
				<td width="30px"><center><?= $no++ ?></center></td>
				<td><?= $key->Keterangan ?></td>
				<td width="100px">
					<center><img src="<?= base_url('tandatangan/'.$key->TandaTangan)?>" style="height: 30px;widows: 50px;"></center></td>

				</tr>
				<?php
			}

			?>

		</table>
		<br>

		<b>Uraian dan Kesimpulan Hasil Survei :</b>
		<br>
		<br>
		<div style="border:1px solid black;padding:5px;height: 100px;">
			<?= $ct->keterangan ?>
		</div>
		<br>

		<table width="100%">
			<tr>
				<?php 
				$no=1;
				foreach ($kunjungan as $key ) { ?>

					
					<td>
						<center><img src="<?= base_url('survei/'.$key->Gambar)?>" style="height: 100px;width: 100%;">
							<br>
						</center></td>


						<?php
					}

					?>
				</tr>
			</table>
			<br>

			Demikian laporan hasil survei ini dibuat dengan sebenarnya sesuai dengan informasi yang diperoleh

			<br>
			<table width="100%">
				<tr>
					<td>
						Mengetahui
						<br>
						<br>
						<br>
						Abdul Bar
						<br>
					Kepala Perwakilan</td>
					
					<td width="20%">
						Petugas Survei
						<br>
						<br>
						<br>
						<?= $ct->nama_petugas ?>
						<br>
						Staf Administrasi
					</td>
				</tr>
			</table>
		</body>
		</html>



		