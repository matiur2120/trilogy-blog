<?php

namespace App\Http\Controllers;
use App\TrilogyGroup;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        $trilogyGroup = TrilogyGroup::all();
        return view('pages.index', compact('trilogyGroup'));
    }
    public function researchGroup(){
        return view('user.research-group');
    }
}
