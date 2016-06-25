<?php

namespace App\Http\Controllers\API;

use App\Company;
use App\Internship;
use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InternshipController extends Controller
{
    public function store(Request $request){

        $input = $request->all();
        $input['contact_id'] = Auth::user()->contact_id;
        dd($input);
        $status_id = Status::findorfail($input['status_id']);

        $contact_id = Company::findorfail($input['contact_id']);
        Internship::insert(
            [
                'begin' => $input['begin'],
                'end' => $input['end'],
                'contact_id' => $contact_id->id,
                'status_id' => $status_id->id
            ]);

        $company = Company::all();

        return redirect (route ('welcome'), compact('company'));

//        return view('master', compact('company'));
    }

    public function update(Request $request, $internship){
        $input = $request->all();
        $input['contact_id'] = Auth::user()->contact_id;
        $internship = Internship::findorfail($internship);
        $status_id = Status::findorfail($input['status_id']);

        $contact_id = Company::findorfail($input['contact_id']);

        $internship->update($input);
        return redirect (route ('index'));
    }

    public
    function destroy ($internship)
    {

        if (Internship::destroy ($internship))
        {
            return redirect (route ('index'));
        }

        return response (0, 200);
    }
    
}
