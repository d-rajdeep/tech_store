<nav class="app-header navbar navbar-expand bg-body shadow-sm">
    <div class="container-fluid">

        <!-- Sidebar Toggle -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list fs-5"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ route('index') }}"
                    class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}">
                    Home
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </li>
        </ul>

        <!-- Right Side Navbar -->
        <ul class="navbar-nav ms-auto align-items-center">

            <!-- Search -->
            <li class="nav-item">
                <a class="nav-link" href="#" role="button" data-widget="navbar-search">
                    <i class="bi bi-search fs-5"></i>
                </a>
            </li>

            <!-- Logout -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fs-5 me-1"></i>
                    <span class="d-none d-sm-inline">{{ Auth::user()->name ?? 'Profile' }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-person me-2"></i> View Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-gear me-2"></i> Settings
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
