<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipUser extends Model
{
	protected $fillable = [
		'internship_id',
		'user_id',
	];

	public
	function internship ()
	{
		return $this->hasOne ('App\Internship');
	}

	public
	function users ()
	{
		return $this->hasOne ('App\User');
	}
}
