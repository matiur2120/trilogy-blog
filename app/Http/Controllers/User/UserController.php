<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserRating;

class UserController extends Controller
{
    public function index(){
        return view('user.home');
    }

    public function groupDiscussion(){
        return view('user.group-discussion');
    }

    public function groupActivities(){
        return view('user.group-activities');
    }

    public function researchGroup(){
        return view('user.research-group');
    }


    public function addUserRating(Request $request){
        $request->validate([
             'rated_user_id' => 'required',
             'user_id' => 'required',
             'rating' => 'required',
         ]);
         UserRating::insert([
             'rated_user_id' => $request->rated_user_id,
             'user_id' => $request->user_id,
             'rating' => $request->rating,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'user rating inserted successfully');
     }
}




