<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GhanaConstitutionAct;
use App\GhanaConstitutionArticle;


class ConstitutionController extends Controller
{
    
    public function index($id){
        $ghana_act = GhanaConstitutionAct::find(['id' => $id])->toArray()[0];
        $constitutionContent1     = GhanaConstitutionArticle::all();  
        $unique                   = $constitutionContent1->sortBy('chapter')->sortBy('priority');
        $constitutionContents     = $unique;
        return view('constitution.ghana_constitution_table', compact('ghana_act', 'constitutionContents'));
    }

    public function constitution_preamble($id){
        $ghana_act = GhanaConstitutionAct::find(['id' => $id])->toArray()[0]; 
        return view('constitution.constitution_preamble', compact('ghana_act'));
    }

    public function constitution_content($id){
        $constitutionContent = GhanaConstitutionArticle::find(['id' => $id])->toArray()[0];
        return view('constitution.constitution_content', compact('constitutionContent'));
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
