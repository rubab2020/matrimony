<?php

namespace App\Http\Controllers\Auth;

use Hash;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class RegisterController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:customers|max:255',
            'password' => 'required|min:8',
            'phone' => 'required|size:11',
        ]);



        try {
            $profileId = IdGenerator::generate(['table' => 'customers', 'field'=> 'profile_id', 'length' => 10, 'prefix' =>'P']);
            
            $customer = Customer::create([
                'profile_id' => $profileId,
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'profile_for' => $request->input('profile_for'),
                'phone' => $request->input('phone'),
                'dob' => $request->input('dob'),
                'gender' => $request->input('gender'),
                'religion' => $request->input('religion'),
                'caste' => $request->input('caste'),
                'password' => Hash::make($request->input('password'))
            ]);

            session(['customer' => $customer]);
        } catch (\Exception $e) {
            return redirect()->back()
                ->withErrors("Something went wrong");
        }

        return redirect('/verify/phone')
            ->with('success', "Please verify your mobile number.");
    }
}
