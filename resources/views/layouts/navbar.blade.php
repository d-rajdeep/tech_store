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

                <!-- Cart & Follow Us -->
                <div class="col-lg-4 col-md-2 col-5">
                    <div class="middle-right-area d-flex align-items-center justify-content-end">

                        <!-- Cart & Wishlist -->
                        <div class="navbar-cart d-flex align-items-center me-4">
                            <div class="wishlist me-3">
                                <a href="javascript:void(0)">
                                    <i class="lni lni-heart"></i>
                                    <span class="total-items">0</span>
                                </a>
                            </div>
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
                                            <a href="{{ route('customer.checkout') }}" class="btn btn-success">Checkout</a>
                                        </div>
                                    </div>
                                </div>

                                <!--/ End Shopping Item -->
                            </div>
                        </div>

                        <!-- Follow Us -->
                        <div class="nav-social d-flex align-items-center">
                            <h5 class="title mb-0 me-2">Follow Us:</h5>
                            <ul class="d-flex mb-0">
                                <li class="me-2">
                                    <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                                </li>
                                <li class="me-2">
                                    <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                                </li>
                                <li class="me-2">
                                    <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Header Middle -->
