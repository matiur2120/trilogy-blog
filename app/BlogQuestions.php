<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogQuestions extends Model
{
    protected $fillable = [
        'blog_post_id',
        'comments_id',
        'question',
        'user_id',

    ];
}


