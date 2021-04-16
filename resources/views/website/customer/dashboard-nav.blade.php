<aside id="sidebar">
    <ul id="sidemenu" class="sidebar-nav">
        <li>
            <a href="/home">
                <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                @if(Request::is('home'))
                    <span class="sidebar-title active">Home</span>
                @else
                    <span class="sidebar-title">Home</span>
                @endif
            </a>
        </li>
        <li>
            <a href="/unlocked-profiles">
                <span class="sidebar-icon"><i class="fa fa-user-lock"></i></span>
                @if(Request::is('unlocked-profiles'))
                    <span class="sidebar-title active">Unlocked profiles</span>
                @else
                    <span class="sidebar-title">Unlocked profiles</span>
                @endif
            </a>
        </li>
        <li>
            <a href="/shortlisted-profiles">
                <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                @if(Request::is('shortlisted-profiles'))
                    <span class="sidebar-title active">Short List</span>
                @else
                    <span class="sidebar-title">Short List</span>
                @endif
            </a>
        </li>
        <li>
            <a href="/settings">
                <span class="sidebar-icon"><i class="fa fa-cogs"></i></span>
                @if(Request::is('settings'))
                    <span class="sidebar-title active">Settings</span>
                @else
                    <span class="sidebar-title">Settings</span>
                @endif
            </a>
        </li>
    </ul>
</aside>