<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container clearfix">
                <!--Logo-->
                <!-- <div class="logo-box">
                    <div class="logo"><a href="index.html" title="Hotera - Hotel and Restaurant HTML Template"><img src="images/logo.png" alt="Hotera - Hotel and Restaurant HTML Template" title="Hotera - Hotel and Restaurant HTML Template"></a></div>
                </div> -->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                     <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span class="txt">Menu</span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="/">Home</a>
                                </li>
                                <li  class="dropdown"><a href="{{ route('rooms') }}">Rooms</a>
                                </li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="other-links clearfix">
                    <div class="info">
                       
                    </div>
                    <div class="link-box">
                        <a href="{{ route('login') }}" class="btn btn-outline btn-sm mb-5"><b>Login</b></a>
                        <a href="{{ route('register') }}" class="btn btn-outline btn-sm mb-5"><b>Register</b></a>
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">My Bookings</span></a>
                    </div>
                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>
            <div class="menu-backdrop"></div>
            <div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>
            <nav class="menu-box">
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
            <div class="nav-bottom">
                <div class="copyright">Hotera  &copy;  2020 All Right Reserved</div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->