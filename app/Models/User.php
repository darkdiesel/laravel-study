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

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function posts(){
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    // accessors
    public function setPasswordAttribute($password)
    {
        if ($password) {
            $this->attributes['password'] = bcrypt($password);
        }
    }

    public function setFirstNameAttribute($firstName)
    {
        if ($firstName) {
            $this->attributes['first_name'] = ucfirst($firstName);
        }
    }

    public function setLastNameAttribute($lastName)
    {
        if ($lastName) {
            $this->attributes['last_name'] = ucfirst($lastName);
        }
    }

    // getters
    public function getFullNameAttribute()
    {
        return sprintf('%s %s', $this->first_name, $this->last_name);
    }
}
