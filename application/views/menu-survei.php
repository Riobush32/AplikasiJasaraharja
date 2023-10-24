<div class="sidebar">
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      <li class="nav-item">
        <a href="<?= site_url('dashboard');?>" class="nav-link ">
          <i class="nav-icon fas fa-home"></i>
          <p>Dashboard</p>
        </a>
      </li>

      <li class="nav-item menu">
        <a href="#" class="nav-link ">
          <i class="nav-icon fas fa-list"></i>
          <p>
            Menu
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?= site_url('rumahsakit');?>" class="nav-link ">
              <i class="nav-icon fas fa-circle"></i>
              <p>Data Rumah Sakit</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('survei')?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>Data Survei</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('pengajuan')?>" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>Data Pengajuan</p>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item menu">
        <a href="#" class="nav-link ">
          <i class="nav-icon fas fa-book"></i>
          <p>
            laporan 
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
         <li class="nav-item">
          <a href="<?= site_url('laporan/pengajuan')?>" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Laporan Pengajuan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= site_url('laporan/survei')?>" class="nav-link ">
            <i class="nav-icon fas fa-file"></i>
            <p>laporan Survei</p>
          </a>
        </li>

      </ul>
    </li>














  </nav>

</div>