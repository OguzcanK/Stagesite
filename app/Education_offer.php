<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education_offer extends Model
{
	protected $fillable
		= [
			'education_id',
			'schoolyear',
			'location_id',
			'cohort_id'
		];

	public
	function cohorts ()
	{
		return $this->belongsTo('App\Cohort');
	}

	public
	function locations ()
	{
		return $this->belongsTo('App\Location');
	}

	public
	function internships ()
	{
		return $this->hasMany('App\Internship');
	}
}
