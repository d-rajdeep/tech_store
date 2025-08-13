<div class="collapse navbar-collapse" id="navbarVerticalCollapse"></div>

<!-- Sidebar Content -->
<div class="navbar-vertical-content">
  <ul class="navbar-nav flex-column" id="navbarVerticalNav">

    <!-- Home -->
    <li class="nav-item">
      <div class="nav-item-wrapper">
        <a class="nav-link label-1" href="{{ route('admin.dashboard') }}">
          <div class="d-flex align-items-center">
            <span class="nav-link-icon"><span data-feather="home"></span></span>
            <span class="nav-link-text">Home</span>
          </div>
        </a>
      </div>
    </li>

    <hr class="navbar-vertical-line" />

    <!-- Add Product -->
    <li class="nav-item">
      <a class="nav-link label-1" href="{{ route('admin.add-product') }}">
        <div class="d-flex align-items-center">
          <span class="nav-link-icon"><span data-feather="plus-square"></span></span>
          <span class="nav-link-text">Add Product</span>
        </div>
      </a>
    </li>

    <!-- Products -->
    <li class="nav-item">
      <a class="nav-link label-1" href="{{ route('admin.products') }}">
        <div class="d-flex align-items-center">
          <span class="nav-link-icon"><span data-feather="box"></span></span>
          <span class="nav-link-text">Products</span>
        </div>
      </a>
    </li>

    <!-- Customers -->
    <li class="nav-item">
      <a class="nav-link label-1" href="{{ route('admin.customers') }}">
        <div class="d-flex align-items-center">
          <span class="nav-link-icon"><span data-feather="users"></span></span>
          <span class="nav-link-text">Customers</span>
        </div>
      </a>
    </li>

    <!-- Customer Details -->
    <li class="nav-item">
      <a class="nav-link label-1" href="{{ route('admin.customer-details') }}">
        <div class="d-flex align-items-center">
          <span class="nav-link-icon"><span data-feather="user"></span></span>
          <span class="nav-link-text">Customer Details</span>
        </div>
      </a>
    </li>

    <!-- Orders -->
    <li class="nav-item">
      <a class="nav-link label-1" href="{{ route('admin.orders') }}">
        <div class="d-flex align-items-center">
          <span class="nav-link-icon"><span data-feather="shopping-cart"></span></span>
          <span class="nav-link-text">Orders</span>
        </div>
      </a>
    </li>

    <!-- Order Details -->
    <li class="nav-item">
      <a class="nav-link label-1" href="{{ route('admin.order-details') }}">
        <div class="d-flex align-items-center">
          <span class="nav-link-icon"><span data-feather="file-text"></span></span>
          <span class="nav-link-text">Order Details</span>
        </div>
      </a>
    </li>

  </ul>
</div>
