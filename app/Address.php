<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $fillable
		= [
			'street',
			'postcode',
			'state',
			'streetnumber',
		];

	public
	function schools ()
	{
		return $this->hasOne('App\Shool');
	}

	public
	function education_offers ()
	{
		return $this->hasMany('App\Education_offer');
	}
}
