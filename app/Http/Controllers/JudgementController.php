<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupremeCourtJudgement;
use App\HighCourtJudgement;


class JudgementController extends Controller
{
    // ALL LAW JUDGEMENT
    public function index(){
        $supremeCourts = SupremeCourtJudgement::all();
        $highCourts = HighCourtJudgement::all();
        // $courtOfAppeal =
        // $circuitCourt = 
        // $districtCourt =
        // $internationalCases =
        return view('law_judgement.index', compact('supremeCourts', 'highCourts'));
    }

    //SUPREME COURT
    public function supreme_court(){
        $supremeCourts = SupremeCourtJudgement::all();
        return view('law_judgement.supreme_court', compact('supremeCourts'));
    }

    public function supreme_court_case($id){
        $supremeCourt = SupremeCourtJudgement::find(['id' => $id])->toArray()[0];
        $supremeCourts = SupremeCourtJudgement::all();
        return view('law_judgement.supreme_court_case', compact('supremeCourt', 'supremeCourts'));
    }

    public function supreme_court_case_view($id){
        $supremeCourt = SupremeCourtJudgement::find(['id' => $id])->toArray()[0];
        return view('law_judgement.supreme_court_case_view', compact('supremeCourt'));
    }

    //HIGH COURT
    public function high_court(){
        $highCourts = HighCourtJudgement::all();
        return view('law_judgement.high_court', compact('highCourts'));
    }

    public function high_court_case($id){
        $highCourt = HighCourtJudgement::find(['id' => $id])->toArray()[0];
        $highCourts = HighCourtJudgement::all();
        return view('law_judgement.high_court_case', compact('highCourt','highCourts'));
    }

    public function high_court_case_view($id){
        $highCourt = HighCourtJudgement::find(['id' => $id])->toArray()[0];
        return view('law_judgement.high_court_case_view', compact('highCourt'));
    }





























    // public function supreme_court(){
    //     return view('nav_judgement.supreme_court');
    // }

    // public function high_court(){
    //     return view('nav_judgement.high_court');
    // }

    // public function court_of_appeal(){
    //     return view('nav_judgement.court_of_appeal');
    // }

    // public function circuit_court(){
    //     return view('nav_judgement.circuit_court');
    // }

    // public function district_court(){
    //     return view('nav_judgement.district_court');
    // }

    // public function international_cases(){
    //     return view('nav_judgement.international_cases');
    // }
}
