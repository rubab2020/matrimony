<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img class="img-circle" width="2rem" height="2rem" style="max-width: 100%; object-fit: cover;"
              src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            <strong>{{ auth()->user()->name }}</strong>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li>
              <a href="{{ url('/user/profile') }}">
                <span>Profile</span>
              </a>
            </li>
            <li>
              <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->