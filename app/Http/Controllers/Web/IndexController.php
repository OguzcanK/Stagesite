<?php

namespace App\Http\Controllers\Web;

use App\Company;
use App\Contact;
use App\Internship;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){

        $companies = Company::all();

        return view('welcome', compact('companies'));
    }
}
