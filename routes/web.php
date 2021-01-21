<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PagesController@index')->name('index');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//Admin group controller for admin dashboard
Route::group(['prefix'=>'admin', 'middleware'=>['admin', 'auth'], 'namespace'=>'admin'], function(){
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('dashboard/group', 'TrilogyGroupController@allGroup')->name('all.group');
    Route::get('dashboard/group/add', 'TrilogyGroupController@allGroup')->name('all.group');
    Route::post('dashboard/group/add', 'TrilogyGroupController@addGroup')->name('all.group');
});

//User group controller
Route::group(['prefix'=>'user', 'middleware'=>['user', 'auth'], 'namespace'=>'user'], function(){
    Route::get('dashboard', 'UserController@index')->name('user.dashboard');
    Route::get('dashboard/group-discussion', 'UserController@groupDiscussion')->name('user.group-discussion');
    Route::get('dashboard/research-group', 'UserController@researchGroup')->name('research-group');

    //Route for discussion category start
    Route::get('dashboard/add/discussion-category', 'CategoryController@disucssionCategory')->name('add.discussion-category');

    Route::get('dashboard/add/discussion-category', 'CategoryController@disucssionCategory')->name('add.discussion-category');

    Route::post('dashboard/add/discussion-category', 'CategoryController@addDiscussionCategory')->name('add.discussion-category');

    Route::post('dashboard/add/discussion-category', 'CategoryController@addDiscussionSubCategory')->name('add.discussion-category');

    Route::post('dashboard/add/discussion-category', 'CategoryController@addDiscussionSubCategoryChild')->name('add.discussion-category');
    //Route for discussion category end
    Route::get('dashboard/group-activities', 'UserController@groupActivities')->name('group-activities');

});




