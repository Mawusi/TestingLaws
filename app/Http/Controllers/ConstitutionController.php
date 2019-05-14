<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstitutionController extends Controller
{
    //
    public function index(){
        return view('constitution.constitution');
    }

    public function ghana(){
        return view('constitution.ghana');
    }
































    public function africa(){
        return view('nav_constitution.africa');
    }

    public function europe(){
        return view('nav_constitution.europe');
    }

    public function asia(){
        return view('nav_constitution.asia');
    }

    public function america(){
        return view('nav_constitution.america');
    }
}
