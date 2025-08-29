<!doctype html>
<html lang="en">
<!--begin::Head-->
@include('admin.layouts.head')
<!--end::Head-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        <!--begin::Header-->
        @include('admin.layouts.nav')
        <!--end::Header-->

        <!--begin::Sidebar-->
        @include('admin.layouts.sidebar')
        <!--end::Sidebar-->

        <!--begin::App Main-->
        <main class="app-main">

            <!--begin::App Content Header-->
            @php
                $excludedRoutes = ['newuser']; // add more route names here if needed
            @endphp

            @unless (in_array(Route::currentRouteName(), $excludedRoutes))
                <div class="app-content-header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h3 class="mb-0">
                                    @yield('page-title', 'Dashboard')
                                </h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        @yield('page-title', 'Dashboard')
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            @endunless
            <!--end::App Content Header-->

            <!--begin::App Content-->
            <div class="app-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!--end::App Content-->
        </main>
        <!--end::App Main-->

        <!--begin::Footer-->
        @include('admin.layouts.footer')
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->

    <!--begin::Scripts-->
    @include('admin.layouts.script')
    <!--end::Scripts-->
</body>

</html>
