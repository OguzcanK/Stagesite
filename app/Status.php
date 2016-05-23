<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $fillable = [
		'name',
	];


	public
	function internships ()
	{
		return $this->hasMany ('App\Internship');
	}
	
	public
	function reviews ()
	{
		return $this->hasMany ('App\Review');
	}
	
	public
	function tools ()
	{
		return $this->hasMany ('App\Tool');
	}
}
