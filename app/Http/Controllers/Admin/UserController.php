<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\UserRole;

class UserController extends Controller
{
    public function addUserRole(Request $request){
        $request->validate([
             'user_type_id' => 'required',
             'role_id' => 'required',
             
         ]);
 
         UserRole::insert([
            'user_type_id' => $request->user_type_id, 
             'role_id' => $request->role_id,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'User role inserted successfully');
     }
}
