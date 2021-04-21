<?php

namespace App\Http\Controllers;

use App;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\OTPRepository;
use App\Jobs\SendSMS;
use App\Models\Customer;

class OTPController extends Controller
{
      private $OTP;

      public function __construct(OTPRepository $OTP)
      {
            $this->OTP = $OTP;
      }

      public function sendOTP(Request $request)
      {
            $OTP = $this->OTP->generateOTP(session('customer')->phone);
            if (!App::environment('local')) {
                  SendSMS::dispatch($OTP->phone_number, __('otp_message', ['otp' => $OTP->otp]));
            }
            return view('website.phone-verification');
            // return response()->json([
            //       "status" => true,
            //       "status_code" => 200,
            //       "data" => [],
            //       "message" => __("OTP has been sent.")
            // ], 200);
      }

      public function resendOTP(Request $request)
      {
            $OTP = $this->OTP->generateOTP(session('customer')->phone);

            if (!App::environment('local')) {
                  SendSMS::dispatch($OTP->phone_number, __('otp_message', ['otp' => $OTP->otp]));
            }
            return response()->json([
                  "status" => true,
                  "status_code" => 200,
                  "data" => [],
                  "message" => __("OTP has been sent.")
            ], 200);
      }

      public function verifyOTP(Request $request)
      {
            if ($this->OTP->getOTP(session('customer')->phone, $request->otp)) {
                  $customer = Customer::where('phone', session('customer')->phone)->first();
                  $customer->phone_verified_at = date('Y-m-d H:i:s');
                  $customer->save();
                  Auth::guard('customer')->login($customer);
                  return redirect('/')->with('success', 'Welcome');
            }
            return redirect('/verify/phone')->withErrors("OTP didn't match. Another OTP has been sent.");
      }
}
