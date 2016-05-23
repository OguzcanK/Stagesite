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
	function locations ()
	{
		return $this->hasOne ('App\Location');
	}

	public
	function companies ()
	{
		return $this->hasOne ('App\Company');
	}

}
