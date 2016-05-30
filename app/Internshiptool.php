<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internshiptool extends Model
{
	protected $fillable = [
		'tool_id',
		'internship_user_id',
		'company_id',
	];

	public
	function tools ()
	{
		return $this->hasOne ('App\Tool');
	}

	public
	function internship_users ()
	{
		return $this->hasOne ('App\InternshipUser');
	}

	public
	function companies ()
	{
		return $this->hasOne ('App\Company');
	}
}
