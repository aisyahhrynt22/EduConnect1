<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #5e7298">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{asset('admin/dist/img/logouai.png')}}" width="230">
  </a>

      <!-- Sidebar -->
      <div class="sidebar">

    <!-- Sidebar -->
    <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/adminedu" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Halaman Utama
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/adminedu/cek_mgm" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p>
                    Cek MGM
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/adminedu/informasi_agen" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Informasi Agen
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/" class="nav-link bg-danger">
                  <i class="nav-icon far fa-sign-out"></i>
                  <p>
                    Log Out
                  </p>
                </a>
              </li>

              {{-- <li class="nav-item">
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
            </li> --}}

      </ul>
    </nav>
  </div>
</aside>