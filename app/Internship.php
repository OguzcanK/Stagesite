<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $fillable = [
        'begin', 'end', 'status_id', 'opleidingsaanbod_id', 'contact_id',
    ];
}
