<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">      
              <li class="nav-item">
                  <a href="{{ route('karyawan.index') }}" class="nav-link @yield('karyawan')">
                    <i class="nav-icon fa fa-user-tie"></i>
                    <p>
                      Data Karyawan
                    </p>
                  </a>
                </li>
                
                
                <li class="nav-item">
                  <a href="{{ route('jabatan.index') }}" class="nav-link @yield('jabatan')">
                    <i class="nav-icon fa fa-user-tag"></i>
                    <p>
                      Jabatan
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('pendidikan.index') }}" class="nav-link @yield('Pendidikan')">
                    <i class="nav-icon fas fa-graduation-cap"></i>
                    <p>
                      Pendidikan
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="{{ route('status.index') }}" class="nav-link @yield('status')">
                    <i class="nav-icon fas fa-award"></i>
                    <p>
                      Status
                    </p>
                  </a>
                </li>
            </ul>
        </nav>


    {{-- sidebar ends --}}
    </div>
    {{-- sidebar ends --}}
</aside>