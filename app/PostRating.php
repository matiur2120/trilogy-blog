<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostRating extends Model
{
    protected $fillable = [
        'blog_post_id', 'user_id', 'rating'
    ];
    
}

