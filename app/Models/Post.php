<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'user_id'];

    public function author(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function setUserIdAttribute($value)
    {
        $this->attributes['user_id'] = 1;
    }
}
