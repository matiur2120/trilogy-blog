<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BlogPost;
use App\PostRating;
use App\BlogQuestionAns;
use App\SubComments;
use App\BlogQuestions;
use App\Comments;
use App\Tags;

class PostController extends Controller
{
    public function addBlogPost(Request $request){
        $request->validate([
             'creator_id' => 'required',
             'topic_details_id' => 'required',
             'privacy_id' => 'required',
             'details' => 'required',
             'tag_id' => 'required',
         ]);
         BlogPost::insert([
             'creator_id' => $request->creator_id,
             'topic_details_id' => $request->topic_details_id,
             'privacy_id' => $request->privacy_id,
             'details' => $request->details,
             'tag_id' => $request->tag_id,
             'keyword' => $request->keyword,
             'agree' => $request->agree,
             'disagree' => $request->disagree,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Topic inserted successfully');
     }


     public function addPostRating(Request $request){
        $request->validate([
             'blog_post_id' => 'required',
             'user_id' => 'required',
             'rating' => 'required',
         ]);
         PostRating::insert([
             'blog_post_id' => $request->blog_post_id,
             'user_id' => $request->user_id,
             'rating' => $request->rating,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Topic inserted successfully');
     }

     public function blogQuestionAns(Request $request){
        $request->validate([
             'question_id' => 'required',
             'user_id' => 'required',
             'rating' => 'required',
         ]);
         BlogQuestionAns::insert([
             'question_id' => $request->question_id,
             'user_id' => $request->user_id,
             'question_ans' => $request->question_ans,
             'agree' => $request->agree,
             'disagree' => $request->disagree,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'Topic inserted successfully');
     }

     public function addSubcomment(Request $request){
        $request->validate([
             'comment_id' => 'required',
             'comment' => 'required',
             'user_id' => 'required',
             'tag_id' => 'required',
         ]);
         SubComments::insert([
             'comment_id' => $request->comment_id,
             'comment' => $request->comment,
             'user_id' => $request->user_id,
             'tag_id' => $request->tag_id,
             'agree' => $request->agree,
             'disagree' => $request->disagree,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'subcomment inserted successfully');
     }

     public function addBlogQuestion(Request $request){
        $request->validate([
             'blog_post_id' => 'required',
             'comments_id' => 'required',
             'question' => 'required',
         ]);
         BlogQuestions::insert([
             'blog_post_id' => $request->blog_post_id,
             'comments_id' => $request->comments_id,
             'question' => $request->question,
             'user_id' => $request->user_id,
             'agree' => $request->agree,
             'disagree' => $request->disagree,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'subcomment inserted successfully');
     }

     public function addComment(Request $request){
        $request->validate([
             'blog_post_id' => 'required',
             'user_id' => 'required',
             'comment' => 'required',
         ]);
         Comments::insert([
             'blog_post_id' => $request->blog_post_id,
             'user_id' => $request->user_id,
             'comment' => $request->comment,
             'tag_id' => $request->tag_id,
             'topic_sub_category_id' => $request->topic_sub_category_id,
             'agree' => $request->agree,
             'disagree' => $request->disagree,
             'created_at' => Carbon::now(),
     
         ]);
 
         return Redirect()->back()->with('success', 'subcomment inserted successfully');
     }

     public function addTag(Reqeust $request){
         $request->validate([
             'tag_name' => 'required'
         ]);
         Tags::insert([
             'tag_name' => $request->tag_name,
         ]);
     }



}



