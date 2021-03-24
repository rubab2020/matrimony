@extends('layouts.web')

@section('content')
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
                        <a href="/orders">
                            <span class="sidebar-icon"><i class="fa fa-user-lock"></i></span>
                            <span class="sidebar-title">Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="/profiles/unlocked">
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
                <div class="col-12">
                    <form action="{{ route('customer.udpate-settings') }}" method="POST">
                        @csrf
                        <!-- change Password -->
                        <p>Change Password</p>
                        <div class="form-label-group">
                            <input type="password" name="old_password" id="password" class="form-control"
                                placeholder="Old Password" required minlength="8">
                            <label for="password">Old Password</label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" name="new_password" id="password" class="form-control"
                                placeholder="New Password" required minlength="8">
                            <label for="password">New Password</label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" name="confirm_password" id="password" class="form-control"
                                placeholder="Confirm Password" required minlength="8">
                            <label for="password">Confirm Password</label>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div> 
</div>
@endsection