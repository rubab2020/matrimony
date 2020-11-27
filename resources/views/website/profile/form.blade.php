<!-- personal Info -->
<div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
    <div class="row">
        <div class="col-12">
            <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="col-form-label">Profile Picture</label>
                    {!! Form::file('profie_picture', ['class'=>'form-control', 'accept'=>'image/*', 'id'=>'profilePicUpload']) !!} 
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
                <div class="form-group">No of Children</label>
                    {!! Form::select('no_ochildren', [''=>'Select']+range(1,10), null, ['class'=>'form-control']) !!}
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
                    <label class="col-form-label">Highest Education</label>
                    {!! Form::select('height_education', [''=>'Select']+$educations, null, ['class'=>'form-control']) !!}
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
                        {!! Form::select('per_city', $cities, null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">District</label>
                        {!! Form::select('per_district', $districts, null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Postal Code</label>
                        {!! Form::text('per_postal_code', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Country</label>
                        {!! Form::select('per_country', $countries, null, ['class'=>'form-control']) !!}
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
            <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="col-form-label">Desired Age Range</label>
                        <div id="ageRangeSlider"></div>
                        <br>
                        Range:<span id="ageRangeOutput"></span>
                        <input type="text" id="ageMin" hidden="" readonly="">
                        <input type="text" id="ageMax" hidden="" readonly="">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Desired Height Range</label>
                        <div id="heightRangeSlider"></div>
                        <br>
                        Range:<span id="heightRangeOutput"></span>
                        <input type="text" id="heightMin" hidden="" readonly="">
                        <input type="text" id="heightMax" hidden="" readonly="">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Desired Districts</label>
                        {!! Form::select('pref_districts', $districts, null, ['class'=>'form-control', 'id'=> 'prefDistricts', 'multiple'=>'multiple']) !!}
                    <small>(Hold Ctrl button for multi select)</small>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="col-form-label">Desired Occupations</label>
                        {!! Form::select('pref_occupations', $occupations, null, ['class'=>'form-control', 'id'=> 'prefOccupations', 'multiple'=>'multiple']) !!}
                    <small>(Hold Ctrl button for multi select)</small>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Desired Educations</label>
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
        <button class="btn btn-info float-right btnNext" type="submit">
            {{ $submitButtonText }}
        </button>
      </div>
        </div>
    </div>
</div>
                      

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
