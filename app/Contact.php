<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'surename',
        'insertion',
        'firstname',
        'email',
        'phonenumber'
    ];
}
