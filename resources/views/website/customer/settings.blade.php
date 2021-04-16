@extends('layouts.web')

@section('content')
<link href="{{ asset('assets/web/css/customer-dashboard-nav.css') }}" rel="stylesheet" />

<div class="page-content">
    <!-- sidebar -->
	<div id="wrapper">
        <div id="sidebar-wrapper">
            @include('website.customer.dashboard-nav')       
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