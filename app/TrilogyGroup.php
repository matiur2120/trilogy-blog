<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrilogyGroup extends Model
{
   
    protected $fillable = [
        'name', 'privacy', 'topic', 'category', 'sub_topic', 'tag', 'description',
    ];
}
