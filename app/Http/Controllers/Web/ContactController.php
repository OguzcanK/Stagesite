<?php

namespace App\Http\Controllers\Web;

use App\Contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function show($contact)
    {

        $contact = Contact::findOrFail($contact);

        return view('contact.show', compact('contact'));
    }

    public function create()
    {
        return view('contact.create');
    }
    
    public function edit($contact)
    {
        $contact = Contact::findOrFail($contact);

        return view('contact.edit', compact('contact'));
    }
}
