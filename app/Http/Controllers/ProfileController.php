<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\Helpers\ConfigHelper;
use App\Models\Customer;
use App\Models\Gallery;

class ProfileController extends Controller
{
    private $uploadPath;
    
    function __construct(){
        $this->uploadPath = Customer::getUploadPath();
    }

	public function create()
	{
		$bloodGroups = [''=>'Select', 'A+'=>'A+', 'A-'=>'A-', 'B+'=>'B+','B+-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-'];	
		$martialStatuses = [''=>'Select', 'single'=>'Single', 'married'=>'Married', 'devorced'=>'Devorced'];
		$bodyTypes = [''=>'Select', 'slim'=>'Slim', 'average'=>'Average', 'chubby'=> 'Chubby', 'fat'=>'Fat', 'fit'=> 'Fit', 'athletic'=>'Athletic', 'bodybuilder'=>'Bodybuilder'];
		$eyeColors = [''=>'Select', 'amber'=>'Amber', 'blue'=>'Blue', 'brown'=>'Brown', 'gray'=>'Gray', 'green'=>'Green', 'hazel'=>'Hazel', 'red'=>'Red'];
		$hairColors = [''=>'Select', 'black'=>'black', 'brown'=>'brown', 'blond'=>'blond', 'red'=>'red', 'gray'=>'gray', 'white'=>'white', 'red'=>'Red'];
		$complexions = [''=>'Select', 'fair'=>'fair', 'brown'=>'brown', 'black'=>'black', 'light'=>'light', 'medium'=>'medium', 'olive'=>'olive'];
		$educations = ConfigHelper::getEducationList();
		$occupations = ConfigHelper::getOccupationList();
		$cities = ConfigHelper::getCityList();
		$districts = ConfigHelper::getDistrictList();
		$countries = ConfigHelper::getCountryList();
		
	    return view('website.profile.create', compact(
	    	'bloodGroups', 
	    	'martialStatuses', 
	    	'bodyTypes', 
	    	'eyeColors', 
	    	'hairColors', 
	    	'complexions',
	    	'educations',
	    	'occupations',
	    	'cities',
	    	'districts',
	    	'countries'
		));
	}

	public function store(Request $request)
	{
		$profilePictureName = CustomHelper::saveImage($request->file('profie_picture'), $this->uploadPath, 600, 600);

		$customer = Customer::find(Auth::guard('customer')->id);

		if(!$customer)
			return back()->with('error', 'User not found');
	
		$customer->profile_picture = $profilePictureName;
		$customer->intro = $request->input('intro');
		$customer->blood_group = $request->input('blood_group');
		$customer->marital_status = $request->input('marital_status');
		$customer->no_of_children = $request->input('no_of_children');
		$customer->languages = $request->input('languages');
		$customer->ethnicity = $request->input('ethnicity');
		$customer->hobbies = $request->input('hobbies');
		$customer->interest = $request->input('interest');
		$customer->height = $request->input('height');
		$customer->weight = $request->input('weight');
		$customer->eye_color = $request->input('eye_color');
		$customer->hair_color = $request->input('hair_color');
		$customer->complexion = $request->input('complexion');
		$customer->highest_education = $request->input('highest_education');
		$customer->occupation = $request->input('occupation');
		$customer->annual_income = $request->input('annual_income');
		$customer->family_info = $request->input('family_info');
		$customer->pre_address = $request->input('pre_address');
		$customer->pre_city = $request->input('pre_city');
		$customer->pre_district = $request->input('pre_district');
		$customer->pre_postal_code = $request->input('pre_postal_code');
		$customer->pre_country = $request->input('pre_country');
		$customer->per_address = $request->input('per_address');
		$customer->per_city = $request->input('per_city');
		$customer->per_district = $request->input('per_district');
		$customer->per_postal_code = $request->input('per_postal_code');
		$customer->per_country = $request->input('per_country');
		$customer->expect_age_start = $request->input('expect_age_start');
		$customer->expect_age_end = $request->input('expect_age_end');
		$customer->expect_district = $request->input('expect_district');
		$customer->expect_profession = $request->input('expect_profession');
		$customer->expect_education = $request->input('expect_education');
		$customer->expect_height_start = $request->input('expect_height_start');
		$customer->expect_height_end = $request->input('expect_height_end');
		$customer->expect_special_preference = $request->input('expect_special_preference');

		if($customer->save()) {
			$this->saveImages($request->file('images'), $customer->id);
		}
	}

	private function saveImages($images, $customerId)
    {
        if($images) {
            foreach($images as $image) {
                $profilePictureName = null;
                
                $imageName = CustomHelper::saveImage($image, $this->uploadPath, 600, 600);

                $pImage = new Gallery;
                $pImage->image = $imangeName;
                $pImage->customer_id = $customerId;
                $pImage->save();
            }
        }
    } 
}