@extends('layouts.web')

@section('content')
<link href="{{ asset('assets/web/css/profile.css') }}" rel="stylesheet" />

<link href="{{ asset('assets/web/css/customer-dashboard-nav.css') }}" rel="stylesheet" />

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
            @include('website.customer.dashboard-nav')       
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