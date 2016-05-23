<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_offer extends Model
{
	protected $fillable
		= [
			'education_id',
			'schoolyear',
		];

	public
	function cohorts ()
	{
		return $this->hasOne('App\Cohort');
	}

	public
	function locations ()
	{
		return $this->hasOne('App\Location');
	}

	public
	function internships ()
	{
		return $this->hasMany('App\Internship');
	}
}
