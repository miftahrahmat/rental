<!-- Top Navigation Bar -->
<div class="container">

    <!-- Only visible on smartphones, menu toggle -->
    <ul class="nav navbar-nav">
        <li class="nav-toggle"><a href="javascript:void(0);" title=""><i class="icon-reorder"></i></a></li>
    </ul>

    <!-- Logo -->
    <a class="navbar-brand" href="index.html">
      <img src="{{ asset('assets/img/logo.png')}}" alt="logo" />
        <strong>Rental</strong>MvP
    </a>
    <!-- /logo -->

    <!-- Top Right Menu -->
    <ul class="nav navbar-nav navbar-right">
        <!-- User Login Dropdown -->
        <li class="dropdown user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img class="img-circle" alt="" src="{{ asset('assets/img/demo/avatar-1.jpg') }}" style="width: 50px; height: 50px;"/>
                <span class="username">{{ Auth::user()->name }}</span>
                <i class="icon-caret-down small"></i>
            </a>
            <ul class="dropdown-menu">
            <li><a href="pages_user_profile.html"><i class="icon-user"></i> My Profile</a></li>
                <li><a href="pages_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
                <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                <li class="divider"></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </ul>
        </li>
        <!-- /user login dropdown -->
    </ul>
    <!-- /Top Right Menu -->
</div>
<!-- /top navigation bar -->