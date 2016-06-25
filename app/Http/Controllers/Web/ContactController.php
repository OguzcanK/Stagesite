<?php

namespace App\Http\Controllers\Web;

use App\Company;
use App\Contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function show($contact)
    {

        $contact = Contact::findOrFail($contact);
        $company = Company::findOrFail($contact->company_id);

        return view('contact.show', compact('contact', 'company'));
    }

    public function create()
    {
        $companies = Company::all ();

        foreach ($companies as $company)
        {
            $companyArray[$company->id] = $company->name;
        }
        return view('contact.create', compact('contact', 'companyArray'));

    }
    
    public function edit($contact)
    {

        $companies = Company::all ();

		foreach ($companies as $company)
        {
                $companyArray[$company->id] = $company->name;
        }

        $contact = Contact::findOrFail($contact);

        return view('contact.edit', compact('contact', 'companyArray'));
    }
}
