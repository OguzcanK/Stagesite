<?php

namespace App\Http\Controllers\Web;

use App\Company;
use App\Contact;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
	//
	public
	function index ()
	{
		$company = Company::all ();

		return view ('company.index', compact ('company'));
	}

	public
	function show ($company)
	{
		$company = Company::findOrFail ($company);

		$contacten = DB::table ('contacts')->where ('company_id', $company->id)->get ();
		foreach ($contacten as $contact)
		{
			$stages[] = DB::table ('internships')->where ('contact_id', $contact->id)->get ();
			$users = DB::table ('users')->where (['id' => $contact->id, 'role_id' => 3])->get ();
			foreach ($users as $user)
			{
			}
		}
		foreach ($stages as $array)
		{
			foreach ($array as $stage)
			{
				$statusarray   = DB::table ('statuses')->where ('id', $stage->status_id)->pluck ('name');
				$stage->status = $statusarray[0];
			}
		}





		return view ('company.show', compact ('company', 'contacten', 'stages', 'studenten'));
	}

	public
	function create ()
	{
		return view ('company.create', compact ('company'));
	}

	public
	function edit ($company)
	{
		$company = Company::findOrFail ($company);

		return view ('company.edit', compact ('company'));
	}

}
