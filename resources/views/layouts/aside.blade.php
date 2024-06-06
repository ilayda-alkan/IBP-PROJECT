
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <span  class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </span>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('https://static.vecteezy.com/system/resources/previews/001/993/889/non_2x/beautiful-latin-woman-avatar-character-icon-free-vector.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        @if(Session::has('user'))
        <p class="text-light text-uppercase fw-bold">{{ session('user')->fullName }}</p>
        <!-- Assuming 'name' is a property of the user -->
    @else
        <p>User not logged in</p>
    @endif
</div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if(Session::has('user'))
            <!-- Check if the user is authenticated -->
            @if(Session::get('user')->auth === 0)
                <!-- Check if the user's auth level is not 0 -->
                <li class="nav-item">
                    <a href="{{ route('users') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
            @endif
        @endif
          <li class="nav-item">
            <a href="{{route('blogs')}}" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>Blogs</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('categories.index')}}" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>Categories</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('contacts.index')}}" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Contacts</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>