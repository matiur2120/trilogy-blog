<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupModarator extends Model
{
    protected $fillable = [
        'group_id', 'user_id',
    ];
}
