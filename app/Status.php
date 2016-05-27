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
		return $this->belongsToMany ('App\Internship');
	}
	
	public
	function reviews ()
	{
		return $this->belongsToMany ('App\Review');
	}
	
	public
	function tools ()
	{
		return $this->belongsToMany ('App\Tool');
	}
}
