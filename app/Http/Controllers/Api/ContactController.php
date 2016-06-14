<?php

namespace App\Http\Controllers\API;

use App\Contact;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
 
    private function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:50|min:2',
            'surename' => 'required|max:60|min:2',
            'phonenumber' => 'max:10|min:2',
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validate = $this->validator($input);
        if ($validate->fails()) {
            $this->throwValidationException($request, $validate);
        } else {
            Contact::create($input);
        }
        return redirect(route('contact.index'));
    }

    public function update(Request $request, $contact)
    {
        $input = $request->all();

        $validate = $this->validator($input);
        if ($validate->fails()) {
            $this->throwValidationException($request, $validate);
        } else {

            $contact = Contact::findOrFail($contact);
            $contact->update($input);
        }
        return redirect(route('contact.index'));
    }

    public function destroy($contact)
    {
        $contact = Contact::findOrFail($contact);
        
        if($contact->delete()) {
            return response(1, 200);
        }
        return response(0, 200);
    }


}
