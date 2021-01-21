<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [
        'creator_id', 'topic_details_id', 'privacy_id', 'details', 'tag_id', 'keyword', 'agree', 'disagree',
    ];
}
