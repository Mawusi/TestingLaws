<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SupremeCourtJudgement;
use App\HighCourtJudgement;
use App\CourtOfAppealJudgement;
use App\CircuitCourtJudgement;
use App\DistrictCourtJudgement;
use App\InternationalCasesjudgement;
use App\LawJudgementCategory;

class JudgementController extends Controller
{
    // ALL LAW JUDGEMENT
    public function index(){
        $supremeCourts = SupremeCourtJudgement::all();
        $highCourts = HighCourtJudgement::all();
        $courtOfAppeals = CourtOfAppealJudgement::all();
        $circuitCourts = CircuitCourtJudgement::all();
        $districtCourts = DistrictCourtJudgement::all();
        // $internationalCases = InternationalCasesjudgement::all();
        $categories     = LawJudgementCategory::all();
        return view('law_judgement.index', compact('supremeCourts', 'highCourts', 'circuitCourts','courtOfAppeals', 'districtCourts','categories'));
    }

    // Filtering
    public function index_filter($year, $category){
        $bool = false;
        $where = array();
        if($year != "0"){   
            $where['year'] = $year;
            $bool = true;
        }
        if($category != "0"){   
            $where['law_judgement_category_name'] = $category;
            $bool = true;
        }

        $supremeCourts       = ($bool)?SupremeCourtJudgement::where($where)->get():SupremeCourtJudgement::all();
        $highCourts = ($bool)?HighCourtJudgement::where($where)->get():HighCourtJudgement::all();
        $courtOfAppeals = ($bool)?CourtOfAppealJudgement::where($where)->get():CourtOfAppealJudgement::all();
        $circuitCourts = ($bool)?CircuitCourtJudgement::where($where)->get():CircuitCourtJudgement::all();
        $districtCourts = ($bool)?DistrictCourtJudgement::where($where)->get():DistrictCourtJudgement::all();
        $categories     = LawJudgementCategory::all();
        return view('law_judgement.index', compact('supremeCourts', 'highCourts', 'circuitCourts','courtOfAppeals', 'districtCourts','categories'));
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


    //COURT OF APPEAL
    public function court_of_appeal(){
        $courtOfAppeals = CourtOfAppealJudgement::all();
        return view('law_judgement.court_of_appeal', compact('courtOfAppeals'));
    }

    public function court_of_appeal_case($id){
        $courtOfAppeal = CourtOfAppealJudgement::find(['id' => $id])->toArray()[0];
        $courtOfAppeals = CourtOfAppealJudgement::all();
        return view('law_judgement.court_of_appeal_case', compact('courtOfAppeal','courtOfAppeals'));
    }

    public function court_of_appeal_case_view($id){
        $courtOfAppeal = CourtOfAppealJudgement::find(['id' => $id])->toArray()[0];
        return view('law_judgement.court_of_appeal_case_view', compact('courtOfAppeal'));
    }

    //CIRCUIT COURT
    public function circuit_court(){
        $circuitCourts = CircuitCourtJudgement::all();
        return view('law_judgement.circuit_court', compact('circuitCourts'));
    }

    public function circuit_court_case($id){
        $circuitCourt = CircuitCourtJudgement::find(['id' => $id])->toArray()[0];
        $circuitCourts = CircuitCourtJudgement::all();
        return view('law_judgement.circuit_court_case', compact('circuitCourt','circuitCourts'));
    }

    public function circuit_court_case_view($id){
        $circuitCourt = CircuitCourtJudgement::find(['id' => $id])->toArray()[0];
        return view('law_judgement.circuit_court_case_view', compact('circuitCourt'));
    }


    //DISTRICT COURT
    public function district_court(){
        $districtCourts = DistrictCourtJudgement::all();
        return view('law_judgement.district_court', compact('districtCourts'));
    }

    public function district_court_case($id){
        $districtCourt = DistrictCourtJudgement::find(['id' => $id])->toArray()[0];
        $districtCourts = DistrictCourtJudgement::all();
        return view('law_judgement.district_court_case', compact('districtCourt','districtCourts'));
    }

    public function district_court_case_view($id){
        $districtCourt = DistrictCourtJudgement::find(['id' => $id])->toArray()[0];
        return view('law_judgement.district_court_case_view', compact('districtCourt'));
    }

    //INTERNATIONAL CASES
    public function international_cases(){
        $internationalCases = InternationalCasesjudgement::all();
        return view('law_judgement.international_cases', compact('internationalCases'));
    }

    public function international_case_title($id){
        $internationalCase = InternationalCasesjudgement::find(['id' => $id])->toArray()[0];
        $internationalCases = InternationalCasesjudgement::all();
        return view('law_judgement.international_cases_title', compact('internationalCase','internationalCases'));
    }

    public function international_cases_view($id){
        $internationalCase = InternationalCasesjudgement::find(['id' => $id])->toArray()[0];
        return view('law_judgement.international_cases_view', compact('internationalCase'));
    }
}
