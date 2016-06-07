<?php

namespace App\Http\Controllers\Web;

use App\Company;
use App\Contact;
use App\Internship;
use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class InternshipController extends Controller
{
    public function create(){

        $company = Contact::all();

        $companyArray = [];

        $status = Status::all();

        $statusArray = [];


        foreach($status as $state){
            $statusArray[$state->id] = $state->name;
        }
        foreach($company as $c){
            $companyArray[$c->id] = $c->firstname. " ". $c->surename;
        }
        return view('Internships.create', compact('companyArray', 'statusArray'));
    }

    public function edit($internship){


        $internship = Internship::findorfail($internship);
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

        return view('Internships.edit', compact('internship', 'contactArray', 'statusArray'));
    }

    public function show($internship){
        $internship = Internship::findorfail($internship);
        return view('Internships.show', compact('internship'));

    }
}
