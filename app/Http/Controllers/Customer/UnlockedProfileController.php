<?php
	
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;


class UnlockedProfileController extends Controller
{
	public function index()
	{
		$orders = Order::with('unlockedProfiles.profile')->where('user_id', \Auth::user()->id)->get();
		return view('website.customer.unlocked-Profiles', compact('orders'));
	}
}