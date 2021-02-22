<?php

namespace App\Services;

use Log;

/**
 *
 */
class SMSService
{
	public function sendSMS($mobileNo, $message)
	{
		// $number = $mobileNo;
		// $message = urlencode($message);
		// $username = "nesco1";
		// $password = env('SMS_GATEWAY_PASSWORD');
		// $from = "NESCO LTD";
		// $url = "https://api.mobireach.com.bd/SendTextMessage";

		// $param = "Username=$username&Password=$password&From=$from&To=$number&Message=$message";

		// $message = strtoupper(bin2hex(iconv('UTF-8', 'UCS-2BE', $message)));

		// $username = env('SMS_GATEWAY_USERNAME');
		// $password = env('SMS_GATEWAY_PASSWORD');
		// $sid = env('SMS_GATEWAY_SID');

		$url = "https://smsplus.sslwireless.com/api/v3/send-sms";

		$param = "sid=MARRIAGEFAIRNONBRAND&api_token=Marriagefair-06ecbdd7-d6e3-42d1-a5a8-d9d4ede8e62f&msisdn=" . $mobileNo . "&sms=" . urlencode($message) . "&csms_id=" . uniqid();

		$crl = curl_init();
		curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($crl, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($crl, CURLOPT_URL, $url);
		curl_setopt($crl, CURLOPT_HEADER, 0);
		curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($crl, CURLOPT_POST, 1);
		curl_setopt($crl, CURLOPT_POSTFIELDS, $param);
		$response = curl_exec($crl);
		curl_close($crl);

		Log::info("SMS response: " . $response);

		return true;
	}
}
