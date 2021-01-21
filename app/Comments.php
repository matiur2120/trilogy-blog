<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'blog_post_id', 'user_id', 'comment', 'tag_id', 'topic_sub_category_id', 
    ];
}



