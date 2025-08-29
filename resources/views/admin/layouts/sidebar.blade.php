<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!-- Sidebar Brand -->
    <div class="sidebar-brand">
        <a href="#" class="brand-link">
            <span class="brand-text fw-light">Dashboard</span>
        </a>
    </div>

    <!-- Sidebar Wrapper -->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @php
                    $currentRoute = Route::currentRouteName();
                @endphp

                <!-- Products -->
                <li
                    class="nav-item {{ in_array($currentRoute, ['admin.products.view', 'admin.products.create']) ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ in_array($currentRoute, ['admin.products.view', 'admin.products.create']) ? 'active' : '' }}">
                        <i class="nav-icon bi bi-box-seam"></i>
                        <p>
                            Products
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.product.view')}}"
                                class="nav-link {{ $currentRoute === 'admin.products.view' ? 'active' : '' }}">
                                <i class="nav-icon bi bi-list-ul"></i>
                                <p>View Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.product.create')}}"
                                class="nav-link {{ $currentRoute === 'admin.products.create' ? 'active' : '' }}">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Add New Product</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Categories -->
                <li
                    class="nav-item {{ in_array($currentRoute, ['admin.categories.view', 'admin.categories.create']) ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ in_array($currentRoute, ['admin.categories.view', 'admin.categories.create']) ? 'active' : '' }}">
                        <i class="nav-icon bi bi-tags"></i>
                        <p>
                            Categories
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.view') }}"
                                class="nav-link {{ $currentRoute === 'admin.categories.view' ? 'active' : '' }}">
                                <i class="nav-icon bi bi-list-ul"></i>
                                <p>View Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.create') }}"
                                class="nav-link {{ $currentRoute === 'admin.categories.create' ? 'active' : '' }}">
                                <i class="nav-icon bi bi-plus-circle"></i>
                                <p>Add New Category</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Customers -->
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $currentRoute === 'customers.index' ? 'active' : '' }}">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Customers</p>
                    </a>
                </li>

                <!-- Orders -->
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $currentRoute === 'orders.index' ? 'active' : '' }}">
                        <i class="nav-icon bi bi-cart-check"></i>
                        <p>Orders</p>
                    </a>
                </li>

                <!-- Analytics -->
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $currentRoute === 'analytics.index' ? 'active' : '' }}">
                        <i class="nav-icon bi bi-graph-up"></i>
                        <p>Analytics</p>
                    </a>
                </li>

                <!-- Settings -->
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $currentRoute === 'settings.index' ? 'active' : '' }}">
                        <i class="nav-icon bi bi-gear"></i>
                        <p>Settings</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
