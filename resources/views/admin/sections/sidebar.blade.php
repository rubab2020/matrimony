<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{ url('/') }}" class="site_title">
        {{-- <center>
          <img src="{{ url('assets/admin/images/logo.png') }}" alt="..." style="height: 40px;">
        </center>
        <img src="{{ url('assets/admin/images/nesco_logo.png') }}" alt="..." style="height: 40px;"> --}}
        <span>{{ $title ?? env('APP_NAME') }}</span>
      </a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        {{-- <img src="{{ url('assets/admin/images/nesco_logo.png') }}" alt="..." class="img-circle profile_img"> --}}
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li><a href="#!"><i class="fa fa-home"></i> Home</a></li>
          @can("User Management")
          <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ route('admin.users.index') }}"> All Users</a></li>
              <li><a href="{{ route('admin.users.create') }}"> Creat Users</a></li>
            </ul>
          </li>
          @endcan
          @can("Order Management")
          <li><a><i class="fa fa-file"></i> Orders <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#!">Orders</a></li>
            </ul>
          </li>
          @endcan
          @can("Customer Management")
          <li><a><i class="fa fa-users"></i> Customers <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="#!">Customers</a></li>
            </ul>
          </li>
          @endcan
          @can("Setting Management")
          <li><a href="{{ route('admin.setting.index') }}"><i class="fa fa-cog"></i> Settings</a></li>
          @endcan
          @can("Gallery Management")
          <li><a href="{{ route('admin.gallaries.index') }}"><i class="fa fa-cog"></i> gallaries</a></li>
          @endcan
          @can("Page Management")
          <li><a href="{{ route('admin.pages.index') }}"><i class="fa fa-cog"></i> Pages</a></li>
          @endcan
          @can("Profile Management")
          <li><a href="{{ route('admin.pages.index') }}"><i class="fa fa-cog"></i> Profile Management</a></li>
          @endcan
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->
  </div>
</div>