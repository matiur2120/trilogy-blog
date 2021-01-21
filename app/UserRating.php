<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRating extends Model
{
    protected $fillable = [
        'rated_user_id', 'user_id', 'rating',
    ];
}


