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
            <h3>Unlocked Profiles</h3>
            <!-- breadcrumb  -->
            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb"> -->
                    <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                    <!-- <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav> -->

            <div class="row">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Num of Profiles</th>
                                <th>Payment Status</th>
                                <th>Profile IDs</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->number_of_profile }}</td>
                                <td>{{ $order->payment_status }}</td>
                                <td>
                                    @foreach($order->unlockedProfiles as $unlockedProfile)
                                        @if($unlockedProfile->is_approved)
                                            <i class="fas fa-unlock"></i>
                                        @else
                                            <i class="fas fa-lock"></i>
                                        @endif
                                        
                                        <a href="{{ url('/profiles/'.$unlockedProfile->profile->profile_id) }}" target="_blank">
                                            <img 
                                                class="profile-pic"
                                                src="{{asset(
                                                    $unlockedProfile->profile->profile_picture
                                                    ? App\Models\Customer::getUploadPath().'/'.$unlockedProfile->profile->profile_picture
                                                    : 'assets/web/assets/img/profile-avatar.png'
                                                ) }}"
                                                style="width: auto; height: 30px;"
                                            >
                                            {{ $unlockedProfile->profile->name }}
                                        </a>
                                        @if($unlockedProfile->is_approved && $order->payment_status === "PAID")
                                            |
                                            Email: {{ $unlockedProfile->profile->email }}
                                            |
                                            Phone: {{ $unlockedProfile->profile->phone }}
                                        @endif
                                        <br>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div> 
</div>
@endsection