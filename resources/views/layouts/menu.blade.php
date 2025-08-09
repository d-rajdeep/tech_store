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
                                <li class="nav-item">
                                    <a href="{{ route('index') }}" class="active"
                                        aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" aria-label="Toggle navigation">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('shop') }}" aria-label="Toggle navigation">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('product-details') }}" aria-label="Toggle navigation">Product
                                        Details</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Categories
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ url('category/smart-phone') }}">Smart
                                                Phone</a></li>
                                        <li><a class="dropdown-item" href="{{ url('category/digital-watch') }}">Digital
                                                Watch</a></li>
                                        <li><a class="dropdown-item" href="{{ url('category/earphone') }}">Earphone</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ url('category/laptop') }}">Laptop</a></li>
                                        <li><a class="dropdown-item" href="{{ url('category/smart-tv') }}">Smart TV</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ url('category/home-appliances') }}">Home
                                                Appliances</a></li>
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
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
