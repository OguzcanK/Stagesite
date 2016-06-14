<?php

namespace App\Http\Controllers\API;

use App\InternshipUser;
use App\Review;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function store(Request $request){
        $input = $request->all();

        $iusers = DB::table ('internship_users')->insertGetId (
            ['user_id' => 1,
                'internship_id' => $input['internship_id']]
        );

        Review::insert([
            'review' => $input['review'],
            'mark' => $input['mark'],
            'status_id' => 1,
            'internship_user_id' => $iusers
        ]);

        return redirect()->back();
    }
}
