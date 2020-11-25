@extends('layouts.web')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/bs-stepper.min.css') }}">
@endsection

@section('content')
	<div class="page-content">
		<div class="container">
			<div class="row">
				<!-- form -->
				<div class="col-lg-12 col-md-12 col-12">

					<!-- <h4>Profile Form</h4> -->
					<div class="bs-stepper">
					  <div class="bs-stepper-header" role="tablist">
					    <!-- your steps here -->
					    <div class="step" data-target="#personal-info">
					      <button type="button" class="step-trigger" role="tab" aria-controls="personal-info" id="personal-info-trigger">
					        <span class="bs-stepper-circle">1</span>
					        <span class="bs-stepper-label">Personal Info</span>
					      </button>
					    </div>
					    <div class="line"></div>
					    <div class="step" data-target="#physical-attributes">
					      <button type="button" class="step-trigger" role="tab" aria-controls="physical-attributes" id="physical-attributes-trigger">
					        <span class="bs-stepper-circle">2</span>
					        <span class="bs-stepper-label">Physical Attributes</span>
					      </button>
					    </div>
					    <div class="line"></div>
					    <div class="step" data-target="#qualification">
					      <button type="button" class="step-trigger" role="tab" aria-controls="qualification" id="qualification-trigger">
					        <span class="bs-stepper-circle">3</span>
					        <span class="bs-stepper-label">Qualification & family Info</span>
					      </button>
					    </div>
					    <div class="line"></div>
					    <div class="step" data-target="#address">
					      <button type="button" class="step-trigger" role="tab" aria-controls="address" id="address-trigger">
					        <span class="bs-stepper-circle">4</span>
					        <span class="bs-stepper-label">Addresses</span>
					      </button>
					    </div>
							<div class="line"></div>
					    <div class="step" data-target="#preference">
					      <button type="button" class="step-trigger" role="tab" aria-controls="preference" id="preference-trigger">
					        <span class="bs-stepper-circle">5</span>
					        <span class="bs-stepper-label">Preference</span>
					      </button>
					    </div>
					  </div>
					  <div class="bs-stepper-content">
					    <!------------------------------
					    	 steps content here 
					    -------------------------------->

					    <!-- personal Info -->
					    <div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
					    	<div class="row">
					    		<div class="col-12">
					    			<div class="row">
							    		<div class="col-6">
							    			<div class="form-group">
							    				<label class="col-form-label">Profile Picture</label>
							    				{!! Form::file('image', ['class'=>'form-control', 'accept'=>'image/*', 'id'=>'profilePicUpload']) !!} 
							    				<div id="preivewProfilePic"></div>
							    			</div>
							    			<div class="form-group">
						    					<label class="col-form-label">About Yourself</label>
						    					{!! Form::textarea('intro', null, ['class'=>'form-control', 'style'=>'height:50px;']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Blood Group</label>
							    				{!! Form::select('blood_group', $bloodGroups, null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Marital Status</label>
							    				{!! Form::select('marital_status', $martialStatuses, null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">Children</label>
							    				{!! Form::select('children', [''=>'Select']+range(1,10), null, ['class'=>'form-control']) !!}
							    			</div>
							    		</div>
							    		<div class="col-6">
							    			<div class="form-group">
							    				<label class="col-form-label">Gallery Photos</label>
							    				{!! Form::file('images[]', ['class'=>'form-control', 'multiple'=>true, 'accept'=>'image/*', 'id'=>'galleryPicsUpload']) !!}
							    				<div id="previewGallaries"></div>
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Languages</label>
							    				{!! Form::text('languages', null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Ethnicity</label>
							    				{!! Form::text('ethnicity', null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Hobbies</label>
							    				{!! Form::text('hobbies', null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Interest</label>
							    				{!! Form::text('interest', null, ['class'=>'form-control']) !!}
							    			</div>
							    		</div>
							    	</div>

					    			<div class="controls">
						          <button class="btn btn-primary float-right btnNext" type="button">Next &#187;</button>
						        </div>
					    		</div>
					    	</div>
					    </div>

					    <!-- physical attributes -->
					    <div id="physical-attributes" class="content" role="tabpanel" aria-labelledby="physical-attributes-trigger">
					    	<div class="row">
					    		<div class="col-12">
					    			<div class="row">
							    		<div class="col-6">
							    			<div class="form-group">
							    				<label class="col-form-label">Height</label>
							    				<div id="heightSlider"></div>
													<br>
													Inch:<span id="heightOutput"></span>
													<input type="text" id="height" hidden="" readonly="">
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Weight (Kg)</label>
							    				{!! Form::text('weight', null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Weight (Kg)</label>
							    				{!! Form::select('body_type', $bodyTypes, null, ['class'=>'form-control']) !!}
							    			</div>
						    			</div>
						    			<div class="col-6">
							    			<div class="form-group">
							    				<label class="col-form-label">Eye Color</label>
							    				{!! Form::select('eye_color', $eyeColors, null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Hair Color</label>
							    				{!! Form::select('hair_color', $hairColors, null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Complexion</label>
							    				{!! Form::select('complexion', $complexions, null, ['class'=>'form-control']) !!}
							    			</div>
						    			</div>
					    			</div>

							    	<div class="controls">
						          <button class="btn btn-primary float-left btnPrevious" type="button"> &#171; Previous</button>
						          <button class="btn btn-primary float-right btnNext" type="button">Next &#187;</button>
						        </div>
				    			</div>
			    			</div>
					    </div>

					    <div id="qualification" class="content" role="tabpanel" aria-labelledby="qualification-trigger">
			    			<div class="row">
					    		<div class="col-12">
					    			<div class="row">
							    		<div class="col-6">
							    			<div class="form-group">
							    				<label class="col-form-label">Education</label>
							    				{!! Form::select('education', [''=>'Select']+$educations, null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Occupation</label>
							    				{!! Form::select('occupation', [''=>'Select']+$occupations, null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Annual Income</label>
							    				{!! Form::text('annual_income', null, ['class'=>'form-control']) !!}
							    			</div>
						    			</div>
							    		<div class="col-6">
							    			<div class="form-group">
							    				<label class="col-form-label">Family Info</label>
							    				{!! Form::textarea('family_info', null, ['class'=>'form-control']) !!}
							    			</div>
							    		</div>
					    			</div>

							    	<div class="controls">
						          <button class="btn btn-primary float-left btnPrevious" type="button"> &#171; Previous</button>
						          <button class="btn btn-primary float-right btnNext" type="button">Next &#187;</button>
						        </div>
				    			</div>
			    			</div>
			    		</div>

			    		<div id="address" class="content" role="tabpanel" aria-labelledby="address-trigger">
			    			<div class="row">
					    		<div class="col-12">
					    			<div class="row">
							    		<div class="col-6">
							    			<h4>Present Address</h4>
							    			<div class="form-group">
							    				<label class="col-form-label">Address</label>
							    				{!! Form::text('pre_address', null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">CIty</label>
							    				{!! Form::select('pre_city', [''=>'Select']+$cities, null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">District</label>
							    				{!! Form::select('pre_district', [''=>'Select']+$districts, null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Postal Code</label>
							    				{!! Form::text('pre_postal_code', null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Country</label>
							    				{!! Form::select('pre_country', [''=>'Select']+$countries, null, ['class'=>'form-control']) !!}
							    			</div>
						    			</div>
							    		<div class="col-6">
							    			<div class="form-group">
							    				<h4>Permanent Address</h4>
							    				<div class="form-group">
								    				<label class="col-form-label">Address</label>
								    				{!! Form::text('per_address', null, ['class'=>'form-control']) !!}
								    			</div>
								    			<div class="form-group">
								    				<label class="col-form-label">CIty</label>
								    				{!! Form::select('per_city', [''=>'Select']+\App\Http\Repositories\Config::getCityList(), null, ['class'=>'form-control']) !!}
								    			</div>
								    			<div class="form-group">
								    				<label class="col-form-label">District</label>
								    				{!! Form::select('per_district', [''=>'Select']+\App\Http\Repositories\Config::getDistrictList(), null, ['class'=>'form-control']) !!}
								    			</div>
								    			<div class="form-group">
								    				<label class="col-form-label">Postal Code</label>
								    				{!! Form::text('per_postal_code', null, ['class'=>'form-control']) !!}
								    			</div>
								    			<div class="form-group">
								    				<label class="col-form-label">Country</label>
								    				{!! Form::select('per_country', [''=>'Select']+\App\Http\Repositories\Config::getCountryList(), null, ['class'=>'form-control']) !!}
								    			</div>
							    			</div>
							    		</div>
					    			</div>

							    	<div class="controls">
						          <button class="btn btn-primary float-left btnPrevious" type="button"> &#171; Previous</button>
						          <button class="btn btn-primary float-right btnNext" type="button">Next &#187;</button>
						        </div>
				    			</div>
			    			</div>
			    		</div>

			    		<div id="preference" class="content" role="tabpanel" aria-labelledby="preference-trigger">
			    			<div class="row">
					    		<div class="col-12">
					    			<h4>Set your desired cadidate preference</h4>
					    			<div class="row">
							    		<div class="col-6">
							    			<div class="form-group">
							    				<label class="col-form-label">Age Range</label>
													<div id="ageRangeSlider"></div>
													<br>
													Range:<span id="ageRangeOutput"></span>
													<input type="text" id="ageMin" hidden="" readonly="">
													<input type="text" id="ageMax" hidden="" readonly="">
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Height Range</label>
													<div id="heightRangeSlider"></div>
													<br>
													Range:<span id="heightRangeOutput"></span>
													<input type="text" id="heightMin" hidden="" readonly="">
													<input type="text" id="heightMax" hidden="" readonly="">
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Districts</label>
      										{!! Form::select('pref_districts', $districts, null, ['class'=>'form-control', 'id'=> 'prefDistricts', 'multiple'=>'multiple']) !!}
							    				<small>(Hold Ctrl button for multi select)</small>
							    			</div>
							    		</div>
							    		<div class="col-6">
							    			<div class="form-group">
							    				<label class="col-form-label">Occupations</label>
      										{!! Form::select('pref_occupations', $occupations, null, ['class'=>'form-control', 'id'=> 'prefOccupations', 'multiple'=>'multiple']) !!}
							    				<small>(Hold Ctrl button for multi select)</small>
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Educations</label>
      										{!! Form::select('pref_educations', $educations, null, ['class'=>'form-control', 'id'=> 'prefEducations', 'multiple'=>'multiple']) !!}
							    				<small>(Hold Ctrl button for multi select)</small>
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Special Preference</label>
							    				{!! Form::text('special_preference', null, ['class'=>'form-control']) !!}
							    			</div>
							    		</div>
						    		</div>
						    		<div class="controls">
						          <button class="btn btn-primary float-left btnPrevious" type="button"> &#171; Previous</button>
						          <button class="btn btn-primary float-right btnNext" type="button">Next &#187;</button>
						        </div>
					    		</div>
				    		</div>
			    		</div>

					  </div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
		<script type="text/javascript" src="{{ asset('assets/web/js/bs-stepper.min.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				// ------------stepper --------------------
		    var stepper = new Stepper($(".bs-stepper")[0], {
				  linear: false,
				  animation: true
				});

				$(".btnNext").click(function () {
				  stepper.next();
				});

				$(".btnPrevious").click(function () {
				  stepper.previous();
				});

				// ---------- pic upload -------------
				$('#profilePicUpload').change(function(){
					$('#preivewProfilePic').empty();
					$('#preivewProfilePic').append('<img src="'+URL.createObjectURL(event.target.files[0])+'" width="70px" height="70px"/>');
				});

				$('#galleryPicsUpload').change(function(){
					$('#previewGallaries').empty();
					let totalFiles = event.target.files.length;
					for (let i = 0; i < totalFiles; i++) {
						$('#previewGallaries').append('<img src="'+URL.createObjectURL(event.target.files[i])+'" width="70px" height="70px"/>');
					}
				});
			})
		</script>
	@endsection
