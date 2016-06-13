<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'surename',
        'insertion',
        'firstname',
        'email',
        'phonenumber',
        'company_id'
    ];

    public
    function companies ()
    {
        return $this->belongsTo('App\Company');
    }

    public
    function internships ()
    {
        return $this->hasMany('App\Internship');
    }

    public
    function users ()
    {
        return $this->belongsTo('App\User');
    }
}
