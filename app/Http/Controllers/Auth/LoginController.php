<?php

namespace App\Http\Controllers\Auth;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class LoginController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }

    public function login(Request $request)
    {
        // Validate form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = Customer::where('email', $request->email)->select('phone_verified_at')->first();

        if(!$user)
            return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors('This Account is not registered');
        if($user->phone_verified_at == null)
            return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors('You have not verified your phone number');

        // Attempt to log the user in
        if(Auth::guard('customer')->attempt([
    		'email' => $request->email, 
    		'password' => $request->password
        		
    	])){
            return redirect()->to('/home');
        }

        // if unsuccessful
        return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors('Login failed. Email and password don\'t match.');
    }

    public function logout()
    {
        Auth::guard('customer')->logout();

        return redirect()->to('/');
    }
}