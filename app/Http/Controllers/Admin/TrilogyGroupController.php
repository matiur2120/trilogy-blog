<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\TrilogyGroup;
use App\GroupModarator;
use App\GroupUser;


class TrilogyGroupController extends Controller
{
    public function allGroup (){
        return view('admin.group.index');
    }
    public function addGroup(Request $request){
       $request->validate([
            'name' => 'required',
            'description' => 'required|min:20',
        ]);

       $trilogyGroup = TrilogyGroup::insert([
            'name' => $request->name,
            'privacy' => $request->privacy, 
            'topic' => $request->topic,
            'category' => $request->category,
            'sub_topic' => $request->sub_topic,
            'tag' => $request->tag,
            'description' => $request->description,
            'created_at' => Carbon::now(),
    
        ]);

        return Redirect()->back()->with('success', 'Group inserted successfully');
    }

    public function addGroupModerator(Request $request){
        $request->validate([
             'group_id' => 'required',
             'user_id' => 'required',
             
         ]);
 
         GroupModarator::insert([
             'group_id' => $request->group_id,
             'user_id' => $request->user_id, 
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Group Moderator inserted successfully');
     }

     public function addGroupUser(Request $request){
        $request->validate([
             'group_id' => 'required',
             'user_id' => 'required',
             
         ]);
 
         GroupUser::insert([
            'user_id' => $request->user_id, 
             'group_id' => $request->group_id,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Group user inserted successfully');
     }

  
}

