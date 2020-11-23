@extends('layouts.web')

@section('style')
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">
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
					    <div class="step" data-target="#logins-part">
					      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
					        <span class="bs-stepper-circle">1</span>
					        <span class="bs-stepper-label">Personal Info</span>
					      </button>
					    </div>
					    <div class="line"></div>
					    <div class="step" data-target="#information-part">
					      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
					        <span class="bs-stepper-circle">2</span>
					        <span class="bs-stepper-label">Various information</span>
					      </button>
					    </div>
					  </div>
					  <div class="bs-stepper-content">
					    <!-- steps content here -->

					    <!-- personal Info -->
					    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
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
							    				{!! Form::select('blood_group', [''=>'Select', 'A+'=>'A+', 'A-'=>'A-', 'B+'=>'B+','B+-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'], null, ['class'=>'form-control']) !!}
							    			</div>
							    			<div class="form-group">
							    				<label class="col-form-label">Marital Status</label>
							    				{!! Form::select('marital_status', [''=>'Select', 'single'=>'Single', 'married'=>'Married', 'devorced'=>'Devorced'], null, ['class'=>'form-control']) !!}
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

					    <!--  -->
					    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
					    	last page
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
@endsection

@section('script')
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
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
