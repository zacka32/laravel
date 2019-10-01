<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login_authadmin extends Authenticatable
{
    protected $table = 'sit.admins'
}
