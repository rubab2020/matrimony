<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
  use Notifiable;

  protected $guarded = ['id'];

  protected $guard = 'customer';

  protected $hidden = [
    'password', 'remember_token',
  ];
}
