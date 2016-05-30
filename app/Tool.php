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
    function internshiptools ()
    {
        return $this->belongsTo('App\Internshiptool');
    }

    public
    function statuses ()
    {
        return $this->belongsToMany('App\Status');
    }
}
