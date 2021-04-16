<?php
	
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\ShortList;


class ShortlistController extends Controller
{
	public function index()
	{
		$shortlists = ShortList::with('profile')->where('shortlisted_by_id', \Auth::user()->id)->get();

		return view('website.customer.shortlisted-profiles', compact('shortlists'));
	}

	public function destroy($id)
	{
		$shortList = ShortList::findOrFail($id);
		$shortList->delete();

		return back()->with('success', 'Deleted successfully'); 
	}	
}