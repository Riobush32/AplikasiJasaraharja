<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0"><i class="fas fa-users"></i> <?= $title ?></h1>
          <hr>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              Data Pengguna
            </div>
            <div class="card-body">

             <div class="row">
              <div class="col-sm-6">
               <form method="post" action="<?= site_url('user/simpan') ?>">

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Nama</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" placeholder="nama" required>
                  </div>
                </div>

                <div class="form-group row">
                 <label for="inputEmail3" class="col-sm-4 col-form-label">Username</label>
                 <div class="col-sm-8">
                   <input type="text" name="user" class="form-control" placeholder="username" required>
                 </div>
               </div>

               <div class="form-group row">
                 <label for="inputEmail3" class="col-sm-4 col-form-label">Password</label>
                 <div class="col-sm-8">
                   <input type="password" name="password" class="form-control" placeholder="password" required>
                 </div>
               </div>

               <div class="form-group row">
                 <label for="inputEmail3" class="col-sm-4 col-form-label">Level</label>
                 <div class="col-sm-8">
                   <select name="level" class="form-control" required>
                    <option value="">Pilih Level</option>
                    <?php foreach ($level as $key ) { ?>
                      <option value="<?= $key->id_level ?>"><?= $key->nama_level ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <input type="submit" class="btn btn-primary" value="Simpan">
              <a href="<?= site_url('user');?>" class="btn btn-danger">Reset</a>

            </form>
          </div>
        </div>
        <div class="table-responsive">
         <table id="example1" class="table table-bordered table-striped table-sm">
          <thead>
            <tr class="bg-dark">
              <th width="50px">No</th>
              <th>Nama</th>
              <th>Username</th>
              <th>Level</th>
              <?php if($this->session->userdata('akses') == 1) : ?>
                <th>Action</th>
              <?php endif ?>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($user as $u) { ?>

              <tr>
                <td><center><?= $no++ ?></center></td>
                <td><?= $u->nama_lengkap ?></td>
                <td><?= $u->username ?></td>
                <td>
                  <?php 
                  if($u->level == 1){ ?>
                   Administrator
                   <?php
                 }elseif($u->level == 2){ ?>
                   Kepala Kantor
                   <?php
                 }elseif($u->level == 3){ ?>
                   Petugas Survey
                   <?php
                 }elseif($u->level == 4){ ?>
                   Staf Kantor
                   <?php
                 }
                 ?>
               </td>
               <?php if($this->session->userdata('akses') == 1) : ?>
                 <td width="100px">
                  <center>
                    <a href="<?= site_url('user/delete/' . $u->id_user) ?>" class="btn btn-danger btn-sm tombol-hapus">
                      <i class="fa fa-trash"></i> 
                    </a>
                  </center>
                </td>
              <?php endif ?>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>