<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><i class="nav-icon fas fa-handshake"></i> <?= $title ?> , <?= $this->session->userdata('nama') ?></h1>
          <hr>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <!-- MULAI DISINI -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php 
        if($t_lengkaptsurvei > 0){ ?>
          <div class="row">
            <div class="col-sm-6">
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>
                  Ada <?= $t_lengkaptsurvei ?></strong> <a href="<?= site_url('survei')?>" style="text-decoration: none;">Survei yang belum diperiksa</a>
                </div>
              </div>
            </div>
            <?php
          }
          ?>

          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-header">
                  Informasi Berkas Survei
                </div>
                <div class="card-body">
                  <div class="row">
                   <div class="col-md-12 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-primary"><i class="far fa-copy"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Total Berkas Survei</span>
                        <span class="info-box-number"><?= $t_bekassurvei ?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- ./col -->
                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-danger"><i class="far fa-copy"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Draft</span>
                        <span class="info-box-number"><?= $t_draftsurvei ?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- ./col -->
                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-info"><i class="far fa-copy"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Lengkap</span>
                        <span class="info-box-number"><?= $t_lengkaptsurvei ?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- ./col -->
                  <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                      <span class="info-box-icon bg-success"><i class="far fa-copy"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text">Acc</span>
                        <span class="info-box-number"><?= $t_accsurvei ?></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="card">
              <div class="card-header">
                Informasi Pengajuan
              </div>
              <div class="card-body">
                <div class="row">
                 <div class="col-md-12 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-primary"><i class="far fa-copy"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Total Berkas Pengajuan</span>
                      <span class="info-box-number"><?= $t_bekassurvei ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- ./col -->
                <div class="col-md-4 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="far fa-copy"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Meninggal Dunia</span>
                      <span class="info-box-number"><?= $meninggal ?> </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- ./col -->
                <div class="col-md-4 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-copy"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Cacat</span>
                      <span class="info-box-number"><?= $cacat ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- ./col -->
                <div class="col-md-4 col-sm-6 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="far fa-copy"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Luka - Luka</span>
                      <span class="info-box-number"><?= $luka ?></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
              Grafik 
            </div>
            <div class="card-body">
             <canvas id="myChart"></canvas>
           </div>
         </div>
       </div>


     </div>


   </div>
 </section>
</section>

</div>

<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Meninggal", "Cacat", "Luka - Luka"],
      datasets: [{
        label: '# of Votes',
        data: [<?= $meninggal ?>,<?= $cacat ?> , <?= $luka ?>],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)'

        ],
        borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'

        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>



