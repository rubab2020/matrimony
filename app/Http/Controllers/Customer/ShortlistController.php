<?php
	
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\ShortList;


class ShortlistController extends Controller
{
	public function index()
	{
		$shortlists = ShortList::with('profile')->get();

		return view('website.customer.shortlisted-profiles', compact('shortlists'));
	}

	public function destroy($id)
	{
		$shortList = ShortList::findOrFail($id);
		$shortList->delete();

		return back()->with('success', 'Deleted successfully'); 
	}	
}