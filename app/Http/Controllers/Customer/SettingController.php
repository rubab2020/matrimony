<?php
	
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\ShortList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SettingController extends Controller
{
	public function edit()
	{
		return view('website.customer.settings');
	}

	public function update(Request $request)
	{
		$user = User::find(\Auth::user()->id);
        
        if (!$user) 
        	return redirect()->back()
                ->withErrors("User Not found");

        Validator::extend('old_password', function ($attribute, $value, $parameters, $validator) {
            return Hash::check($value, current($parameters));
        },'Current Password is not correct');

        $validator = Validator::make($request->all(), [
            'current_password' => 'required|old_password:' . $user->password,
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|same:new_password|min:8',
        ]);

        if ($validator->fails()) {
        	return redirect()->back()
                ->withErrors($validator->messages());
        }

        $user->password = bcrypt($request->input('new_password'));
        
        if (!$user->save())
        	return redirect()->back()
                ->withErrors("Failed Resetting Password");

       	return back()->with('success', 'Password changed successfully'); 
	}	
}