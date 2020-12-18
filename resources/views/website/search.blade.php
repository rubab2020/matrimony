@extends('layouts.web')

@section('content')
<div class="page-content">
	<div class="container">
		<h3>Profiles</h3>
		<!-- breadcrumb  -->
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Search Profiles</li>
			</ol>
		</nav>

		<div class="row">
			<!-- filter -->
			<div class="col-lg-3 col-md-4 col-12">
				{!! Form::open(['url' => '/search', 'method'=>'GET']) !!}
					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Candidate Type</h3>
						<ul class="options">
							<li>
								<label>
									<input 
										type="radio" 
										name="candidate_type" 
										value="female" 
										{{ request()->candidate_type == 'female' ? 'checked' : ''}}
									>Bride
								</label>
							</li>
							<li>
								<label>
									<input 
										type="radio" 
										name="candidate_type" 
										value="male" 
										{{ request()->candidate_type == 'male' ? 'checked' : ''}}
									>Groom
								</label>
							</li>
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Photo</h3>
						<ul class="options">
							<li>
								<label>
									<input 
										type="checkbox" 
										name="profile_picture_with" 
										value="true"
										{{ request()->profile_picture_with == 'true' ? 'checked' : ''}}
									>
									Profile With Photo
								</label>
							</li>
							<li>
								<label>
									<input 
										type="checkbox" 
										name="profile_picture_without" 
										value="true"
										{{ request()->profile_picture_without == 'true' ? 'checked' : ''}}
									>
									Profile Without
									Photo
								</label>
							</li>
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Profile ID</h3>
						<ul class="options">
							<li><input type="text" name="profile_id" value="{{ request()->profile_id }}"></li>
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Age Range</h3>
						<div id="ageRangeSlider"></div>
						<br>
						Range:<span id="ageRangeOutput"></span>
						<input name="expect_age_start" type="text" id="ageMin" hidden="" readonly="" value="{{ request()->expect_age_start ?: null }}">
						<input name="expect_age_end" type="text" id="ageMax" hidden="" readonly="" value="{{ request()->expect_age_end ?: null }}">
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Height Range</h3>
						<div id="heightRangeSlider"></div>
						<br>
						Range:<span id="heightRangeOutput"></span>
						<input name="expect_height_start" type="text" id="heightMin" hidden="" readonly="" value="{{ request()->expect_height_start ?: null }}">
						<input name="expect_height_end" type="text" id="heightMax" hidden="" readonly="" value="{{ request()->expect_height_end ?: null }}">
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">District</h3>
						<ul class="options">
							<li>
								{!! Form::select('districts[]', $districts, (request()->districts ?: null), ['class'=>'form-control', 'id'=> 'prefDistricts', 'multiple'=>'multiple']) !!}
                <small>(Hold Ctrl button for multi select)</small>
							</li>
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Profession</h3>
						<ul class="options">
							<li>
								{!! Form::select('occupations[]', $occupations, (request()->occupations ?: null), ['class'=>'form-control', 'id'=> 'prefOccupations', 'multiple'=>'multiple']) !!}
                <small>(Hold Ctrl button for multi select)</small>
							</li>
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Education</h3>
						<ul class="options">
							<li>
								{!! Form::select('educations[]', $educations, (request()->educations ?: null), ['class'=>'form-control', 'id'=> 'prefEducations', 'multiple'=>'multiple']) !!}
                <small>(Hold Ctrl button for multi select)</small>
							</li>
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Religion</h3>
						<ul class="options">
							@foreach($religions as $key=>$religion)
								<li><label>
									<input 
										type="radio" 
										name="religion" 
										value="{{ $key }}"
										{{ request()->religion == $key ? 'checked' : '' }}
									>
										{{ $religion }}
								</label></li>
							@endforeach
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Marital Status</h3>
						<ul class="options">
							@foreach($martialStatuses as $key=>$maritalStatus)
								<li><label>
									<input 
										type="radio" 
										name="marital_status" 
										value="{{ $key }}"
										{{ request()->marital_status == $key ? 'checked' : '' }}
									>
										{{ $maritalStatus }}
								</label></li>
							@endforeach
						</ul>
					</div>

					<!-- candidate type -->
					<!-- <div class="filter">
						<h3 class="title">Keyword Search</h3>
						<ul class="options">
							<li><input type="text" name="keyword"></li>
						</ul>
					</div> -->

					<button type="submit" class="btn btn-primary" style="position: fixed; z-index: 999; bottom: 0vh; width: 19%">Apply Filter</button>
				{!! Form::close() !!}
			</div>

			<!-- profiles -->
			<div class="col-lg-9 col-md-8 col-12">
				<div class="row">
					<div class="col-12">
						<!-- profile -->
						@foreach($profiles as $profile)
							<a href="{{ url('/profile') }}">
								<div class="card">
									<div class="row">
										<div class="col-md-4 col-12">
											<div class="card profile-card">
												<img 
													src="{{ asset(App\Models\Customer::getUploadPath().'/'.$profile->profile_picture) }}"
													alt="profile-sample1" 
												class="background" />
												<img 
													src="{{asset(App\Models\Customer::getUploadPath().'/'.$profile->profile_picture) }}"
													alt="profile-image" 
													class="profile rounded-full" 
												/>
												<div class="card-content">
													<h2 style="color: #f4623a;">
														{{ ucfirst($profile->name) }}
														<small>{{ ucfirst($profile->occupation) }}</small>
													</h2>
												</div>
											</div>
										</div>
										<div class="col-md-8 col-12">
											<div class="card-block">
												<div class="row">
													<div class="col-6">
														<div class="row attribute">
															<div class="col-md-5 col-12 attribute-title">Age:</div>
															<div class="col-md-7 col-12 attribute-value">{{ $profile->age }}</div>
														</div>
														<div class="row attribute">
															<div class="col-md-5 col-12 attribute-title">Gender:</div>
															<div class="col-md-7 col-12 attribute-value">{{ ucfirst($profile->gender) }}</div>
														</div>
														<div class="row attribute">
															<div class="col-md-5 col-12 attribute-title">Height:</div>
															<div class="col-md-7 col-12 attribute-value">
																<span id="profileHeight">{{ $profile->height }}</span>
															</div>
														</div>
														<div class="row attribute">
															<div class="col-md-5 col-12 attribute-title">Education:</div>
															<div class="col-md-7 col-12 attribute-value">{{ ucfirst($profile->highest_education) }}</div>
														</div>
													</div>
													<div class="col-6">
														<div class="row attribute">
															<div class="col-md-5 col-12 attribute-title">Religion:</div>
															<div class="col-md-7 col-12 attribute-value">{{ ucfirst($profile->religion) }}</div>
														</div>
														<div class="row attribute">
															<div class="col-md-5 col-12 attribute-title">Caste:</div>
															<div class="col-md-7 col-12 attribute-value">{{ ucfirst($profile->caste) }}</div>
														</div>
														<div class="row attribute">
															<div class="col-md-5 col-12 attribute-title">City:</div>
															<div class="col-md-7 col-12 attribute-value">{{ ucfirst($profile->pre_city) }}</div>
														</div>
														<div class="row attribute">
															<div class="col-md-5 col-12 attribute-title">Country:</div>
															<div class="col-md-7 col-12 attribute-value">{{ ucfirst($profile->pre_country) }}</div>
														</div>
													</div>
												</div>

												<hr>
												<p class="card-description">I have completed MBA from the Dhaka university.
													I am
													doing the job at a Govt Bank. Now I am looking for a sensible life
													partner.
												</p>
												<br>
												<!-- <a href="#" class="btn btn-primary btn-sm float-right">Read More</a> -->
											</div>
										</div>
									</div>
								</div>
							</a>
							<br>

						@endforeach

						<!-- paginatation -->
						<br>
						<nav aria-label="..." class="float-right">
							{!! $profiles->render() !!}
						</nav>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<br>
@endsection