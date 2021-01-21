<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscussionCategory extends Model
{
    protected $fillable = [
        'full_name', 'short_name', 'group_id',
    ];
}
