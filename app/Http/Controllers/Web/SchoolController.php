<?php

namespace App\Http\Controllers\Web;

use App\School;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Location;

class SchoolController extends Controller
{
	public
	function index ()
	{
		$schools = School::all ();

		return view ('schools.index', compact ('schools'));
	}

	public
	function show ($school)
	{
		$school = School::findOrFail ($school);

		$locations = DB::table ('locations')->where ('school_id', $school->id)->get ();

		foreach ($locations as $location)
		{
			$addresses[] = DB::table ('addresses')->where ('location_id', $location->id)->get ();
		}

		/*foreach ($locations as $location)
		{
			$education_offers[] = DB::table ('education_offers')->where ('location_id', $location->id)->get ();
		}

		if (!empty($education_offers[0]))
		{
			foreach ($education_offers as $array)
			{
				foreach ($array as $education_offer)
				{
					$cohorts[] = DB::table ('cohorts')->where ('id', $education_offer->cohort_id)->get ();
				}
			}

			foreach ($cohorts as $array)
			{
				foreach ($array as $cohort)
				{
					$crebos[] = DB::table ('crebos')->where ('id', $cohort->crebo_id)->get ();
				}
			}
		}
		else
		{
			$education_offers = NULL;
			$cohorts          = NULL;
			$crebos           = NULL;
		}*/

		return view ('schools.show', compact ('school', 'addresses'));
	}

	public
	function edit ($school)
	{
		$school = School::findOrFail ($school);

		return view ('schools.edit', compact ('school'));
	}

	public
	function create ()
	{
		return view ('schools.create');
	}

}
