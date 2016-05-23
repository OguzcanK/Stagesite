<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

	public
	function schools ()
	{
		return $this->hasOne('App\School');
	}
	
}
