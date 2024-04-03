<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('img/main-logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Mutiara Property</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/profile-icon.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info" style="color: aliceblue">
                <h5 class="d-block">{{ auth()->user()->name }}</h5>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-lg-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard/admin" class="nav-link {{ Request::is('dashboard/admin*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-chart-line"></i>
                        <p>
                            Kelola Artikel
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-lg-3">
                    <a href="/dashboard/kelola-user"
                        class="nav-link {{ Request::is('dashboard/kelola-user*') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-list-check"></i>
                        <p>
                            Kelola User
                        </p>
                    </a>
                </li>
                <li class="dropdown-divider"></li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="nav-item bg-danger w-100 border-0 rounded mb-3" style="height: 35px"
                            type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
