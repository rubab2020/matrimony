<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\ConfigHelper;
use App\Http\Helpers\CustomHelper;
use App\Models\Customer;

class SearchController extends Controller
{
	public function search(Request $request) 
	{
		$educations = ConfigHelper::getEducationList();
		$occupations = ConfigHelper::getOccupationList();
		$districts = ConfigHelper::getDistrictList();
		$martialStatuses = ConfigHelper::getMaritalStatuses();

		$profiles = $this->applyFilters($request->all());
		// dd($profiles);

		$religions = ConfigHelper::getReligionList();
    	return view('website.search', compact(
    		'religions',
    		'educations',
    		'occupations',
    		'districts',
    		'martialStatuses',
    		'profiles'
    	));
	}

	public function applyFilters($filters)
	{
		$profiles = Customer::where('email_verified_at', '!=', null);

		foreach($filters as $filterName=> $value){
			if($value != null && $value = ""){
				if($filterName == 'candidate_type'){
					$profiles->where('gender', $value);
				}
				else if($filterName == 'profile_picture_with'){
					$profiles->where('profile_picture', '!=', null);
				}
				else if($filterName == 'profile_picture_without'){
					$profiles->where('profile_picture', '!=', null)
							->orWhere('profile_picture', null);
				}
				else if($filterName == 'profile_id'){
					$profiles->where('profile_id', $value);
				}
				else if($filterName == 'expect_age_start'){
					$dob = \Carbon\Carbon::now()->subYears($value)->format('y-m-d');
					$profiles->where('dob', '>=', $dob);
				}
				else if($filterName == 'expect_age_end'){
					$dob = \Carbon\Carbon::now()->subYears($value)->format('y-m-d');
					$profiles->where('dob', '<=', $dob);
				}
				else if($filterName == 'expect_height_start'){
					$profiles->where('height', '>=', $value);
				}
				else if($filterName == 'expect_height_end'){
					$profiles->where('height', '<=', $value);
				}
				else if($filterName == 'districts'){
					$profiles->whereIn('per_district', $value); // value containts array
				}
				else if($filterName == 'occupations'){
					$profiles->whereIn('occupation', $value); // value containts array
				}
				else if($filterName == 'educations'){
					$profiles->whereIn('highest_education', $value); // value containts array
				}
				else if($filterName == 'religion'){
					$profiles->where('religions', $value); // value contains array
				}
				else if($filterName == 'marital_status'){
					$profiles->where('marital_status', $value);
				}	
			}
		}

		$profiles = $profiles
			->select(
				'name',
				'profile_picture',
				'profile_id',
				'occupation',
				'about',
				'dob',
				'gender',
				'height',
				'highest_education',
				'religion',
				'caste',
				'pre_city',
				'pre_country'
			)
			->paginate(10);

		return $profiles;
	}
}