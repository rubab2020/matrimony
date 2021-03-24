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
                        <a href="/profiles/shortlisted">
                            <span class="sidebar-icon"><i class="fa fa-user-lock"></i></span>
                            <span class="sidebar-title">Unlocked Profiles</span>
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
            <!-- <h3>Home</h3> -->
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
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($shortlists as $shortlist)
                            <tr>
                                <td>
                                    <img 
                                        class="profile-pic"
                                        src="{{asset(
                                            $shortlist->profile->profile_picture 
                                            ? App\Models\Customer::getUploadPath().'/'.$shortlist->profile->profile_picture
                                            : 'assets/web/assets/img/profile-avatar.png'
                                        ) }}"
                                    >
                                    {{ $shortlist->profile->name }}</td>
                                <td>{{ $shortlist->profile->profile_id }}</td>
                                <td>
                                    <!-- delete -->
                                    <form action="{{ url('shortlist/delete', $shortlist->id)}}" method="POST">
                                        @method('DELETE')
                                    @csrf
                                        <button type="submit" class="btn btn-default float-left" style="margin-left: 10px;">
                                            <i class="ti-trash"></i> 
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