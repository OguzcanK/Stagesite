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
        return $this->belongsTo('App\Comapany');
    }

    public
    function internship ()
    {
        return $this->belongsToMany('App\Internship');
    }

    public
    function users ()
    {
        return $this->belongsTo('App\User');
    }
}
