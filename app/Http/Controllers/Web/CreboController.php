<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CreboController extends Controller
{
    public function edit($crebo) {
		$crebo = School::findOrFail ($crebo);

		return view ('crebo.edit', compact ('crebo'));
	}
	
	public function create() {
		
	}
}
