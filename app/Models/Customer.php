<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
  	use Notifiable;

	private static $_uploadPath = 'images/uploads/profiles/';

	protected $guarded = ['id'];

	protected $guard = 'customer';

	protected $hidden = [
	    'password', 'remember_token',
	];

	public static function getUploadPath()
	{
		return static::$_uploadPath;
	}

	public function getAgeAttribute() {
		return \Carbon\Carbon::parse($this->dob)
			->diffInYears(\Carbon\Carbon::now());
	}

	public function getImagesAttribute() {
		return $this->hasMany('App\Models\Gallery', 'customer_id', 'id');
	}
}
