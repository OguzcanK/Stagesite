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
	
}
