<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
	protected $fillable = [
		'begin',
		'end',
		'status_id',
		'education_offer_id',
		'contact_id',
		'status_id'
	];

	public
	function contacts ()
	{
		return $this->belongsTo('App\Contact');
	}

	public
	function education_offers ()
	{
		return $this->belongsTo('App\Education_offer');
	}

	public
	function status ()
	{
		return $this->belongsTo('App\Status');
	}

	public
	function intershipusers ()
	{
		return $this->hasMany('App\IntershipUser');
	}
}
