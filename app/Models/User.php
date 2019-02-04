<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // accessors
    function setPasswordAttribute($password)
    {
        if ($password) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    function setFirstNameAttribute($firstName)
    {
        if ($firstName) {
            $this->attributes['first_name'] = ucfirst($firstName);
        }
    }

    function setLastNameAttribute($lastName)
    {
        if ($lastName) {
            $this->attributes['last_name'] = ucfirst($lastName);
        }
    }

    // getters
    function getFullNameAttribute()
    {
        return sprintf('%s %s', $this->first_name, $this->last_name);
    }
}
