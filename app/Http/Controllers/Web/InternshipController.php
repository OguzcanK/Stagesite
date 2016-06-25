<?php

namespace App\Http\Controllers\Web;

use App\Company;
use App\Contact;
use App\Crebo;
use App\Education_offer;
use App\Internship;
use App\InternshipUser;
use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class InternshipController extends Controller
{
	public
	function create ()
	{
		/*		$company = Contact::all ();

				$companyArray = [];*/

		$education = Education_offer::all ();

		$status = Status::all ();

		$statusArray = [];


		foreach ($status as $state)
		{
			if ($state->categorie_id == 3)
			{
				$statusArray[$state->id] = $state->name;
			}
		}
		foreach ($education as $c)
		{
			$educationArray[$c->id] = $c->name;
		}

		return view ('Internships.create', compact ('educationArray', 'statusArray'));
	}

	public
	function edit ($internship)
	{
		$internship = Internship::findorfail ($internship);

		$education = Education_offer::all ();

		$status = Status::all ();

		$statusArray = [];

		foreach ($status as $state)
		{
			if ($state->categorie_id == 3)
			{
				$statusArray[$state->id] = $state->name;
			}
		}
		foreach ($education as $c)
		{
			$educationArray[$c->id] = $c->name;
		}

		return view ('Internships.edit', compact ('internship', 'statusArray', 'educationArray'));
	}

	public
	function show ($internship)
	{
		$internship = Internship::findorfail ($internship);

		$internshipUsers = DB::table ('internship_users')->where ('internship_id', $internship->id)->get ();
		//$reviews = DB::table ('reviews')->where ('internship_user_id', $internshipUsers->id)->all();
		foreach ($internshipUsers as $review)
		{
			$reviews[] = DB::table ('reviews')->where ('internship_user_id', $review->id)->get ();
		}

		return view ('Internships.show', compact ('internship', 'reviews'));
	}

	public
	function add ($stage)
	{
		if (Auth::user ()->getRole () == 'student')
		{

			$contact = DB::table ('contacts')->where ('id', Auth::user ()->contact_id)->get ();
			dd ($contact);
			DB::table ('contacts')
			  ->where ('id', 1)
			  ->update (['votes' => 1]);
		}
	}
}
