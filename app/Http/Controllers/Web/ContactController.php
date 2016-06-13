<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }
    
    public function show($contacts){
        
        return view('contact.show', compact('contacts'));
    }
}
