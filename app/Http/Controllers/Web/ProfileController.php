<?php

namespace App\Http\Controllers\Web;

use App\Company;
use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    
    public function index()
    {

        $profile = Contact::findOrFail(Auth::user()->contact_id);
        $company = Company::findOrfail($profile->company_id);

        return view('profile.index', compact('profile', 'company'));
    }
    

    public function edit()
    {
        $profile = Contact::findOrFail(Auth::user()->contact_id);

        return view('profile.edit', compact('profile', 'company'));
    }
}
