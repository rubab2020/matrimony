@extends('layouts.web')

@section('content')
<link href="{{ asset('assets/web/css/profile.css') }}" rel="stylesheet" />

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

<style type="text/css">
	.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
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

			<div class="container">
		    <div class="row">
		    <div class="col-md-3">
		      <div class="card-counter primary">
		        <i class="fa fa-star"></i>
		        <span class="count-numbers">12</span>
		        <span class="count-name">Shortlisted Profiles</span>
		      </div>
		    </div>

		    <div class="col-md-3">
		      <div class="card-counter info">
		        <i class="fa fa-circle-notch"></i>
		        <span class="count-numbers">35</span>
		        <span class="count-name">Pending Profiles</span>
		      </div>
		    </div>

		    <div class="col-md-3">
		      <div class="card-counter success">
		        <i class="fa fa-check"></i>
		        <span class="count-numbers">6875</span>
		        <span class="count-name">Accepted Profiles</span>
		      </div>
		    </div>

		    <div class="col-md-3">
		      <div class="card-counter danger">
		        <i class="fa fa-times"></i>
		        <span class="count-numbers">599</span>
		        <span class="count-name">Rejected Profiles</span>
		      </div>
		    </div>
		  </div>

          <hr>

            <!-- profile -->
            <div class="col-12">
                <div class="cover-photo">
                    <img
                        src="{{asset(
                            Auth::user()->cover_photo 
                            ? App\Models\Customer::getUploadPath().'/'.Auth::user()->cover_photo
                            : 'assets/web/assets/img/cover-photo.jpg'
                        ) }}"
                >
                </div>
                <div class="profile-section-card">
                    <img 
                        class="profile-pic"
                        src="{{asset(
                            Auth::user()->profile_picture 
                            ? App\Models\Customer::getUploadPath().'/'.Auth::user()->profile_picture
                            : 'assets/web/assets/img/profile-avatar.png'
                        ) }}"
                    >
                    <div class="profile-name-container">
                        <div class="user-name">{{ Auth::user()->name }}</div>
                        <!-- <div class="icon-block">
                            <a href="#"><span class="icon"><i class="fas fa-unlock"></i></span></a>
                            <a href="#"><span class="icon"><i class="fas fa-star"></i></span></a>
                            <a href="#"><span class="icon"><i class="fas fa-share"></i></span></a>
                        </div> -->
                        <div style="clear: both;"></div>
                    </div>
                </div>

                <!-- basic info -->
                <div class="section-card">
                    <div class="row">
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Name:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->name) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Age:</div>
                                <div class="col-7 attribute-value">{{ Auth::user()->age }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Gender:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->gender) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Height:</div>
                                <div class="col-7 attribute-value"><span class="profileHeight">{{ Auth::user()->height }}</span></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Education:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->highest_education) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Occupation:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->occupation) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Marital Status:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->marital_status) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Religion:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->religion) }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- gallries -->
                <div class="section-card">
                    <!-- gallaries-->
                    <div id="portfolio">
                        <div class="container-fluid p-0">
                            <div class="row no-gutters">
                                @foreach(Auth::user()->images->get() as $image)
                                    <a class="portfolio-box" href="{{ App\Models\Customer::getUploadPath().'/'.$image->image }}">
                                    <img 
                                        class="img-fluid"
                                        src="{{ App\Models\Customer::getUploadPath().'/'.$image->image }}"
                                        alt="" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <!-- intro -->
                <div class="section-card">
                    <h4 class="section-title">Intro</h4>
                    <p style="color: gray">
                        {{ ucfirst(Auth::user()->about) }}
                    </p>
                </div>

                <br>
                <!-- personal info -->
                <div class="section-card">
                    <h4 class="section-title">Personal Info</h4>

                    <div class="row">
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Marital Status:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->marital_status) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Children:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->no_of_children) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Languages:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->languages) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Ethnicity:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->ethnicity) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Blood Group:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->blood_group) }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Religion:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->religion) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Caste:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->caste) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Hobbies:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->hobbies) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Interest:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->interest) }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <!-- physical attributes -->
                <div class="section-card">
                    <h4 class="section-title">Physical Attributes</h4>

                    <div class="row">
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Weight:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->weight) }} kg</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Body Type:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->body_type) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Complexion:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->complexion) }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Eye Color:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->eye_color) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Hair Color:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->hair_color) }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <!-- qualification -->
                <div class="section-card">
                    <h4 class="section-title">Qualification</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Education:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->highest_education) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Occupation:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->occupation) }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Annual Income:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->annual_income) }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <!-- adresses -->
                <div class="section-card">
                    <h4 class="section-title">Addresses</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Present Address:</div>
                                <div class="col-7 attribute-value">
                                    @if(Auth::user()->pre_address)
                                        {{ ucfirst(Auth::user()->pre_address) }},
                                    @endif
                                    @if(Auth::user()->pre_city)
                                        {{ ucfirst(Auth::user()->pre_city) }},
                                    @endif
                                    @if(Auth::user()->pre_district)
                                        {{ ucfirst(Auth::user()->pre_district) }},
                                    @endif
                                    @if(Auth::user()->pre_postal_code)
                                        {{ Auth::user()->pre_postal_code }},
                                    @endif
                                    @if(Auth::user()->pre_country)
                                        {{ ucfirst(Auth::user()->pre_country) }}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Permanent Address:</div>
                                <div class="col-7 attribute-value">
                                    @if(Auth::user()->per_address)
                                        {{ ucfirst(Auth::user()->per_address) }},
                                    @endif
                                    @if(Auth::user()->per_city)
                                        {{ ucfirst(Auth::user()->per_city) }},
                                    @endif
                                    @if(Auth::user()->per_district)
                                        {{ ucfirst(Auth::user()->per_district) }},
                                    @endif
                                    @if(Auth::user()->per_postal_code)
                                        {{ Auth::user()->per_postal_code }},
                                    @endif
                                    @if(Auth::user()->per_country)
                                        {{ ucfirst(Auth::user()->per_country) }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <!-- family info -->
                <div class="section-card">
                    <h4 class="section-title">Family Info</h4>
                    <p style="color: gray">{{ ucfirst(Auth::user()->family_info) }}</p>
                </div>

                <br>
                <!-- preference -->
                <div class="section-card">
                    <h4 class="section-title">Preference</h4>
                    <div class="row">
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Age Range:</div>
                                <div class="col-7 attribute-value">{{ Auth::user()->expect_age_start }} - {{ Auth::user()->expect_age_end }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Height Rage:</div>
                                <div class="col-7 attribute-value">
                                    <span class="profileHeight">{{ Auth::user()->expect_height_start }}</span> - <span class="profileHeight">{{ Auth::user()->expect_height_end }}</span>
                                </div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Disctrict:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->expect_districts) }}</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Profession:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->expect_occupations) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Education:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->expect_educations) }}</div>
                            </div>
                            <div class="row attribute">
                                <div class="col-5 attribute-title">Special preference:</div>
                                <div class="col-7 attribute-value">{{ ucfirst(Auth::user()->expect_special_preference) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </main>
    </div> 
</div>
@endsection