 <!-- sidebar -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url();?>asset/img/garuda.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">SIKEBAL</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">  

        <li class="nav-item has-treeview">
          <a href="<?= base_url('dashboard1/index'); ?>" class="nav-link">
            <i class="nav-icon"></i>
            <p>DASHBOARD</p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              DATA MASYARAKAT
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('rt01/index'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Warga Rt 01</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('rt02/index'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Warga Rt 02</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('rt03/index'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Warga Rt 03</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Warga Rt 04</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              PELAYANAN
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pembayaran PBB</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Pengantar RT</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat SKTM</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>pendaftaran Ktp</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>pendaftaran KK</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>pendaftaran Akte</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              MASTER
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('crud_rt/index'); ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Master RT</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>


    </nav>
  </div>
</aside>

</div>