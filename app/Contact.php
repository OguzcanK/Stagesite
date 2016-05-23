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

    public
    function companies ()
    {
        return $this->hasOne('App\Comapany');
    }

    public
    function internship ()
    {
        return $this->hasMany('App\Internship');
    }

    public
    function users ()
    {
        return $this->hasOne('App\User');
    }
}
