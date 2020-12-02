@extends('layouts.web')

@section('content')
<div class="page-content">
	<div class="container">
		<h3>Profiles</h3>
		<!-- breadcrumb  -->
		<!-- <nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Search Profiles</li>
			</ol>
		</nav> -->

		<div class="row">
			<!-- filter -->
			<div class="col-lg-3 col-md-4 col-12">
				{!! Form::open(['url' => '/profile/filter', 'method'=>'GET']) !!}
					<!-- <button type="submit" class="btn btn-primary" style="position: fixed; z-index: 999">Apply Filter</button> -->
					<button type="submit" class="btn btn-primary btn-block">Apply Filter</button>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Candidate Type {{ request()->candidate_type }}</h3>
						<ul class="options">
							<li>
								<label>
									<input 
										type="radio" 
										name="candidate_type" 
										value="bride" 
										{{ request()->candidate_type == 'bride' ? 'checked' : ''}}
									>Bride
								</label>
							</li>
							<li>
								<label>
									<input 
										type="radio" 
										name="candidate_type" 
										value="groom" 
										{{ request()->candidate_type == 'groom' ? 'checked' : ''}}
									>Groom
								</label>
							</li>
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Photo</h3>
						<ul class="options">
							<li><label><input type="checkbox" name="candidate_type" value="groom">Profile With Photo</label>
							</li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Profile Without
									Photo</label></li>
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
						<input name="age_min" type="text" id="ageMin" hidden="" readonly="">
						<input name="age_max" type="text" id="ageMax" hidden="" readonly="">
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Height Range</h3>
						<div id="heightRangeSlider"></div>
						<br>
						Range:<span id="heightRangeOutput"></span>
						<input type="text" id="heightMin" hidden="" readonly="">
						<input type="text" id="heightMax" hidden="" readonly="">
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">District</h3>
						<ul class="options">
							<li><label><input type="checkbox" name="candidate_type" value="groom">Dhaka</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Chittagong</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Sylhet</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Rajshahi</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Barishal</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Rangpur</label></li>
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Profession</h3>
						<ul class="options">
							<li><label><input type="checkbox" name="candidate_type" value="bride">Doctor</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Engineer</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Architect</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Banker</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Lawyear</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">BSC Cader</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Businessman</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Salesman</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Operator</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Armed Force</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Public Service Holder</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Private Service Holder</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Nurse</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="bride">Other</label></li>
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Education</h3>
						<ul class="options">
							<li><label><input type="checkbox" name="candidate_type" value="groom">MSC</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">MBA</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">BBA</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">BSC</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Bachelors</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">MBBS</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">B.Com</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Diploma</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">HSC</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">SSC</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Fazil</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Kamil</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Dakhil</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Associates</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">B Pharm</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">CA</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">LLB</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">LLM</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">M Pharm</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">M.Com</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Doctorate</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">MPhil</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Some College</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">High School</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Incomplete High School</label></li>
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
							<li><label><input type="checkbox" name="candidate_type" value="groom">Never Married</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Divorced</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Widowed</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Married</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Domestic Partner</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Legally Separated</label></li>
							<li><label><input type="checkbox" name="candidate_type" value="groom">Living Together</label></li>
						</ul>
					</div>

					<!-- candidate type -->
					<div class="filter">
						<h3 class="title">Keyword Search</h3>
						<ul class="options">
							<li><input type="text" name="keyword"></li>
						</ul>
					</div>
				{!! Form::close() !!}
			</div>

			<!-- profiles -->
			<div class="col-lg-9 col-md-8 col-12">
				<div class="row">
					<div class="col-12">
						<!-- profile -->
						<a href="{{ url('/profile') }}">
							<div class="card">
								<div class="row">
									<div class="col-4">
										<div class="card profile-card">
											<img src="https://images.unsplash.com/photo-1526835746352-0b9da4054862?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
												alt="profile-sample1" class="background" />
											<img src="https://images.unsplash.com/photo-1526835746352-0b9da4054862?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
												alt="profile-image" class="profile rounded-full" />
											<div class="card-content">
												<h2>
													Sarah Ali
													<small>Private Service Holder</small>
												</h2>
											</div>
										</div>
									</div>
									<div class="col-8">
										<div class="card-block">
											<div class="row">
												<div class="col-6">
													<div class="row attribute">
														<div class="col-5 attribute-title">Age:</div>
														<div class="col-7 attribute-value">25</div>
													</div>
													<div class="row attribute">
														<div class="col-5 attribute-title">Gender:</div>
														<div class="col-7 attribute-value">Female</div>
													</div>
													<div class="row attribute">
														<div class="col-5 attribute-title">Height:</div>
														<div class="col-7 attribute-value">5'2''</div>
													</div>
													<div class="row attribute">
														<div class="col-5 attribute-title">Education:</div>
														<div class="col-7 attribute-value">BSC</div>
													</div>
												</div>
												<div class="col-6">
													<div class="row attribute">
														<div class="col-5 attribute-title">Religion:</div>
														<div class="col-7 attribute-value">Muslim</div>
													</div>
													<div class="row attribute">
														<div class="col-5 attribute-title">Caste:</div>
														<div class="col-7 attribute-value">Sunni</div>
													</div>
													<div class="row attribute">
														<div class="col-5 attribute-title">City:</div>
														<div class="col-7 attribute-value">Dhaka</div>
													</div>
													<div class="row attribute">
														<div class="col-5 attribute-title">Country:</div>
														<div class="col-7 attribute-value">Bangladesh</div>
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

						<br>
						<nav aria-label="..." class="float-right">
							<ul class="pagination">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1">Previous</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active">
									<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<br>
@endsection