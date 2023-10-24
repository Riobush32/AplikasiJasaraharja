<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JASA RAHARJA KISARAN</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url().'assets/plugins/fontawesome-free/css/all.min.css'?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url().'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url().'assets/dist/css/adminlte.min.css'?>">
  <style type="text/css">
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="hold-transition login-page" style="background-color:white">
  <div class="login-box">
    <center>
      <img src="<?= base_url()?>assets/images/jasa.png ?>" style="height: 60px;">
      <br>
      <span style="font-size:30px"> SISIJR </span><br>
      
    </center>
    <hr>

    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">
          <?php
          $flash = $this->session->flashdata('alert');
          if (!empty($flash)) {
            echo $flash;
          }
          ?>
        </p>

        <form action="<?= site_url() . 'login/auth'; ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <select name="level" class="form-control" required>
              <option value="">Pilih Level</option>
              <option value="1">Administrator</option>
              <option value="2">Kepala Cabang</option>
              <option value="3">Petugas Survey</option>
              <option value="4">Staf Kantor</option>
              
            </select>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block" >Login Sistem</button>
            </div>
            <!-- /.col -->
            <div class="col-4">

            </div>
            <!-- /.col -->
          </div>
          <hr>
          <center> App V.1.2023  Jasa Raharja Kisaran</center>
        </form>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
