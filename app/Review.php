<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'review', 'mark', 'status_id','internship_id',
    ];
}
