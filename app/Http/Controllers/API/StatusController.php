<?php

namespace App\Http\Controllers\API;

use App\Categorie;
use App\Company;
use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function store(Request $request){
        $input = $request->all();
        $categorie_id = Categorie::findorfail($input['categorie_id']);
        Status::insert(
            [
                'name' => $input['name'],
                'categorie_id' => $categorie_id->id
            ]);

        $company = Company::all();
        return view('welcome', compact('company'));
    }
}
