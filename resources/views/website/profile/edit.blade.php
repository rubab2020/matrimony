@extends('layouts.web')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/web/css/bs-stepper.min.css') }}">
	<style type="text/css">
		.col-form-label{
			font-weight: bold;
		}
	</style>
@endsection

@section('content')
	<div class="page-content">
		<div class="container">
			<div class="row">
				<!-- form -->
				<div class="col-lg-12 col-md-12 col-12">
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
					    <!-- models does not working on stepper forms -->
					    {!! Form::model($profile, ['url' => '/profile/update', 'files'=>true]) !!} 
					    	@include('website.profile.form', ['submitButtonText' => 'Update Profile'])
    					{!! Form::close() !!}
    				</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection