<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="font/css/all.min.css">
  	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Form Pengajuan</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="logo_jr.png">
			</div>
			<div class="col-sm-6">

			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<center><h4><u>FORMULIR PENGAJUAN SANTUNAN JASA RAHARJA</u></h4></center>
				<center><p>(diisi dan ditandatangani oleh penerima dana santunan)</p></center>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-form-label"><b>1. Saya yang bertanda tangan di bawah ini :</b></label>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label for="inputPassword3" class="col-form-label">Pekerjaan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="icheck d-inline">
                        <input type="checkbox">
                        <label for="checkboxPrimary1">
                        	Laki-Laki
                        </label>
                      </div>
                      <div class="icheck d-inline">
                        <input type="checkbox">
                        <label for="checkboxPrimary1">
                        	Perempuan
                        </label>
                      </div>
                  </div>
                  <div class="form-group row">
                  	<label for="inputPassword3" class="col-sm-2 col-form-label">Nomor KTP/NIK</label>
                  	<div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label for="inputPassword3" class="col-form-label">Nomor Hp/Telp</label>
                  	<div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                  	<label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                  	<div class="col-sm-10">
                      <textarea class="form-control" rows="2"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                  	<label for="inputPassword3" class="col-sm-2 col-form-label">Hubungan dengan korban sebagai</label>
                  	<div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                    <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Dengan ini mengajukan santunan*</label>
                  	<div class="form-group">
              				<select class="form-control" id="exampleFormControlSelect1">
                					<option>Meninggal dunia</option>
          				      	<option>Luka-luka</option>
          				      	<option>Cacat tetap</option>
          				      	<option>Penguburan</option>
          				      	<option>Biaya ambulance</option>
          				      	<option>Biaya P3K</option>
          				    </select>
				            </div>
                  </div>
                <div class="form-group row">
                  <label>Akibat kecelakaan lalu lintas sebagai berikut :</label>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tempat kejadian</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="2"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Waktu kejadian : hari</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                  <label class="col-form-label">Tanggal</label>
                    <div class="col-sm-2">
                      <input type="date" class="form-control">
                    </div>
                  <label class="col-form-label">Jam</label>
                    <div class="col-sm-2">
                      <input type="time" class="form-control">
                    </div>
                </div>
                <div class="row">
                  <label class="col-form-label">Kasus kecelakaan yang dialami oleh korban adalah :</label>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="checkbox">
                  <label class="col-form-label">korban penumpang/awak kendaraan angkutan umum yang mengalami kecelakaan</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="checkbox">
                  <label class="col-form-label">korban pejalan kaki atau pengemudi/penumpang kendaraan tidak bermotor yang tabrakan dengan kendaraan bermotor</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="checkbox">
                  <label class="col-form-label">korban pengemudi/penumpang kendaraan bermotor yang tabrakan dengan kendaraan bermotor</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <input type="checkbox">
                  <label class="col-form-label">korban ditabrak oleh kendaraan bermotor</label>
                  </div>
                  <div class="col-sm-5">
                    <input type="checkbox">
                  <label class="col-form-label">korban ditabrak/tabrakan dengan kereta api</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="checkbox">
                    <label class="col-form-label">korban pengemudi/penumpang kendaraan bermotor pribadi yang mengalami kecelakaan tunggal</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <input type="checkbox">
                    <label class="col-form-label">korban pengemudi/penumpang kendaraan bermotor pribadi yang bertabrakan dengan pejalan kaki/bukan kendaraan bermotor</label>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <label class="col-form-label"><b>2. Identitas korban kecelakaan (tidak perlu diisi jika yang mengajukan adalah korban sendiri), sebagai berikut :</b></label>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat/Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control">
                    </div>
                    <label for="inputPassword3" class="col-form-label">Pekerjaan</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control">
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="icheck d-inline">
                        <input type="checkbox">
                        <label for="checkboxPrimary1">
                          Laki-Laki
                        </label>
                      </div>
                      <div class="icheck d-inline">
                        <input type="checkbox">
                        <label for="checkboxPrimary1">
                          Perempuan
                        </label>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nomor KTP/NIK</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                    <label for="inputPassword3" class="col-form-label">Nomor Hp/Telp</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="2"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="alert alert-danger" role="alert">
                      <p>3. Dalam pengajuan santunan Jasa Raharja ini saya menyatakan dnegan sebenar-benarnya, dalam keadaan sadar dan tanpa paksaan dari pihak manapun, bahwa :</p>
                      <hr>
                      <p class="mb-0">a. Saya bersedia memenuhi ketentuan dan persyaratan yang berlaku dalam penvgajuan santunan Jasa Raharja</p>
                      <p class="mb-0">b. Seluruh keterangan yang saya berikan dan seluruh dokumen persyaratan yang saya serahkan adalah benar dan absah</p>
                      <p class="mb-0">c. Apabila di kemudian hari terbukti bahwa keterangan yang saya berikan tidak benar dan/atau dokumen persyaratan yang saya serahkan tidak absah, maka saya bersedia dituntut di muka pengadilan sesuai ketentuan hukum yang berlaku dan bersedia mengembalikan seluruh dana santunan yang telah saya terima</p>
                      <p class="mb-0">d. Saya bersedia mengembalikan dana santunan yang telah saya terima apabila di kemudian hari ternyata fitemukan adanya kesalahan dalam perhitungan jumlah dana santunan yang seharusnya saya terima</p>
                      <p class="mb-0">e. Apabila penyerahan dana melalui pemindah bukuan atau transfer bank, maka Bukti Pemindahbukuan/Transfer Bank milik PT. Jasa Raharja (Persero) berlaku juga sebagai bukti tanda terima dana santunan yang sah</p>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-form-label">Diajukan di :</label>
                  </div>
                  <div class="row">
                    <label class="col-form-label">Tanggal :</label>
                  </div>
                  <div class="row">
                    <label class="col-form-label">Yang mengajukan,</label>
                  </div>
              	</div>
              </form>
			</div>
		</div>
	</div>
	
</body>
</html>