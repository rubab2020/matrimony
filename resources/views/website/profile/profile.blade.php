@extends('layouts.web')

@section('content')
<div class="page-content">
	<div class="container">
		<!-- <h3>Search Profiles</h3> -->
		<!-- breadcrumb  -->
		<!-- <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Search Profiles</li>
			  </ol>
			</nav> -->

		<div class="row">
			<!-- profile -->
			<div class="col-lg-9 col-md-8 col-12">
				<div class="cover-photo">
					<img
						src="{{asset(
                $profile->cover_photo 
                ? App\Models\Customer::getUploadPath().'/'.$profile->cover_photo
                : 'assets/web/assets/img/cover-photo.jpg'
            ) }}">
				</div>
				<div class="profile-section-card">
					<img class="profile-pic"
						src="{{asset(
	              $profile->profile_picture 
	              ? App\Models\Customer::getUploadPath().'/'.$profile->profile_picture
	              : 'assets/web/assets/img/profile-avatar.png'
	          ) }}">
					<div class="profile-name-container">
						<div class="user-name">{{ $profile->name }}</div>
						<div class="icon-block">
							<a href="#"><span class="icon"><i class="fas fa-unlock"></i></span></a>
							<a href="#"><span class="icon"><i class="fas fa-star"></i></span></a>
							<a href="sendUsModal" data-toggle="modal" data-target="#sendUsModal"><span class="icon"><i
										class="fas fa-share"></i></span></a>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>

				<!-- basic info -->
				<div class="section-card">
					<div class="row">
						<div class="col-6">
							<div class="row attribute">
								<div class="col-5 attribute-title">Name:</div>
								<div class="col-7 attribute-value">{{ ucfirst($profile->name) }}</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Age:</div>
								<div class="col-7 attribute-value">{{ $profile->age }}</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Gender:</div>
								<div class="col-7 attribute-value">{{ ucfirst($profile->gender) }}</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Height:</div>
								<div class="col-7 attribute-value"><span id="profileHeight">{{ $profile->height }}</span></div>
							</div>
						</div>
						<div class="col-6">
							<div class="row attribute">
								<div class="col-5 attribute-title">Education:</div>
								<div class="col-7 attribute-value">{{ ucfirst($profile->highest_education) }}</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Occupation:</div>
								<div class="col-7 attribute-value">{{ ucfirst($profile->occupation) }}</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Marital Status:</div>
								<div class="col-7 attribute-value">{{ ucfirst($profile->marital_status) }}</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Religion:</div>
								<div class="col-7 attribute-value">{{ ucfirst($profile->religion) }}</div>
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
                        @foreach($profile->images->get() as $image)
                            <a class="portfolio-box" href="{{ '/'.App\Models\Customer::getUploadPath().'/'.$image->image }}">
                            <img 
                                class="img-fluid"
                                src="{{ '/'.App\Models\Customer::getUploadPath().'/'.$image->image }}"
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
						{{ ucfirst($profile->about) }}
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
		                  <div class="col-7 attribute-value">{{ ucfirst($profile->marital_status) }}</div>
		              </div>
		              <div class="row attribute">
		                  <div class="col-5 attribute-title">Children:</div>
		                  <div class="col-7 attribute-value">{{ ucfirst($profile->no_of_children) }}</div>
		              </div>
		              <div class="row attribute">
		                  <div class="col-5 attribute-title">Languages:</div>
		                  <div class="col-7 attribute-value">{{ ucfirst($profile->languages) }}</div>
		              </div>
		              <div class="row attribute">
		                  <div class="col-5 attribute-title">Ethnicity:</div>
		                  <div class="col-7 attribute-value">{{ ucfirst($profile->ethnicity) }}</div>
		              </div>
		              <div class="row attribute">
		                  <div class="col-5 attribute-title">Blood Group:</div>
		                  <div class="col-7 attribute-value">{{ ucfirst($profile->blood_group) }}</div>
		              </div>
		          </div>
		          <div class="col-6">
		              <div class="row attribute">
		                  <div class="col-5 attribute-title">Religion:</div>
		                  <div class="col-7 attribute-value">{{ ucfirst($profile->religion) }}</div>
		              </div>
		              <div class="row attribute">
		                  <div class="col-5 attribute-title">Caste:</div>
		                  <div class="col-7 attribute-value">{{ ucfirst($profile->caste) }}</div>
		              </div>
		              <div class="row attribute">
		                  <div class="col-5 attribute-title">Hobbies:</div>
		                  <div class="col-7 attribute-value">{{ ucfirst($profile->hobbies) }}</div>
		              </div>
		              <div class="row attribute">
		                  <div class="col-5 attribute-title">Interest:</div>
		                  <div class="col-7 attribute-value">{{ ucfirst($profile->interest) }}</div>
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
                      <div class="col-7 attribute-value">{{ ucfirst($profile->weight) }} kg</div>
                  </div>
                  <div class="row attribute">
                      <div class="col-5 attribute-title">Body Type:</div>
                      <div class="col-7 attribute-value">{{ ucfirst($profile->body_type) }}</div>
                  </div>
                  <div class="row attribute">
                      <div class="col-5 attribute-title">Complexion:</div>
                      <div class="col-7 attribute-value">{{ ucfirst($profile->complexion) }}</div>
                  </div>
              </div>
              <div class="col-6">
                  <div class="row attribute">
                      <div class="col-5 attribute-title">Eye Color:</div>
                      <div class="col-7 attribute-value">{{ ucfirst($profile->eye_color) }}</div>
                  </div>
                  <div class="row attribute">
                      <div class="col-5 attribute-title">Hair Color:</div>
                      <div class="col-7 attribute-value">{{ ucfirst($profile->hair_color) }}</div>
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
                      <div class="col-7 attribute-value">{{ ucfirst($profile->highest_education) }}</div>
                  </div>
                  <div class="row attribute">
                      <div class="col-5 attribute-title">Occupation:</div>
                      <div class="col-7 attribute-value">{{ ucfirst($profile->occupation) }}</div>
                  </div>
              </div>
              <div class="col-6">
                  <div class="row attribute">
                      <div class="col-5 attribute-title">Annual Income:</div>
                      <div class="col-7 attribute-value">{{ ucfirst($profile->annual_income) }}</div>
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
	                        @if($profile->pre_address)
	                            {{ ucfirst($profile->pre_address) }},
	                        @endif
	                        @if($profile->pre_city)
	                            {{ ucfirst($profile->pre_city) }},
	                        @endif
	                        @if($profile->pre_district)
	                            {{ ucfirst($profile->pre_district) }},
	                        @endif
	                        @if($profile->pre_postal_code)
	                            {{ $profile->pre_postal_code }},
	                        @endif
	                        @if($profile->pre_country)
	                            {{ ucfirst($profile->pre_country) }}
	                        @endif
	                    </div>
	                </div>
	            </div>
	            <div class="col-6">
	                <div class="row attribute">
	                    <div class="col-5 attribute-title">Permanent Address:</div>
	                    <div class="col-7 attribute-value">
	                        @if($profile->per_address)
	                            {{ ucfirst($profile->per_address) }},
	                        @endif
	                        @if($profile->per_city)
	                            {{ ucfirst($profile->per_city) }},
	                        @endif
	                        @if($profile->per_district)
	                            {{ ucfirst($profile->per_district) }},
	                        @endif
	                        @if($profile->per_postal_code)
	                            {{ $profile->per_postal_code }},
	                        @endif
	                        @if($profile->per_country)
	                            {{ ucfirst($profile->per_country) }}
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
					<p style="color: gray">{{ ucfirst($profile->family_info) }}</p>
				</div>

				<br>
				<!-- preference -->
				<div class="section-card">
					<h4 class="section-title">Preference</h4>
					<div class="row">
	            <div class="col-6">
	                <div class="row attribute">
	                    <div class="col-5 attribute-title">Age Range:</div>
	                    <div class="col-7 attribute-value">{{ $profile->expect_age_start }} - {{ $profile->expect_age_end }}</div>
	                </div>
	                <div class="row attribute">
	                    <div class="col-5 attribute-title">Height Rage:</div>
	                    <div class="col-7 attribute-value">
	                        <span id="profileHeightStart">{{ $profile->expect_height_start }}</span> - <span id="profileHeightEnd">{{ $profile->expect_height_end }}</span>
	                    </div>
	                </div>
	                <div class="row attribute">
	                    <div class="col-5 attribute-title">Disctrict:</div>
	                    <div class="col-7 attribute-value">{{ ucfirst($profile->expect_districts) }}</div>
	                </div>
	            </div>
	            <div class="col-6">
	                <div class="row attribute">
	                    <div class="col-5 attribute-title">Profession:</div>
	                    <div class="col-7 attribute-value">{{ ucfirst($profile->expect_occupations) }}</div>
	                </div>
	                <div class="row attribute">
	                    <div class="col-5 attribute-title">Education:</div>
	                    <div class="col-7 attribute-value">{{ ucfirst($profile->expect_educations) }}</div>
	                </div>
	                <div class="row attribute">
	                    <div class="col-5 attribute-title">Special preference:</div>
	                    <div class="col-7 attribute-value">{{ ucfirst($profile->expect_special_preference) }}</div>
	                </div>
	            </div>
	        </div>
				</div>
			</div>

			<!-- simmilar profiles -->
			<div class="col-lg-3 col-md-4 col-12">
				<h4>Simmilar Profiles</h4>
				<div class="list-group">
					<!-- profile -->
					<a href="#" class="list-group-item list-group-item-action profiles">
						<div class="row">
							<div class="col-4">
								<img class="profile-pic-sm"
									src="https://images.unsplash.com/photo-1484240077054-d59279308559?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
							</div>
							<div class="col-8">
								<div class="account-id">Sarah Ali</div>
								<div>20 years, 5'2"</div>
								<div>Software Engineer, BSC</div>
								<div>Dhaka, Bangladesh</div>
							</div>
						</div>
					</a>

					<!-- profile -->
					<a href="#" class="list-group-item list-group-item-action profiles">
						<div class="row">
							<div class="col-4">
								<img class="profile-pic-sm"
									src="https://images.unsplash.com/photo-1494898732449-aa3060d96fbd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
							</div>
							<div class="col-8">
								<div class="account-id">Sarah Ali</div>
								<div>20 years, 5'2"</div>
								<div>Software Engineer, BSC</div>
								<div>Dhaka, Bangladesh</div>
							</div>
						</div>
					</a>

					<!-- profile -->
					<a href="#" class="list-group-item list-group-item-action profiles">
						<div class="row">
							<div class="col-4">
								<img class="profile-pic-sm"
									src="https://images.unsplash.com/photo-1484240077054-d59279308559?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
							</div>
							<div class="col-8">
								<div class="account-id">Sarah Ali</div>
								<div>20 years, 5'2"</div>
								<div>Software Engineer, BSC</div>
								<div>Dhaka, Bangladesh</div>
							</div>
						</div>
					</a>

					<!-- profile -->
					<a href="#" class="list-group-item list-group-item-action profiles">
						<div class="row">
							<div class="col-4">
								<img class="profile-pic-sm"
									src="https://images.unsplash.com/photo-1494898732449-aa3060d96fbd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
							</div>
							<div class="col-8">
								<div class="account-id">Sarah Ali</div>
								<div>20 years, 5'2"</div>
								<div>Software Engineer, BSC</div>
								<div>Dhaka, Bangladesh</div>
							</div>
						</div>
					</a>

					<!-- profile -->
					<a href="#" class="list-group-item list-group-item-action profiles">
						<div class="row">
							<div class="col-4">
								<img class="profile-pic-sm"
									src="https://images.unsplash.com/photo-1484240077054-d59279308559?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
							</div>
							<div class="col-8">
								<div class="account-id">Sarah Ali</div>
								<div>20 years, 5'2"</div>
								<div>Software Engineer, BSC</div>
								<div>Dhaka, Bangladesh</div>
							</div>
						</div>
					</a>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Send Us Modal -->
<div class="modal fade" id="sendUsModal" tabindex="-1" role="dialog" aria-labelledby="sendUsModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="sendUsModalLabel">Share this Profile</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" id="submitform" action="{{ url()->route('shareprofile.share') }}"
					method="get">
					<ul>
						<li>
							Please Input a Phone Number to share:
							<div class="form-label-group">
								<input type="tel" name="phoneNumber" id="phoneNumber" class="form-control"
									placeholder="" pattern="[0-9]{11}" required autofocus>
							</div>
						</li>
						<li>
							Phone number format: 01714047395
						</li>
						<button type="submit" class="btn btn-primary btn-sm">Share Profile</button>
					</ul>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endsection