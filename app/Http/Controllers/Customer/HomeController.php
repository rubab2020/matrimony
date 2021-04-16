<?php
	
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use App\Models\ShortList;
use App\Models\Order;

class HomeController extends Controller
{
	public function index()
	{
		$shortlistedProfiles = ShortList::where('shortlisted_by_id', \Auth::user()->id)->count();
		$pendingProfiles = 0;
		$acceptedProfiles = 0;
		$rejectedProfiles = 0;

		$orders = Order::with('unlockedProfiles.profile')->where('user_id', \Auth::user()->id)->get();

		foreach($orders as $order){
			foreach($order->unlockedProfiles as $unlockedProfile){
				if($unlockedProfile->is_approved && $order->payment_status === "PAID")
					$acceptedProfiles++;
				else if(!$unlockedProfile->is_approved && $order->payment_status === "PAID")
					$rejectedProfiles++;
				else
					$pendingProfiles++;
			}
		}

		return view('website.customer.home', compact('shortlistedProfiles', 'pendingProfiles', 'acceptedProfiles', 'rejectedProfiles'));
	}
}