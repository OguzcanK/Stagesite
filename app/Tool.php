<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];


    public
    function statuses ()
    {
        return $this->hasOne('App\Status');
    }
}
