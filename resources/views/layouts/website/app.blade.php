@include('layouts.website.header')
@include('layouts.website.topnav')
@include('layouts.website.body')

<!-- Main Container -->
    @yield('content')
<!-- END Main Container -->

@include('layouts.website.footer')

