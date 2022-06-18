@include('layouts.website.header')
@include('layouts.website.topnav')
@include('layouts.website.body')

<!-- Main Container -->
<main id="main-container">
  <div id="app">
    @yield('content')
  </div>
</main>
<!-- END Main Container -->

@include('layouts.website.footer')

