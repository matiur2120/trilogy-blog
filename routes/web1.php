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

Route::group(['prefix'=>'admin', 'middleware'=>['admin', 'auth'], 'namespace'=>'admin'], function(){
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
});
Route::group(['prefix'=>'user', 'middleware'=>['user', 'auth'], 'namespace'=>'user'], function(){
    Route::get('dashboard', 'UserController@index')->name('user.dashboard');
});
Route::group(['prefix'=>'user', 'middleware'=>['user', 'auth'], 'namespace'=>'user'], function(){
    Route::get('dashboard/add/discussion-category', 'CategoryController@disucssionCategory')->name('add.discussion-category');
});
Route::group(['prefix'=>'user', 'middleware'=>['user', 'auth'], 'namespace'=>'user'], function(){
    Route::get('dashboard/add/discussion-category', 'CategoryController@disucssionCategory')->name('add.discussion-category');
});
Route::group(['prefix'=>'user', 'middleware'=>['user', 'auth'], 'namespace'=>'user'], function(){
    Route::post('dashboard/add/discussion-category', 'CategoryController@addDiscussionCategory')->name('add.discussion-category');
});
Route::group(['prefix'=>'user', 'middleware'=>['user', 'auth'], 'namespace'=>'user'], function(){
    Route::post('dashboard/add/discussion-category', 'CategoryController@addDiscussionSubCategory')->name('add.discussion-category');
});
Route::group(['prefix'=>'user', 'middleware'=>['user', 'auth'], 'namespace'=>'user'], function(){
    Route::post('dashboard/add/discussion-category', 'CategoryController@addDiscussionSubCategory')->name('add.discussion-category');
});

//Route for dashboard
//Trilogy group
// Route::get('dashboard/group/all', 'TrilogyGroupController@allGroup')->name('all.group');
Route::group(['prefix'=>'admin', 'middleware'=>['admin', 'auth'], 'namespace'=>'admin'], function(){
    Route::get('dashboard/group', 'TrilogyGroupController@allGroup')->name('all.group');
});
Route::group(['prefix'=>'admin', 'middleware'=>['admin', 'auth'], 'namespace'=>'admin'], function(){
    Route::get('dashboard/group/add', 'TrilogyGroupController@allGroup')->name('all.group');
});
Route::group(['prefix'=>'admin', 'middleware'=>['admin', 'auth'], 'namespace'=>'admin'], function(){
    Route::post('dashboard/group/add', 'TrilogyGroupController@addGroup')->name('all.group');
});


