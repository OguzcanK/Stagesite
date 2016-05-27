<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
	protected $fillable = [
		'begin',
		'end',
		'status_id',
		'opleidingsaanbod_id',
		'contact_id',
	];

	public
	function contacts ()
	{
		return $this->hasOne('App\Contact');
	}

	public
	function education_offers ()
	{
		return $this->hasMany('App\Education_offer');
	}

	public
	function status ()
	{
		return $this->hasMany('App\Status');
	}

	public
	function intershipusers ()
	{
		return $this->belongsToMany('App\IntershipUser');
	}
}
