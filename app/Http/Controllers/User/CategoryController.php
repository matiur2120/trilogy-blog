<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\DiscussionCategory;
use App\DiscussionSubCategory;
use App\DiscussionSubCategoryChild;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function disucssionCategory(){
        return view('user.discussion-category');
    }
    public function addDiscussionCategory(Request $request){
        $request->validate([
             'full_name' => 'required',
             'short_name' => 'required',
             'group_id' => 'required',
         ]);
         DiscussionCategory::insert([
             'full_name' => $request->full_name,
             'short_name' => $request->short_name, 
             'group_id' => $request->group_id,
             'user_id' => Auth::user()->id,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Group inserted successfully');
     }
     public function addDiscussionSubCategory(Request $request){
        $request->validate([
             'full_name' => 'required',
             'short_name' => 'required',
             'group_id' => 'required',
             'category_id' => 'required',
         ]);
         DiscussionSubCategory::insert([
             'full_name' => $request->full_name,
             'short_name' => $request->short_name, 
             'group_id' => $request->group_id,
             'category_id' => $request->category_id,
             'user_id' => Auth::user()->id,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Group inserted successfully');
     }

     public function addDiscussionSubCategoryChild(Request $request){
        $request->validate([
             'full_name' => 'required',
             'short_name' => 'required',
             'group_id' => 'required',
             'category_id' => 'required',
             'sub_category_id' => 'required',
         ]);
         DiscussionSubCategoryChild::insert([
             'full_name' => $request->full_name,
             'short_name' => $request->short_name, 
             'group_id' => $request->group_id,
             'category_id' => $request->category_id,
             'sub_category_id' => $request->sub_category_id,
             'user_id' => Auth::user()->id,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Group inserted successfully');
     }
     
}
