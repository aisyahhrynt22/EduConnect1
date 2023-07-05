
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #5e7298">
    <!-- Brand Logo -->
    <div class="auth-logo mt-30 has-text-centered">
      <a href="/"><img class="dark-logo switcher-logo" src="https://penerimaan.uai.ac.id/file/images/logouai.png" alt="" width="180"></a>
  </div>
    {{-- <a href="../../index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}
    {{-- <a class="brand-link">
        <img src="{{asset('admin/dist/img/logouai.png')}}" alt="AdminLTE Logo" class="brand-image img-rectangle elevation-3" style="opacity: .9">
        <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>
      </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user (optional) -->
    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> --}}

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="../widgets.html" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Cek Agen
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../widgets.html" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Informasi Agen
                  </p>
                </a>
              </li>

              <li class="nav-item">
              <!-- Authentication -->
                <form href="../widgets.html" class="nav-link bg-danger" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <i class="nav-icon far fa-sign-out" aria-hidden="true"></i>
                    <x-dropdown-link :href="route('logout')"
                          onclick="event.preventDefault();
                                  this.closest('form').submit();">
                          {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>