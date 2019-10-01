<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login_auth extends Authenticatable
{
    protected $table = 'sit.admins'
}
