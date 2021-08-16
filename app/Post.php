<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id','title', 'excerpt', 'body'
    ];

    public function user(){
        return $this->belongsTo(user::class);
    }
    // many to many relationships
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}

