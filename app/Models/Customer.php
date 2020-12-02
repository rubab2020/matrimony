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
}
