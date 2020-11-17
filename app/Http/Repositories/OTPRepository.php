<?php

namespace App\Http\Repositories;

use App;
use App\Models\OTP;

class OTPRepository
{
	public function __construct()
	{
	}

	public function generateOTP($phoneNumber)
	{
		$newOTP = rand(1000, 9999);
		if (App::environment('local')) {
			$newOTP = 1234;
		}

		$OTP = OTP::updateOrCreate(
			['phone_number' => $phoneNumber],
			['otp' => $newOTP]
		);

		return $OTP;
	}

	public function getOTP($phoneNumber, $otp)
	{
		$OTP = OTP::where('phone_number', $phoneNumber)
			->where('otp', $otp)
			->first();

		if ($OTP != null) {
			$OTP->delete();
			return true;
		}

		return false;
	}
}
