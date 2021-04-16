<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shortlist extends Model
{
    protected $table = "shortlists";

    public static function isProfileFavourited($shortListedById, $shortListedId)
    {
    	$shortlist = Shortlist::where('shortlisted_by_id', $shortListedById)
								->where('shortlisted_id', $shortListedId)->first();

		return $shortlist ? true : false;
    }

    public function profile()
    {
    	return $this->belongsTo('App\Models\Customer', 'shortlisted_id', 'id');
    }
}
