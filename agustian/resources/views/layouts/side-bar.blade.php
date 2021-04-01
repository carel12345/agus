<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PembayaranSPP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if (auth()->user()->level == "admin")
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-columns text-primary"></i>
              <p>
                Data Tabel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('crud-siswa')}} " class="nav-link">
                  <i class="fas fa-user-graduate ml-3 nav-icon"></i>
                  <p>Crud Siswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-tie ml-3 nav-icon"></i>
                  <p>Crud Petugas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-door-open ml-3 nav-icon"></i>
                  <p>Crud Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-book ml-3 nav-icon"></i>
                  <p>Crud Spp</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          
          <li class="nav-item">
            <a href=" # " class="nav-link">
              <i class="nav-icon fas fa-comment-dollar"></i>
              <p>
                Transaksi Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" # " class="nav-link">
              <i class="nav-icon fas fa-comments-dollar"></i>
              <p>
                Histori Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" # " class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href=" {{route('logout')}} " class="nav-link">
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