<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicDetails extends Model
{
    protected $fillable = [
        'topic_id',
        'topic_category_id',
        'topic_sub_category_id',
        'tag_id',
        'details',
    ];
}
