<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    public function blog()
    {
    return $this->belongsTo(Blog::class);

    }
    protected $fillable = ['name','blog_id', 'email','comment']; 
    
}
