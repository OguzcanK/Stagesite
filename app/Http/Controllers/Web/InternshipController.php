<?php

namespace App\Http\Controllers\Web;

use App\Company;
use App\Contact;
use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InternshipController extends Controller
{
    public function create(){

        $contacts = Contact::all();

        $contactArray = [];

        $status = Status::all();

        $statusArray = [];

        foreach($status as $state){
            $statusArray[$state->id] = $state->name;
        }
        foreach($contacts as $contact){
            $contactArray[$contact->id] = $contact->firstname ." ". $contact->surename;
        }
        return view('Internships.create', compact('contactArray', 'statusArray'));
    }
}
