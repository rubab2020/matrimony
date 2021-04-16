@extends('layouts.web')

@section('content')
<style type="text/css">
/*body {
    background: lightgray;
}*/

/*.navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px;
}

.navbar-default .navbar-nav #user-profile {
    height: 50px;
    padding-top: 15px;
    padding-left: 58px;
}

.navbar-default .navbar-nav #user-profile img {
    height: 45px;
    width: 45px;
    position: absolute;
    top: 2px;
    left: 8px;
    padding: 1px;
}*/

#wrapper {
    margin-top: -20px;
    /*padding-top: 50px;*/
    padding-left: 0;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

@media (min-width: 992px) {
    #wrapper {
        padding-left: 225px;
    }
}

@media (min-width: 992px) {
    #wrapper #sidebar-wrapper {
        width: 225px;
    }
}

#sidebar-wrapper {
    border-right: 1px solid #e7e7e7;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 225px;
    width: 0;
    height: 100%;
    margin-left: -225px;
    overflow-y: auto;
    background: #f8f8f8;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
}

#sidebar-wrapper .sidebar-nav {
    position: absolute;
    top: 0;
    width: 225px;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
}

#sidebar-wrapper .sidebar-nav li {
    text-indent: 0;
    line-height: 45px;
}

#sidebar-wrapper .sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #428bca;
}

.sidebar-nav li:first-child a {
    background: #f4623a !important;
    color: #fff !important;
}

#sidebar-wrapper .sidebar-nav li a .sidebar-icon {
    width: 45px;
    height: 45px;
    font-size: 14px;
    padding: 15px 2px;
    display: inline-block;
    text-indent: 7px;
    margin-right: 10px;
    color: #fff;
    float: left;
}

#sidebar-wrapper .sidebar-nav li a .caret {
  position: absolute;
  right: 23px;
  top: auto;
  margin-top: 20px;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse {
    list-style: none;
    -moz-padding-start: 0;
    -webkit-padding-start: 0;
    -khtml-padding-start: 0;
    -o-padding-start: 0;
    padding-start: 0;
    padding: 0;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse li i {
    margin-right: 10px;
}

#sidebar-wrapper .sidebar-nav li ul.panel-collapse li {
    text-indent: 15px;
}

@media (max-width: 992px) {
    #wrapper #sidebar-wrapper {
        width: 45px;
    }
    #wrapper #sidebar-wrapper #sidebar #sidemenu li ul {
        position: fixed;
        left: 45px;
        margin-top: -45px;
        z-index: 1000;
        width: 200px;
        height: 0;
    }
}

.sidebar-nav li:first-child a {
    background: #3498db !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(2) a {
    background: #2980b9 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(3) a {
    background: #3498db !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(4) a {
    background: #2980b9 !important;
    color: #fff !important;
}

.sidebar-nav li:nth-child(5) a {
    background: #f4623a !important;
    color: #fff !important;
}
</style>
<div class="page-content">
    <!-- sidebar -->
	<div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="/home">
                            <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                            <span class="sidebar-title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/unlocked-profiles">
                            <span class="sidebar-icon"><i class="fa fa-user-lock"></i></span>
                            <span class="sidebar-title">Unlocked profiles</span>
                        </a>
                    </li>
                    <li>
                        <a href="/shortlisted-profiles">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Short List</span>
                        </a>
                    </li>
                    <li>
                        <a href="/settings">
                            <span class="sidebar-icon"><i class="fa fa-cogs"></i></span>
                            <span class="sidebar-title">Settings</span>
                        </a>
                    </li>
                </ul>
            </aside>            
        </div>

        <!-- content -->
        <main id="page-content-wrapper" role="main" style="padding: 20px; height: 68vh">
            <div class="row">
                <div class="col-6">
                    <form action="{{ route('customer.udpate-settings') }}" method="POST">
                        @csrf
                        <!-- change Password -->
                        <h3>Change Password</h3>
                        <div class="form-label-group">
                            <input type="password" name="current_password" id="password" class="form-control"
                                placeholder="Current Password" required minlength="8">
                            <!-- <label for="password">Old Password</label> -->
                        </div>
                        <br>
                        <div class="form-label-group">
                            <input type="password" name="new_password" id="password" class="form-control"
                                placeholder="New Password" required minlength="8">
                            <!-- <label for="password">New Password</label> -->
                        </div>
                        <br>
                        <div class="form-label-group">
                            <input type="password" name="confirm_password" id="password" class="form-control"
                                placeholder="Confirm Password" required minlength="8">
                            <!-- <label for="password">Confirm Password</label> -->
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </main>
    </div> 
</div>
@endsection