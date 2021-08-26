<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['description'];

    public function comments()
    {
       return $this->hasMany('\App\Comment');
    }    
    
}
