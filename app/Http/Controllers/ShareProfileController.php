<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\SendSMS;

class ShareProfileController extends Controller
{
    public function share(Request $request)
    {
        $phoneNumber   = $request->input('phoneNumber');
        $customer_id = 1;
        $url = url("/profile/" . $customer_id);
        $message = "You have a profile recommendation.Please click the link to watch it : " . $url;

        SendSMS::dispatch($phoneNumber, $message);
    }
}
