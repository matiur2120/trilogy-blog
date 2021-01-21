<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogQuestionAns extends Model
{
    protected $fillable = [
        'question_id', 'user_id', 'question_ans', 'agree', 'disagree',
    ];
}


