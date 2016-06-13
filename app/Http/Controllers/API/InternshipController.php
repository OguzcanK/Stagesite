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

    public function update(Request $request, $internship){
        $input = $request->all();
        $internship = Internship::findorfail($internship);
        $status_id = Status::findorfail($input['status_id']);

        $contact_id = Company::findorfail($input['contact_id']);

        $internship->update($input);
        $company = Company::all();
        return view('welcome', compact('company'));
    }

    public function destroy($internship){
        if($internship->delete()) {
            return response(1, 200);
        }


        return response(0, 200);
    }
}
