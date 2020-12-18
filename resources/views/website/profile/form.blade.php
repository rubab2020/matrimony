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
                    @if($profile->profile_picture)
                        <img src="{{ asset(App\Models\Customer::getUploadPath().'/'.$profile->profile_picture) }}" style="width: auto; height: 100px;">
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-form-label">About Yourself</label>
                    {!! Form::textarea('about', old('about', $profile->about ?: null), ['class'=>'form-control', 'style'=>'height:50px;']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Blood Group</label>
                    {!! Form::select('blood_group', $bloodGroups, old('blood_group', $profile->blood_group ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Marital Status</label>
                    {!! Form::select('marital_status', [''=>'Select']+$martialStatuses, old('marital_status', $profile->marital_status ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">No of Children</label>
                    {!! Form::select('no_of_children', [''=>'Select']+range(1,10), old('no_of_children', $profile->no_of_children ?: null), ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="col-form-label">Gallery Photos</label>
                    {!! Form::file('images[]', ['class'=>'form-control', 'multiple'=>true, 'accept'=>'image/*', 'id'=>'galleryPicsUpload']) !!}
                    <div id="previewGallaries"></div>
                     @if($gallaries)
                        @foreach($gallaries as $gallery)
                            <img src="{{ asset(App\Models\Customer::getUploadPath().'/'.$gallery) }}" style="width: auto; height: 100px;">
                        @endforeach
                    @endif
                </div>
                <div class="form-group">
                    <label class="col-form-label">Languages</label>
                    {!! Form::text('languages', old('languages', $profile->languages ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Ethnicity</label>
                    {!! Form::text('ethnicity', old('ethnicity', $profile->ethnicity ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Hobbies</label>
                    {!! Form::text('hobbies', old('hobbies', $profile->hobbies ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Interest</label>
                    {!! Form::text('interest', old('interest', $profile->interest ?: null), ['class'=>'form-control']) !!}
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
                        <input name="height" value="{{ old('height', $profile->height ?: null) }}" type="text" id="height" hidden="" readonly="">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Weight (Kg)</label>
                    {!! Form::text('weight', old('weight', $profile->weight ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Body Type</label>
                    {!! Form::select('body_type', $bodyTypes, old('body_type', $profile->body_type ?: null), ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="col-form-label">Eye Color</label>
                    {!! Form::select('eye_color', $eyeColors, old('eye_color', $profile->eye_color ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Hair Color</label>
                    {!! Form::select('hair_color', $hairColors, old('hair_color', $profile->hair_color ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Complexion</label>
                    {!! Form::select('complexion', $complexions, old('complexion', $profile->complexion ?: null), ['class'=>'form-control']) !!}
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
                    {!! Form::select('highest_education', [''=>'Select']+$educations, old('highest_education', $profile->highest_education ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Occupation</label>
                    {!! Form::select('occupation', [''=>'Select']+$occupations, old('occupation', $profile->occupation ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Annual Income (Taka)</label>
                    {!! Form::text('annual_income', old('annual_income', $profile->annual_income ?: null), ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="col-form-label">Family Info</label>
                    {!! Form::textarea('family_info', old('family_info', $profile->family_info ?: null), ['class'=>'form-control']) !!}
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
                    {!! Form::text('pre_address', old('pre_address', $profile->pre_address ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">CIty</label>
                    {!! Form::select('pre_city', [''=>'Select']+$cities, old('pre_city', $profile->pre_city ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">District</label>
                    {!! Form::select('pre_district', [''=>'Select']+$districts, old('pre_district', $profile->pre_district ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Postal Code</label>
                    {!! Form::text('pre_postal_code', old('pre_postal_code', $profile->pre_postal_code ?: null), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label class="col-form-label">Country</label>
                    {!! Form::select('pre_country', [''=>'Select']+$countries, old('pre_country', $profile->pre_country ?: null), ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <h4>Permanent Address</h4>
                    <div class="form-group">
                        <label class="col-form-label">Address</label>
                        {!! Form::text('per_address', old('per_address', $profile->per_address ?: null), ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">CIty</label>
                        {!! Form::select('per_city', [''=>'Select']+$cities, old('per_city', $profile->per_city ?: null), ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">District</label>
                        {!! Form::select('per_district', [''=>'Select']+$districts, old('per_district', $profile->per_district ?: null), ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Postal Code</label>
                        {!! Form::text('per_postal_code', old('per_postal_code', $profile->per_postal_code ?: null), ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Country</label>
                        {!! Form::select('per_country', [''=>'Select']+$countries, old('per_country', $profile->per_country ?: null), ['class'=>'form-control']) !!}
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
                    <input name="expect_age_start" value="{{ old('expect_age_start', $profile->expect_age_start ?: null) }}" type="text" id="ageMin" hidden="" readonly="">
                    <input name="expect_age_end" value="{{ old('expect_age_end', $profile->expect_age_end ?: null) }}" type="text" id="ageMax" hidden="" readonly="">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Desired Height Range</label>
                    <div id="heightRangeSlider"></div>
                    <br>
                    Range:<span id="heightRangeOutput"></span>
                    <input name="expect_height_start" value="{{ old('expect_height_start', $profile->expect_height_start ?: null) }}" type="text" id="heightMin" hidden="" readonly="">
                    <input name="expect_height_end" value="{{ old('expect_height_end', $profile->expect_height_end ?: null) }}" type="text" id="heightMax" hidden="" readonly="">
                </div>
                <div class="form-group">
                    <label class="col-form-label">Desired Districts</label>
                    {!! Form::select('expect_districts[]', $districts, old('expect_districts', $profile->expect_districts ?: null), ['class'=>'form-control', 'id'=> 'prefDistricts', 'multiple'=>'multiple']) !!}
                    <small>(Hold Ctrl button for multi select)</small>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="col-form-label">Desired Occupations</label>
                    {!! Form::select('expect_occupations[]', $occupations, old('expect_occupations', $profile->expect_occupations ?: null), ['class'=>'form-control', 'id'=> 'prefOccupations', 'multiple'=>'multiple']) !!}
                    <small>(Hold Ctrl button for multi select)</small>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Desired Educations</label>
                    {!! Form::select('expect_educations[]', $educations, old('expect_educations', $profile->expect_educations ?: null), ['class'=>'form-control', 'id'=> 'prefEducations', 'multiple'=>'multiple']) !!}
                    <small>(Hold Ctrl button for multi select)</small>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Special Preference</label>
                    {!! Form::text('expect_special_preference', old('expect_special_preference', $profile->expect_special_preference ?: null), ['class'=>'form-control']) !!}
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
