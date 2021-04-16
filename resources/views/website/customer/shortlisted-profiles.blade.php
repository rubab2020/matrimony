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
            <h3>Shortlisted Profiles</h3>
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
                                <th>Name</th>
                                <th>Profile ID</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($shortlists as $shortlist)
                            <tr>
                                <td>
                                    <a href="{{ url('/profiles/'.$shortlist->profile->profile_id) }}" target="_blank">
                                        <img 
                                            class="profile-pic"
                                            src="{{asset(
                                                $shortlist->profile->profile_picture 
                                                ? App\Models\Customer::getUploadPath().'/'.$shortlist->profile->profile_picture
                                                : 'assets/web/assets/img/profile-avatar.png'
                                            ) }}"
                                            style="width: auto; height: 30px;"
                                        >
                                        {{ $shortlist->profile->name }}
                                    </a>
                                </td>
                                <td>{{ $shortlist->profile->profile_id }}</td>
                                <td>{{ $shortlist->profile->age }}</td>
                                <td>{{ $shortlist->profile->gender }}</td>
                                <td>
                                    <!-- delete -->
                                    <form action="{{ url('shortlist/delete', $shortlist->id)}}" method="POST">
                                        <!-- @method('DELETE') -->
                                        @csrf
                                        <button type="submit" class="btn btn-default float-left" style="margin-left: 10px;">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </form>
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