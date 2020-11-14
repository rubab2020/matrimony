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
						src="https://images.unsplash.com/photo-1470100568678-c2bc2ba890c1?ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80">
				</div>
				<div class="profile-section-card">
					<img class="profile-pic"
						src="https://images.unsplash.com/photo-1526835746352-0b9da4054862?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80">
					<div class="profile-name-container">
						<div class="user-name">Sarah Ali</div>
						<div class="icon-block">
							<a href="#"><span class="icon"><i class="fas fa-unlock"></i></span></a>
							<a href="#"><span class="icon"><i class="fas fa-star"></i></span></a>
							<a href="#"><span class="icon"><i class="fas fa-share"></i></span></a>
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
								<div class="col-7 attribute-value">Private</div>
							</div>
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
						</div>
						<div class="col-6">
							<div class="row attribute">
								<div class="col-5 attribute-title">Education:</div>
								<div class="col-7 attribute-value">BSC</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Occupation:</div>
								<div class="col-7 attribute-value">Privat service holder</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Marital Status:</div>
								<div class="col-7 attribute-value">Never Married</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Religion:</div>
								<div class="col-7 attribute-value">Muslim</div>
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

								<a class="portfolio-box"
									href="https://images.unsplash.com/photo-1526835746352-0b9da4054862?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80">
									<img class="img-fluid"
										src="https://images.unsplash.com/photo-1526835746352-0b9da4054862?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
										alt="" />
									<div class="portfolio-box-caption">
										{{-- <div class="project-category text-white-50">Category</div>
			                            <div class="project-name">Project Name</div> --}}
									</div>
								</a>

								<a class="portfolio-box"
									href="https://images.unsplash.com/photo-1489465513824-daad46f4229b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80">
									<img class="img-fluid"
										src="https://images.unsplash.com/photo-1489465513824-daad46f4229b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
										alt="" />
									<div class="portfolio-box-caption">
									</div>
								</a>

								<a class="portfolio-box"
									href="https://images.unsplash.com/photo-1484240173939-5e25a3041a4a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=631&q=80">
									<img class="img-fluid"
										src="https://images.unsplash.com/photo-1484240173939-5e25a3041a4a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=631&q=80"
										alt="" />
									<div class="portfolio-box-caption">
									</div>
								</a>

							</div>
						</div>
					</div>
				</div>

				<br>
				<!-- intro -->
				<div class="section-card">
					<h4 class="section-title">Intro</h4>
					<p style="color: gray">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>

				<br>
				<!-- personal info -->
				<div class="section-card">
					<h4 class="section-title">Personal Info</h4>

					<div class="row">
						<div class="col-6">
							<div class="row attribute">
								<div class="col-5 attribute-title">Name:</div>
								<div class="col-7 attribute-value">Private</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Age:</div>
								<div class="col-7 attribute-value">25</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Gender:</div>
								<div class="col-7 attribute-value">Female</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Languages:</div>
								<div class="col-7 attribute-value">Bangla, English, Hindi</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Ethnicity:</div>
								<div class="col-7 attribute-value">Bangladesh</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Blood Group:</div>
								<div class="col-7 attribute-value">O+ve</div>
							</div>
						</div>
						<div class="col-6">
							<div class="row attribute">
								<div class="col-5 attribute-title">Marital Status:</div>
								<div class="col-7 attribute-value">Unmarried</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Children:</div>
								<div class="col-7 attribute-value">zero</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Religion:</div>
								<div class="col-7 attribute-value">Muslim</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Caste:</div>
								<div class="col-7 attribute-value">Sunni</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Hobbies:</div>
								<div class="col-7 attribute-value">Football, Cricket, gradening</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Interest:</div>
								<div class="col-7 attribute-value">Travelling, Sports</div>
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
								<div class="col-5 attribute-title">Height:</div>
								<div class="col-7 attribute-value">5'2''</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Wight:</div>
								<div class="col-7 attribute-value">80kg</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Body Type:</div>
								<div class="col-7 attribute-value">Slim</div>
							</div>
						</div>
						<div class="col-6">
							<div class="row attribute">
								<div class="col-5 attribute-title">Eye Color:</div>
								<div class="col-7 attribute-value">Red</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Hair Color:</div>
								<div class="col-7 attribute-value">Black</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Complextion:</div>
								<div class="col-7 attribute-value">Fair</div>
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
								<div class="col-7 attribute-value">BSc</div>
							</div>
							<div class="row attribute">
								<div class="col-5 attribute-title">Occupation:</div>
								<div class="col-7 attribute-value">Private job holder</div>
							</div>
						</div>
						<div class="col-6">
							<div class="row attribute">
								<div class="col-5 attribute-title">Annual Income:</div>
								<div class="col-7 attribute-value">1 lac</div>
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
								<div class="col-7 attribute-value">Uttara, Dhaka, Bangladesh</div>
							</div>
						</div>
						<div class="col-6">
							<div class="row attribute">
								<div class="col-5 attribute-title">Permanent Address:</div>
								<div class="col-7 attribute-value">Banani, Dhaka, Bangladesh</div>
							</div>
						</div>
					</div>
				</div>

				<br>
				<!-- adresses -->
				<div class="section-card">
					<h4 class="section-title">Family Info</h4>
					<p style="color: gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
@endsection