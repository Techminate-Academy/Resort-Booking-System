@include('layouts.user.header')
@include('layouts.user.sidenav')

@include('layouts.user.topnav')

<!-- Main Container -->
<main id="main-container">
  <div id="app">
    @yield('content')
  </div>
</main>
<!-- END Main Container -->

@include('layouts.user.footer')
