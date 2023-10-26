<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JASA RAHARJA</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">

  <script type="text/javascript" src="<?= base_url() ?>assets/chartjs/Chart.js"></script>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  
  <style type="text/css">
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
  <style type="text/css">
    .signature-pad{
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
      height: 260px;
    }
  </style>

  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>

<body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed sidebar-collapse  text-sm">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>


      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('login/logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
          </a>
        </li>
      </ul>
    </nav>


    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="<?= site_url() ?>assets/images/jasa.png"  class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">JASA RAHARJA </span>
      </a>

      <!-- Sidebar -->

      <?php
      if ($this->session->userdata('akses') == 1) {
        $this->load->view('menu-admin');
      } elseif ($this->session->userdata('akses') == 2) {
        $this->load->view('menu-kepala');
      } elseif ($this->session->userdata('akses') == 3) {
        $this->load->view('menu-staf');
      } elseif ($this->session->userdata('akses') == 4) {
        $this->load->view('menu-survei');
      } 
      ?>

      



      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->


    <?php
    $flashdata = $this->session->userdata('info');
    if ($flashdata) { ?>
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('info'); ?>
      "></div>
    <?php } ?>


    <?php $this->load->view($view); ?>



    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy;2022- <?= date('Y') ?> MBKM STMIK ROYAL KISARAN</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1
      </div>
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>

  <!-- jQuery UI 1.11.4 -->
  <!-- <script src="<?= base_url() . 'assets/plugins/jquery-ui/jquery-ui.min.js' ?>"></script>
  -->
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- DataTables  & Plugins -->
  <script src="<?= base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/plugins/datatables-responsive/js/dataTables.responsive.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/plugins/datatables-buttons/js/dataTables.buttons.min.js' ?>"></script>
  <script src="<?= base_url() . 'assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js' ?>"></script>

  <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="<?= base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>

  <!-- Sweetalert -->
  <script type="text/javascript" src="<?= base_url(); ?>assets/sweetalert/sweetalert2.all.min.js"></script>

  <!-- overlayScrollbars -->
  <script src="<?= base_url() . 'assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() . 'assets/dist/js/adminlte.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="<?= base_url() . 'assets/dist/js/demo.js' ?>"></script>  -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url() . 'assets/dist/js/pages/dashboard.js' ?>"></script>

  <script>
    $(function() {
      $("#example1").DataTable({

        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $("#example3").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
      $("#example4").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  </script>

  

  




  <script>
    const flashData = $(".flash-data").data('flashdata');
    if (flashData) {
      sw = flashData.split('#');
      if (sw[2] == 1) {
        Swal.fire({
          icon: 'success',
          title: sw[0],
          text: sw[1],
          showConfirmButton: false,
          timer: 1500
        })
      } else if (sw[2] == 2) {
        Swal.fire({
          icon: 'warning',
          title: sw[0],
          text: sw[1],
          showConfirmButton: false,
          timer: 1500
        })
      } else {
        Swal.fire({
          icon: 'error',
          title: sw[0],
          text: sw[1],
          showConfirmButton: false,
          timer: 1500
        })
      }
    }

    //tomboh hapus
    $('.tombol-hapus').on('click', function(e) {
      e.preventDefault();
      const linknya = $(this).attr('href');
      var say = $(this).data('key');
      Swal.fire({
        title: 'Are you sure?',
        text: say,
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          document.location.href = linknya;
        }
      })
    })

    //tomboh selesai
    $('.tombol-selesai').on('click', function(e) {
      e.preventDefault();
      const linknya = $(this).attr('href');
      var say = $(this).data('key');
      Swal.fire({
        title: '',
        text: say,
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sudah',
        cancelButtonText: 'Belum'
      }).then((result) => {
        if (result.value) {
          document.location.href = linknya;
        }
      })
    });
  </script>

  


</body>

</html>