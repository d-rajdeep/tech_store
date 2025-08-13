<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

@include('admin.layouts.head')

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
      <script>
        var navbarStyle = window.config.config.phoenixNavbarStyle;
        if (navbarStyle && navbarStyle !== 'transparent') {
          document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
        }
      </script>


      @include('admin.layouts.sidebar')

      @include('admin.layouts.topbar')

     @yield('main-content')

        @include('admin.layouts.script')
</body>

</html>