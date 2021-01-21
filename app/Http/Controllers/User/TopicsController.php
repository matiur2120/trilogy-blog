<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Topics;
use App\TopicsCategory;
use App\TopicDetails;
use Carbon\Carbon;

class TopicsController extends Controller
{
    public function addTopics(Request $request){
        $request->validate([
             'topic_name' => 'required',
         ]);
         Topics::insert([
             'topic_name' => $request->topic_name,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Topic inserted successfully');
     }

     public function addTopicsCategory(Request $request){
        $request->validate([
             'name' => 'required',
         ]);
         TopicsCategory::insert([
             'name' => $request->name,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Topic category inserted successfully');
     }

     public function addTopicsSubCategory(Request $request){
        $request->validate([
             'name' => 'required',
         ]);
         TopicsCategory::insert([
             'name' => $request->name,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Topic category inserted successfully');
     }

     public function addTopicsDetails(Request $request){
        $request->validate([
             'topic_id' => 'required',
             'topic_category_id' => 'required',
             'topic_sub_category_id' => 'required',
             'tag_id' => 'required',
             'details' => 'required',
         ]);
         TopicDetails::insert([
             'topic_id' => $request->topic_id,
             'topic_category_id' => $request->topic_category_id,
             'topic_sub_category_id' => $request->topic_sub_category_id,
             'tag_id' => $request->tag_id,
             'details' => $request->details,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Topic details inserted successfully');
     }
}
