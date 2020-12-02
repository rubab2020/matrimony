<?php

namespace App\Http\Controllers\Auth;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

        // Attempt to log the user in
        if(Auth::guard('customer')->attempt([
    		'email' => $request->email, 
    		'password' => $request->password
        		
    	])){
            return redirect()->to('/customer/home');
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