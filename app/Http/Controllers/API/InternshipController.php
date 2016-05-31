<?php

namespace App\Http\Controllers\API;

use App\Company;
use App\Internship;
use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InternshipController extends Controller
{
    public function store(Request $request){
        $input = $request->all();

        $status_id = Status::findorfail($input['status_id']);

        $contact_id = Company::findorfail($input['contact_id']);
        Internship::insert(
            [
                'begin' => $input['begin'],
                'end' => $input['end'],
                'contact_id' => $contact_id->id,
                'status_id' => $status_id->id
            ]);

        $companies = Company::all();
        return view('welcome', compact('companies'));
    }
}
