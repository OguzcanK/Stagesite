<?php

namespace App\Http\Controllers\API;

use App\Cohort;
use App\Crebo;
use App\Education_offer;
use App\Location;
use App\School;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class CreboController extends Controller
{
	private
	function validator ($data = [])
	{
		return Validator::make ($data, [
			'number' => 'required',
			'name'   => 'required',
		]);
	}

	public
	function update (Request $request, $crebo)
	{
		$input = $request->all ();

		$validate = $this->Validator ($input);
		if ($validate->fails ())
		{
			$this->throwValidationException ($request, $validate);
		}
		else
		{
			//$locations = DB::table ('addresses')->where ('id', $address->id)->get ('location_id');
			$cohort = Cohort::where ('crebo_id', $crebo)->pluck ('id')->first();

			$locationid = Education_offer::where ('cohort_id', $cohort)->pluck ('location_id')->first();

			$schoolid = Location::where ('id', $locationid)->pluck('school_id')->first();

			$school = School::findorfail($schoolid);

			$crebo = Crebo::findorFail($crebo);
			$crebo->update ($input);
		}

		return redirect (route ('school.show', compact ('school')));
	}

	public
	function store (Request $request)
	{
		$input    = $request->all ();
		$validate = $this->validator ($input);
		if ($validate->fails ())
		{
			$this->throwValidationException ($request, $validate);
		}
		else
		{
			$crebo = Crebo::create($input);
			dd($crebo);
		}

		return redirect (route ('school.show', compact ('school')));
	}
}
