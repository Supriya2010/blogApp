<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    
    public function comments()
   {
     return $this->hasMany(Comment::class);
   }

}
