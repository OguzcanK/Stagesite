<?php

namespace App\Http\Controllers\Web;

use App\Crebo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CreboController extends Controller
{
    public function edit($crebo) {
		$crebo = Crebo::findOrFail ($crebo);

		return view ('crebos.edit', compact ('crebo'));
	}
	
	public function create($school) {
		return view ('crebos.create', compact ('school'));
	}
}
