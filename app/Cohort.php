<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
	protected $fillable
		= [
			'name',
			'schoolyear',
		];

	public
	function education_offers ()
	{
		return $this->belongsToMany ('App\Education_offer');
	}

	public
	function crebos ()
	{
		return $this->hasOne ('App\Crebo');
	}
}
