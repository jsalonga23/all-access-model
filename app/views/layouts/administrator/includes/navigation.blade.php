
  <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::to('data/dashboard') }}">
                    <img src="{{asset('assets/images/logo.png') }}" alt="Outlet" width="90%" />
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li>
                <div class="user-active">Hello! {{ Auth::user()->firstname }}</div> 
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{URL::to('data/users/profile')}}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="{{URL::to('data/users/settings')}}"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ URL::to('data/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                    <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        @if (AUTH::User()->role == 10)
                            <li><a href="{{ URL::to('data/dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li><a href="{{ URL::to('data/events') }}"><i class="fa fa-cogs fa-fw"></i> Manage Events</a></li>
                            {{-- <li><a href="{{ URL::to('data/sponsors') }}"><i class="fa fa-envelope" aria-hidden="true"></i> Manage Sponsors</a></li> --}}
                            <li><a href="{{ URL::to('data/members') }}"><i class="fa fa-user" aria-hidden="true"></i> Manage Members</a></li>
                            <li><a href="{{ URL::to('data/committee') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Manage Committee</a></li>

                            <li><a href="{{ URL::to('data/announcement') }}"><i class="fa fa-bullhorn" aria-hidden="true"></i> Annoucement</a></li>
                            
                        @elseif(AUTH::User()->role == 2)
                            <li><a href="{{ URL::to('data/dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                            <li><a href="{{ URL::to('data/events') }}"><i class="fa fa-cogs fa-fw"></i> Manage Events</a></li>
                            {{-- <li><a href="{{ URL::to('data/sponsors') }}"><i class="fa fa-envelope" aria-hidden="true"></i> Manage Sponsors</a></li> --}}
                            <li><a href="{{ URL::to('data/announcement') }}"><i class="fa fa-user" aria-hidden="true"></i> Annoucement</a></li>

                        @else 
                            <li><a href="{{ URL::to('data/events') }}"><i class="fa fa-cogs fa-fw"></i> Manage Events</a></li>
                        @endif
                     
                        <li><a href="{{ URL::to('data/logout') }}"><i class="fa fa-power-off fa-fw"></i> Logout</a></li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        <!-- /.navbar-static-side -->
        </nav>