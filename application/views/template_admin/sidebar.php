<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('Admin/DashboardAdmin') ?>" class="brand-link">
      <img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('username') ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?= base_url('Admin/DashboardAdmin') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>     
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kependudukan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Admin/DataPenduduk') ?>" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Admin/DataKepalaKeluarga') ?>" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Data Kepala Keluarga</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Admin/SuratDomisili') ?>" class="nav-link">
                  <i class="fas fa-sticky-note nav-icon"></i>
                  <p>Surat Keterangan Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Admin/SuratKeteranganDesa') ?>" class="nav-link">
                  <i class="fas fa-sticky-note nav-icon"></i>
                  <p>Surat Keterangan Desa</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Data Statistik
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Admin/DataStatistik') ?>" class="nav-link">
                  <i class="fas fa-chart-bar nav-icon"></i>
                  <p>Setting Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Admin/DataKepalaKeluarga') ?>" class="nav-link">
                  <i class="fas fa-sticky-note nav-icon"></i>
                  <p>Surat Domisili</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Admin/SettingSuratDomisili') ?>" class="nav-link">
                  <i class="fas fa-sticky-note nav-icon"></i>
                  <p>Setting Surat Domisili</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Admin/DataKepalaKeluarga') ?>" class="nav-link">
                  <i class="fas fa-sticky-note nav-icon"></i>
                  <p>Surat Domisili</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?= base_url('Auth/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>