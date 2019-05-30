<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GhanaConstitutionAct;
use App\GhanaConstitutionArticle;
use App\AllCountriesConstitution;


class ConstitutionController extends Controller
{
    //Ghana's Constitution
    public function constitution_table($id){
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
    public function expanded_view($id){
        $ghana_act = GhanaConstitutionAct::find(['id' => $id])->toArray()[0];
        return view('constitution.expandedView', compact('ghana_act'));
    }

    //Ghana's Amended Constitution
    public function constitution_amended_table($id){
        $ghana_act = GhanaConstitutionAct::find(['id' => $id])->toArray()[0];
        $constitutionContent1     = GhanaConstitutionArticle::all();  
        $unique                   = $constitutionContent1->sortBy('chapter')->sortBy('priority');
        $constitutionContents     = $unique;
        return view('constitution.ghana_constitution_amended_table', compact('ghana_act', 'constitutionContents'));
    }

    //All Countries Constitution
    public function all_countries_constitution(){
        $allConstitutions = AllCountriesConstitution::all();
        return view('constitution.all_countries', compact('allConstitutions'));
    }
    public function all_constitution_acts_title($id){
        $allConstitution = AllCountriesConstitution::find(['id' => $id])->toArray()[0];
        $allConstitutions = AllCountriesConstitution::all();
        return view('constitution.all_countries_table', compact('allConstitutions', 'allConstitution'));
    }

    //Africa Constitution
    public function africa_constitution($id){
        $africaConstitutions    = AllCountriesConstitution::where(['all_continent_name' => $id])->get();
        return view('constitution.africa', compact('africaConstitutions'));
    }
    //Asia Constitution
    public function asia_constitution($id){
        $asiaConstitutions    = AllCountriesConstitution::where(['all_continent_name' => $id])->get();
        return view('constitution.asia', compact('asiaConstitutions'));
    }
    //Europe Constitution
    public function europe_constitution($id){
        $europeConstitutions    = AllCountriesConstitution::where(['all_continent_name' => $id])->get();
        return view('constitution.europe', compact('europeConstitutions'));
    }
    //North America Constitution
    public function north_america_constitution($id){
        $northAmericaConstitutions    = AllCountriesConstitution::where(['all_continent_name' => $id])->get();
        return view('constitution.north_america', compact('northAmericaConstitutions'));
    }
    //South America Constitution
    public function south_america_constitution($id){
        $southAmericaConstitutions    = AllCountriesConstitution::where(['all_continent_name' => $id])->get();
        return view('constitution.south_america', compact('southAmericaConstitutions'));
    }

    
}
