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
						<a href="<?= site_url('user');?>" class="nav-link ">
							<i class="nav-icon fas fa-circle"></i>
							<p>user</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= site_url('kelaskamar')?>" class="nav-link">
							<i class="nav-icon fas fa-circle"></i>
							<p>Kelas Kamar</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= site_url('rumahsakit');?>" class="nav-link ">
							<i class="nav-icon fas fa-circle"></i>
							<p>Rumah Sakit</p>
						</a>
					</li>
          			
					<li class="nav-item">
						<a href="<?= site_url('survei')?>" class="nav-link">
							<i class="nav-icon fas fa-circle"></i>
							<p>Form Survei</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= site_url('pengajuan')?>" class="nav-link">
							<i class="nav-icon fas fa-circle"></i>
							<p>Form Pengajuan</p>
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
			<li class="nav-item">
				<a href="#" class="nav-link ">
					<i class="nav-icon fas fa-book"></i>
					<p>
						managemant assets
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?= site_url('assets')?>" class="nav-link">
							<i class="nav-icon fas fa-circle"></i>
							<p>Inventory</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= site_url('lokasi')?>" class="nav-link">
							<i class="nav-icon fas fa-circle"></i>
							<p>lokasi</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= site_url('barang')?>" class="nav-link">
							<i class="nav-icon fas fa-circle"></i>
							<p>barang</p>
						</a>
					</li>

				</ul>
			</li>













	</nav>

</div>
