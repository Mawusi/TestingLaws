<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LawJudgementAct;

class JudgementController extends Controller
{
    //
    public function index(){

        //Query database
        $allLaws = LawJudgementAct::all();

        return view('main_pages.judgement', compact('allLaws'));
    }

    public function supreme_court(){
        return view('nav_judgement.supreme_court');
    }

    public function high_court(){
        return view('nav_judgement.high_court');
    }

    public function court_of_appeal(){
        return view('nav_judgement.court_of_appeal');
    }

    public function circuit_court(){
        return view('nav_judgement.circuit_court');
    }

    public function district_court(){
        return view('nav_judgement.district_court');
    }

    public function international_cases(){
        return view('nav_judgement.international_cases');
    }
}
