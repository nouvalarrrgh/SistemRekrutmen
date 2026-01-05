<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


  </nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="<?php echo e(asset('/assets/image/recruitment.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Recruitment</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <?php if(Auth::user()): ?>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('/assets/image/unknown.jpg')); ?>" class="img-circle elevation-2" alt="<?php echo e(Auth::user()->nama); ?>">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo e(Auth::user()->nama); ?></a>
        </div>
      </div>
      <?php endif; ?>
      <?php if(Auth::user()): ?>
      <?php if(Auth::user()->role == "admin"): ?>
 <!-- SidebarSearch Form -->
 <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" placeholder="Cari menu" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php endif; ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <?php if(Auth::user()): ?>
          <?php if(Auth::user()->role == "admin"): ?>
          <li class="nav-item">
            <a href="/home" class="nav-link <?php echo e((request()->is('home')) ? 'active' : ''); ?>">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/divisi/show" class="nav-link <?php echo e((request()->is('divisi*')) ? 'active' : ''); ?>">
                <i class="nav-icon fa fa-shield" aria-hidden="true"></i>
              <p>
                Divisi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jabatan/show" class="nav-link <?php echo e((request()->is('jabatan*')) ? 'active' : ''); ?>">
             <i class="nav-icon fa fa-briefcase" aria-hidden="true"></i>

              <p>
                Jabatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jadwal/show" class="nav-link <?php echo e((request()->is('jadwal*')) ? 'active' : ''); ?>">
              <i class="nav-icon fa-solid fa-calendar"></i>
              <p>
                Jadwal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/draft_soal/show" class="nav-link <?php echo e((request()->is('draft_soal*')) ? 'active' : ''); ?>">
              <i class=" nav-icon fa-regular fa-file-lines"></i>
              <p>
                Draft Soal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/peserta" class="nav-link  <?php echo e((request()->is('peserta*')) ? 'active' : ''); ?>">
              <i class="nav-icon fa-solid fa-users"></i>
              <p>
                Daftar Peserta
              </p>
            </a>
          </li>

          <li class="nav-header">Perhitungan</li>
          <li class="nav-item   <?php echo e((request()->is('laporan*')) ? 'menu-open' : ''); ?>">
            <a href="#" class="nav-link  <?php echo e((request()->is('laporan*')) ? 'active' : ''); ?>">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('laporan.hasil.show')); ?>" class="nav-link  <?php echo e((request()->is('laporan*')) ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hasil Tes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('peserta.hasil')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hasil Keputusan</p>
                </a>
              </li>
            </ul>
          </li>


          <?php else: ?>

        
          <?php if(session()->has('waktu')): ?> {
        <?php else: ?>
        <li class="nav-item">
            <a href="/soal_tes/preview" class="nav-link <?php echo e((request()->is('soal_tes*')) ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Mulai Tes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jadwal/show" class="nav-link  <?php echo e((request()->is('jadwal*')) ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Jadwal Recruitment
              </p>
            </a>
          </li>
        <?php endif; ?>
   

          <?php endif; ?>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                <p>Log Out</p>
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
            </form>
          </li>

          <?php else: ?>
          <li class="nav-item">
            <a href="/soal_tes/preview" class="nav-link  <?php echo e((request()->is('/')) ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Login
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/jadwal/show" class="nav-link   <?php echo e((request()->is('jadwal*')) ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Jadwal Recruitment
              </p>
            </a>
          </li>
          <?php endif; ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">

    </div>

    <!-- /.sidebar-menu -->
  <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\tugasakhir-master\resources\views/layouts/adminlte/sidebar.blade.php ENDPATH**/ ?>