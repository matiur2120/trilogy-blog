<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Departments;
use App\Privacy;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function addDepartment(Request $request){
        $request->validate([
             'name' => 'required',
         ]);
 
       Departments::insert([
             'name' => $request->name,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Department inserted successfully');
     }

     public function addPrivacy(Request $request){
        $request->validate([
             'name' => 'required',
         ]);
 
       Privacy::insert([
             'name' => $request->name,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Privacy inserted successfully');
     }
}
