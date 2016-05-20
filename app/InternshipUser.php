<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipUser extends Model
{
    protected $fillable = [
        'internship_id', 'user_id',
    ];
}
