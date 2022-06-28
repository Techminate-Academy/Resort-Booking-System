 <!-- Sidebar -->
<nav id="sidebar" aria-label="Main Navigation">
  <!-- Side Header -->
  <div class="content-header bg-white-5">
      <!-- Logo -->
      <a class="font-w600 text-dual" href="index.html">
          <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
          </span>
          <span class="smini-hide font-size-h5 tracking-wider">
              User <span class="font-w400">Panel</span>
          </span>
      </a>
      <!-- END Logo -->

      <!-- Extra -->
      <div>
          <!-- Close Sidebar, Visible only on mobile screens -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
              <i class="fa fa-fw fa-times"></i>
          </a>
          <!-- END Close Sidebar -->
      </div>
      <!-- END Extra -->
  </div>
  <!-- END Side Header -->

  <!-- Sidebar Scrolling -->
  <div class="js-sidebar-scroll">
      <!-- Side Navigation -->
      <div class="content-side">
          <ul class="nav-main">
            <li class="nav-main-heading">Bookings</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon fab fa-opencart"></i>
                      <span class="nav-main-link-name">Your Bookings</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="{{ route('showBookings') }}">
                              <span class="nav-main-link-name">Booking List</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="{{ route('rooms') }}">
                              <span class="nav-main-link-name">View Rooms</span>
                          </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-main-heading">Exit Section</li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                        <i class="nav-main-link-icon si si-logout"></i>
                        <span class="nav-main-link-name">Log Out</span>
                    </a>
                </li>
          </ul>
      </div>
      <!-- END Side Navigation -->
  </div>
  <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->