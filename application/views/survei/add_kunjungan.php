<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><i class="nav-icon fas fa-search"></i> <?= $title ?></h1>
          <hr>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
         <a href="<?= site_url('survei');?>" class="btn btn-info btn-sm"> Kembali</a>
         <br>
         <br>
         <div class="card">
          <div class="card-header">
           Dokumentasi Kunjungan
         </div>
         <div class="card-body">


          <form method="post" action="<?= site_url('survei/foto_survei')?>"  enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $detail->id_survei ?>">
            <div class="form-group">
              <label for="">Jenis Berkas</label>
              <select name="keterangan" class="form-control">
               <option value="">Plih Jenis Dokumen</option>
               <?php 
               foreach ($berkas as $key) { ?>
                <option value="<?= $key->id_berkas ?>"><?= $key->namaberkas ?></option>
                <?php
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label for="">Upload Tanda Tangan</label>
            <input type="file" class="form-control" name="sampul">
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Upload ">
          </div>

          <form>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>








