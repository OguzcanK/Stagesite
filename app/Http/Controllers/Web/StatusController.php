<?php

namespace App\Http\Controllers\Web;

use App\Status;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function create(){


        return view('status.create');
    }

    public function show(){
        $status = Status::all();


        $statusArray = [];

        foreach($status as $state){
            $statusArray[$state->id] = $state->name;
        }

        return view('status.show', compact('statusArray'));
    }
}
