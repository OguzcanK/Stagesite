<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $fillable = [
		'school_id',
	];
	
	public
	function schools ()
	{
		return $this->hasOne('App\School');
	}

	public
	function education_offers ()
	{
		return $this->belongsToMany('App\Education_offer');
	}
	public
	function addresses ()
	{
		return $this->belongsToMany('App\Addres');
	}
}
