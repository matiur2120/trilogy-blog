<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubComments extends Model
{
    protected $fillable = [
        'comment_id', 'comment', 'user_id', 'tag_id', 'agree', 'disagree'
    ];
}


