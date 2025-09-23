<!-- Start Header Area -->
<header class="header navbar-area">
    <!-- Start Header Middle -->
    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">

                <!-- Logo -->
                <div class="col-lg-3 col-md-3 col-7">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo">
                    </a>
                </div>

                <!-- Search Bar -->
                <div class="col-lg-5 col-md-7 d-xs-none">
                    <div class="main-menu-search">
                        <div class="navbar-search search-style-5">
                            <div class="search-select">
                                <div class="select-position">
                                    <select id="select1">
                                        <option selected>All</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-input">
                                <input type="text" placeholder="Search">
                            </div>
                            <div class="search-btn">
                                <button><i class="lni lni-search-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cart & Account -->
                <div class="col-lg-4 col-md-2 col-5">
                    <div class="middle-right-area d-flex align-items-center justify-content-end">

                        <!-- Cart -->
                        <div class="navbar-cart d-flex align-items-center me-4">
                            <div class="cart-items">
                                <a href="javascript:void(0)" class="main-btn">
                                    <i class="lni lni-cart"></i>
                                    <span class="total-items">{{ count(session('cart', [])) }}</span>
                                </a>
                                <!-- Shopping Item -->
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{ count(session('cart', [])) }} Item(s)</span>
                                        <a href="{{ route('cart.index') }}">View Cart</a>
                                    </div>

                                    <ul class="shopping-list">
                                        @php $total = 0; @endphp
                                        @forelse (session('cart', []) as $id => $item)
                                            @php $total += $item['price'] * $item['quantity']; @endphp
                                            <li>
                                                <a href="{{ route('cart.remove', $id) }}" class="remove"
                                                    title="Remove this item">
                                                    <i class="lni lni-close"></i>
                                                </a>
                                                <div class="cart-img-head">
                                                    <a class="cart-img" href="{{ route('product.show', $id) }}">
                                                        <img src="{{ $item['image'] ? asset('storage/' . $item['image']) : asset('assets/images/no-image.png') }}"
                                                            alt="{{ $item['name'] }}">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h4><a href="{{ route('product.show', $id) }}">{{ $item['name'] }}</a>
                                                    </h4>
                                                    <p class="quantity">{{ $item['quantity'] }}x -
                                                        <span class="amount">₹{{ number_format($item['price'], 2) }}</span>
                                                    </p>
                                                </div>
                                            </li>
                                        @empty
                                            <li>
                                                <p class="text-muted text-center">Your cart is empty</p>
                                            </li>
                                        @endforelse
                                    </ul>

                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">₹{{ number_format($total, 2) }}</span>
                                        </div>
                                        <div class="button">
                                            <a href="{{ route('cart.index') }}" class="btn btn-primary">View Cart</a>
                                        </div>
                                        <div class="button mt-2">
                                            <a href="{{ route('customer.checkout') }}"
                                                class="btn btn-success">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Shopping Item -->
                            </div>
                        </div>

                        <!-- My Account -->
                        <div class="nav-account">
                            <a href="{{ route('customer.login') }}" class="account-link">
                                <i class="lni lni-user"></i>
                                <span>My Account</span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header Middle -->

    <!-- Start Header Bottom -->
    <div class="container-fluid bg-white sticky-top shadow-sm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg navbar-light bg-white">
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
                                <!-- Main Menu -->
                                <ul id="nav" class="navbar-nav me-auto align-items-center">
                                    <li class="nav-item">
                                        <a href="{{ route('index') }}" class="active">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('about') }}">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('shop') }}">Shop</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Bottom -->
</header>
<!-- End Header Area -->

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

    .account-link {
        display: flex;
        align-items: center;
        color: #333;
        text-decoration: none;
        padding: 8px 15px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .account-link:hover {
        background-color: #f8f9fa;
        color: #0167f3;
    }

    .account-link i {
        margin-right: 5px;
        font-size: 18px;
    }

    .nav-account {
        margin-left: 15px;
    }

    /* Cart dropdown styles */
    .shopping-item {
        position: absolute;
        top: 100%;
        right: 0;
        width: 300px;
        background: white;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        display: none;
    }

    .cart-items:hover .shopping-item {
        display: block;
    }

    .shopping-list {
        max-height: 200px;
        overflow-y: auto;
    }

    .shopping-list li {
        display: flex;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #eee;
    }

    .shopping-list .remove {
        color: #ff0000;
        margin-right: 10px;
    }

    .cart-img-head img {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 3px;
    }

    .shopping-list .content {
        flex: 1;
        margin-left: 10px;
    }

    .shopping-list .content h4 {
        margin: 0;
        font-size: 14px;
    }

    .shopping-list .content p {
        margin: 0;
        font-size: 12px;
    }

    .dropdown-cart-header {
        display: flex;
        justify-content: space-between;
        padding: 10px;
        background: #f8f9fa;
        border-bottom: 1px solid #ddd;
    }

    .bottom {
        padding: 10px;
    }

    .bottom .total {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .bottom .button .btn {
        width: 100%;
        text-align: center;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .d-xs-none {
            display: none !important;
        }

        .middle-right-area {
            justify-content: flex-end !important;
        }

        .navbar-cart {
            margin-right: 10px !important;
        }

        .nav-account {
            margin-left: 10px !important;
        }

        .account-link span {
            display: none;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
