<!-- Start Header Bottom -->
<div class="container-fluid bg-white sticky-top shadow-sm">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="nav-inner">
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
                        <!-- Mobile Menu Button -->
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <!-- Navbar Content -->
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <!-- Left Menu -->
                            <ul id="nav" class="navbar-nav me-auto align-items-center">

                                <div class="mega-category-menu">
                                    <span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
                                    <ul class="sub-category">
                                        <li><a href="product-grids.html">Smart Phone</a></li>
                                        <li><a href="product-grids.html">Digital Watch</a></li>
                                        <li><a href="product-grids.html">Earphone</a></li>
                                        <li><a href="product-grids.html">Laptop</a></li>
                                        <li><a href="product-grids.html">Smart TV</a></li>
                                        <li><a href="product-grids.html">Home Appliances</a></li>
                                    </ul>
                                </div>

                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="active"
                                        aria-label="Toggle navigation">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                        data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                    <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="{{ route('about') }}">About Us</a></li>
                                        <li class="nav-item"><a href="{{ route('product-details') }}">Product Details</a>
                                        <li class="nav-item"><a href="{{ route('cart') }}">Cart</a></li>
                                        <li class="nav-item"><a href="{{ route('checkout') }}">Checkout</a></li>
                                        <li class="nav-item"><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('shop') }}" aria-label="Toggle navigation">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" aria-label="Toggle navigation"></a>
                                </li>
                            </ul>

                            <!-- Right Buttons -->
                            <div class="d-flex gap-2">
                                <a href="/login" class="btn nav-btn">Login</a>
                                <a href="/register" class="btn nav-btn">Register</a>
                            </div>
                        </div>

                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Bottom -->

<style>
    .nav-btn {
        border: 2px solid #0167f3;
        padding: 6px 20px;
        border-radius: 4px;
        color: #0167f3;
        font-weight: 500;
        line-height: 1.5;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .nav-btn:hover {
        background-color: #0167f3;
        color: #fff;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>