<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscussionSubCategory extends Model
{
    protected $fillable = [
        'full_name', 'short_name', 'group_id', 'category_id',
    ];
}