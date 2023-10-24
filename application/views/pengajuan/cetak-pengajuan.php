<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		body {
			width: 960px;
			margin: auto;
		}
	</style>
</head>
<body>

	<table width="100%">
		<tr>
			<td width="75%">
				<img src="<?= base_url()?>assets/images/jasa.png" style="height: 60px;float: left;"> <span style="font-size:40px" >JASA RAHARJA </span>
				<br>
				Utama dalam perlindungan,prima dalam pelayanan
			</td>
			<td>
				<center>
					<div style="border:1px solid black;font-size: 11px;padding:10px">FORMULIR DIBERIKAN
						<br>
					SECARA CUMA-CUMA</div></center>
				</td>
			</tr>
		</table>
		<br>
		<br>
		<center><u><span style="font-size:20px;font-weight: bold;">FORMULIR PENGAJUAN SANTUNAN JASA RAHARJA</span></u>
			<br>
		(diisi dan ditandatangani oleh penerima dana santunan)</center>

		<br>
		1. Saya yang bertanda tangan dibawah ini :
		<table width="100%">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td colspan="4"><?= $data->nama ?></td>
			</tr>
			<tr>
				<td>Tempat & Tgl. Lahir</td>
				<td>:</td>
				<td><?= $data->tempat_lahir ?>,<?= $data->tanggal_lahir ?> ( <?= $data->umur ?> Tahun)</td>
				<td>Jenis Kelamin 
					<?php 

					if($data->jk1 == "laki - laki"){ ?>
						<input type="checkbox" checked> L <input type="checkbox" > P
						<?php 
					}else{ ?>
						<input type="checkbox" > L <input type="checkbox" checked> P
						<?php
					}
				?></td>
			</tr>
			<tr>
				<td>Nomor KTP/NIK</td>
				<td>:</td>
				<td><?= $data->ktp ?></td>
				<td>Pekerjaan</td>
				<td><?= $data->pekerjaan ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td colspan="4"><?= $data->alamat ?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>No Ponsel/Telp</td>
				<td><?= $data->nohp ?></td>
			</tr>

		</table>

		Hubungan dengan korban sebagai : <?= $data->hubungan_keluarga ?>
		<table width="100%">
			<tr>
				<td>dengan ini mengajukan santunan* :</td>
				<td>
					<?php 
					if($data->santunan1 == 2){ ?>
						<input type="checkbox" checked>
						<?php
					} else{ ?>
						<input type="checkbox" >
					<?php }
					?>
				Meninggal Dunia</td>
				<td><?php 
				if($data->santunan2 == 2){ ?>
					<input type="checkbox" checked>
					<?php
				} else{ ?>
					<input type="checkbox" >
				<?php }
			?>Luka - luka</td>
			<td>
				<?php 
				if($data->santunan3 == 2){ ?>
					<input type="checkbox" checked>
					<?php
				} else{ ?>
					<input type="checkbox" >
				<?php }
			?>Cacat Tetap</td>
			<td><?php 
			if($data->santunan4 == 2){ ?>
				<input type="checkbox" checked>
				<?php
			} else{ ?>
				<input type="checkbox" >
			<?php }
		?>Penguburan</td>
	</tr>
	<tr>
		<td>*boleh lebih dari satu</td>
		<td><?php 
		if($data->santunan5 == 2){ ?>
			<input type="checkbox" checked>
			<?php
		} else{ ?>
			<input type="checkbox" >
		<?php }
	?>Biaya Ambulans</td>
	<td colspan="3"><?php 
	if($data->santunan6 == 2){ ?>
		<input type="checkbox" checked>
		<?php
	} else{ ?>
		<input type="checkbox" >
	<?php }
?>Biaya P3K</td>
</tr>
</table>
<br>
<b>Akibat Kecelakaan Lalu Lintas Sebagai Berikut :</b>
<table width="100%">
	<tr>
		<td>Waktu Kejadian: hari</td>
		<td><?= $data->harikejadian ?></td>
		<td>Tanggal</td>
		<td><?= $data->tanggalkejadian ?></td>
		<td>Jam</td>
		<td><?= $data->jamkejadian ?></td>
	</tr>
	<tr>
		<td>Tempat Kejadian:</td>
		<td colspan="5"><?= $data->tempatkejadian ?></td>
	</tr>
</table>
<br>
<br>
<b>Kasus kecelakaan yang dialami oleh korban adalah :</b>
<br>
<br>
<table width="100%">
	<tr>
		<td>
			<?php
			if($data->kasus1 == 1 ){ ?>
				<input type="checkbox" checked>
				<?php
			} else{ ?>
				<input type="checkbox">
				<?php
			}
			?>
		</td>
		<td colspan="3">korban penumpang/awak kendaraan angkutan umum yang mengalami kecelakaan</td>
	</tr>
	<tr>
		<td>
			<?php
			if($data->kasus2 == 1 ){ ?>
				<input type="checkbox" checked>
				<?php
			} else{ ?>
				<input type="checkbox">
				<?php
			}
			?>
		</td>
		<td colspan="3">korban pejalan kaki atau pengemudi/penumpang kendaraan tidak bermotor yang tabrakan dengan kendaraan bermotor</td>
	</tr> 
	<tr>
		<td>
			<?php
			if($data->kasus3 == 1 ){ ?>
				<input type="checkbox" checked>
				<?php
			} else{ ?>
				<input type="checkbox">
				<?php
			}
			?>
		</td>
		<td colspan="3">Korban pengemudi/penumpang kendaraan bermotor yang tabrakan dengan kendaraan bermotor lain</td>
	</tr>
	<tr>
		<td>
			<?php
			if($data->kasus4 == 1 ){ ?>
				<input type="checkbox" checked>
				<?php
			} else{ ?>
				<input type="checkbox">
				<?php
			}
			?>
		</td>
		<td>korban ditabrak oleh kendaraan bermotor</td>
		<td>
			<?php
			if($data->kasus5 == 1 ){ ?>
				<input type="checkbox" checked>
				<?php
			} else{ ?>
				<input type="checkbox">
				<?php
			}
			?>
		</td>
		<td>korban ditabrak/tabrakan dengan kereta api</td>
	</tr>
	<tr>
		<td>
			<?php
			if($data->kasus6 == 1 ){ ?>
				<input type="checkbox" checked>
				<?php
			} else{ ?>
				<input type="checkbox">
				<?php
			}
			?>
		</td>
		<td colspan="3">korban pengemudi/penumpang kendaraan bermotor pribadi yang mengalami kecelakaan tunggal</td>
	</tr>
	<tr>
		<td>
			<?php
			if($data->kasus7 == 1 ){ ?>
				<input type="checkbox" checked>
				<?php
			} else{ ?>
				<input type="checkbox">
				<?php
			}
			?>
		</td>
		<td colspan="3">korban pengemudi/penumpang kendaraan bermotor pribadi yang bertabrakan dengan pejalan kaki/bukan kendaraan bermotor</td>
	</tr>
</table>

<br>
<br>

2. Identitas korban kecelakaan (tidak perlu diisi jika yang mengajukan adalah korban sendiri), sebagai berikut :
<br>
<br>
<table width="100%">
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td colspan="4"><?= $data->nama2 ?></td>
	</tr>
	<tr>
		<td>Tempat & Tgl. Lahir</td>
		<td>:</td>
		<td><?= $data->tempat_lahir2 ?>,<?= $data->tanggal_lahir2 ?> ( <?= $data->umur2 ?> Tahun)</td>
		<td>Jenis Kelamin 
			<?php 

			if($data->jk2 == "laki - laki"){ ?>
				<input type="checkbox" checked> L <input type="checkbox" > P
				<?php 
			}else{ ?>
				<input type="checkbox" > L <input type="checkbox" checked> P
				<?php
			}
		?></td>
	</tr>
	<tr>
		<td>Nomor KTP/NIK</td>
		<td>:</td>
		<td><?= $data->ktp2 ?></td>
		<td>Pekerjaan</td>
		<td><?= $data->pekerjaan2 ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td colspan="4"><?= $data->alamat2 ?></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td>No Ponsel/Telp</td>
		<td><?= $data->nohp2 ?></td>
	</tr>

</table>

<br>
<div style="border: 1px solid red";>
	<table>
		<tr>
			<td>3. <br><br></td>
			<td>Dalam pengajuan santunan Jasa Raharja ini saya menyatakan dnegan sebenar-benarnya, dalam keadaan sadar dan tanpa paksaan dari pihak manapun, bahwa :</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<ul type="a">
					<li>Saya bersedia memenuhi ketentuan dan persyaratan yang berlaku dalam penvgajuan santunan Jasa Raharja</li>
					<li>Seluruh keterangan yang saya berikan dan seluruh dokumen persyaratan yang saya serahkan adalah benar dan absah</li>
					<li>Apabila di kemudian hari terbukti bahwa keterangan yang saya berikan tidak benar dan/atau dokumen persyaratan yang saya serahkan tidak absah, maka saya bersedia dituntut di muka pengadilan sesuai ketentuan hukum yang berlaku dan bersedia mengembalikan seluruh dana santunan yang telah saya terima</li>
					<li>Saya bersedia mengembalikan dana santunan yang telah saya terima apabila di kemudian hari ternyata fitemukan adanya kesalahan dalam perhitungan jumlah dana santunan yang seharusnya saya terima</li>
					<li>Apabila penyerahan dana melalui pemindah bukuan atau transfer bank, maka Bukti Pemindahbukuan/Transfer Bank milik PT. Jasa Raharja (Persero) berlaku juga sebagai bukti tanda terima dana santunan yang sah</li>
				</ul>
			</td>
		</tr>
	</table>
</div>

<br>
<br>

<table width="100%">
	<tr>
		<td width="60%"></td>
		<td>Diajukan di </td>
		<td>:</td>
		<td><?= $data->tempatpengajuan ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Tanggal</td>
		<td>:</td>
		<td><?= $data->tglpengajuan ?></td>
	</tr>
	<tr>
		<td></td>
		<td colspan="3">Yang Mengajukan,
			<br>
			(tanda tangan/ cap jempol, stempel instansi/badan hukum
			<br>
			<br>
			<br>
			<br>
			Nama Lengkap : <?= $data->namapengaju ?></td>
		</tr>
	</table>

</body>
</html>