<?php

namespace App\Http\Controllers\Web;

use App\Company;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    //
    public function index(){
        $company = Company::all();
        return view('company.index', compact('company'));
    }
    
    public function show($company){
        $company = Company::findOrFail($company);
        
        return view('company.show', compact('company'));
    }
    
    public function create(){
        return view('company.create', compact('company'));
    }
    
    public function edit($company){
        $company = Company::findOrFail($company);
        
        return view('company.edit', compact('company'));
    }
}
