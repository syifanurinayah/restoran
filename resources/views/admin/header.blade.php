<header class="main-header">
    <a href="#" class="logo">
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> 

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              {{-- <img src="{{asset('image/user.png') }}" class="user-image" class="img-circle" alt="User Image">
                <span class="hidden-xs">{{ auth()->guard('admin')->check() ? auth()->guard()->user()->name : 'Account' }}</span> --}}
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                {{-- <img src="{{asset('image/user.png') }}" class="user-image" class="img-circle" alt="User Image">
                  <p>
                  {{ auth()->guard('admin')->check() ? auth()->guard()->user()->name : 'Account' }}
                  </p> --}}
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                {{-- <div class="pull-right">
                  <a href="{{ url('/admin/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div> --}}
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>