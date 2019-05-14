<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pre1992LegislationAct; //for FirstRepublicAct
use App\Pre1992LegislationArticle;
use App\SecondRepublicAct;
use App\SecondRepublicArticle;
use App\ThirdRepublicAct;
use App\ThirdRepublicArticle;
use App\PndcLaw;
use App\PndcArticle;
use App\NlcDecree;
use App\NlcDecreeArticle;
use App\NrcDecree;
use App\NrcDecreeArticle;
use App\SmcDecree;
use App\SmcDecreeArticle;

class Pre1992Controller extends Controller
{
    //ALL PRE LEGISLATION ACTS
    public function index(){
        $allFirstRepublics      = Pre1992LegislationAct::all(); //first republic
        $allSecondRepublics     = SecondRepublicAct::all();
        $allThirdRepublics      = ThirdRepublicAct::all();
        $allPndcLaws            = PndcLaw::all();
        $allNlcDecrees          = NlcDecree::all();
        $allNrcDecrees          = NrcDecree::all();
        $allSmcDecrees          = SmcDecree::all();

        return view('main_pages.pre_legislation', compact('allFirstRepublics', 'allSecondRepublics',
    'allThirdRepublics', 'allPndcLaws', 'allNlcDecrees', 'allNrcDecrees', 'allSmcDecrees'));
    }

    //FIRST REPUBLIC
    public function first_republic(){
        $allFirstRepublics = Pre1992LegislationAct::all(); //first republic
        return view('pre_1992_content.first_republic', compact('allFirstRepublics'));
    }

    public function first_republic_title($id){
        $allFirstRepublic    = Pre1992LegislationAct::find(['id' => $id])->toArray()[0]; //first republic
        $firstArticles1      = Pre1992LegislationArticle::where(['pre1992_legislation_act_title' => $id])->get();
        $unique              = $firstArticles1->sortBy('part')->sortBy('priority');
        $firstArticles  = $unique;
        return view('pre_1992_content.first_republic_table', compact('allFirstRepublic', 'firstArticles'));
    }

    public function first_republic_preamble($id){
        $allFirstRepublic = Pre1992LegislationAct::find(['id' => $id])->toArray()[0];
        return view('pre_1992_content.first_republic_preamble', compact('allFirstRepublic'));   
     }

    public function first_republic_content($id){
        $firstArticle = Pre1992LegislationArticle::find(['id' => $id])->toArray()[0];
        return view('pre_1992_content.first_republic_content', compact('firstArticle'));
    }



    //SECOND REPUBLIC
    public function second_republic(){
        $allSecondRepublics = SecondRepublicAct::all();
        return view('pre_1992_content.second_republic', compact('allSecondRepublics'));
    }

    public function second_republic_title($id){
        $allsecondRepublic    = SecondRepublicAct::find(['id' => $id])->toArray()[0];
        $secondArticles1      = SecondRepublicArticle::where(['second_republic_act_title' => $id])->get();
        $unique              = $secondArticles1->sortBy('part')->sortBy('priority');
        $secondArticles  = $unique;
        return view('pre_1992_content.second_republic_table', compact('allsecondRepublic', 'secondArticles'));
    }

    public function second_republic_preamble($id){
        $allsecondRepublic = SecondRepublicAct::find(['id' => $id])->toArray()[0];
        return view('pre_1992_content.second_republic_preamble', compact('allsecondRepublic'));   
     }

    public function second_republic_content($id){
        $secondArticle = SecondRepublicArticle::find(['id' => $id])->toArray()[0];
        return view('pre_1992_content.second_republic_content', compact('secondArticle'));
    }



    //THIRD REPUBLIC
    public function third_republic(){
        $allThirdRepublics  = ThirdRepublicAct::all();
        return view('pre_1992_content.third_republic', compact('allThirdRepublics'));
    }

    public function third_republic_title($id){
        $allThirdRepublic    = ThirdRepublicAct::find(['id' => $id])->toArray()[0];
        $thirdArticles1      = ThirdRepublicArticle::where(['third_republic_act_title' => $id])->get();
        $unique              = $thirdArticles1->sortBy('part')->sortBy('priority');
        $thirdArticles  = $unique;
        return view('pre_1992_content.third_republic_table', compact('allThirdRepublic', 'thirdArticles'));
    }

    public function third_republic_preamble($id){
        $allThirdRepublic = ThirdRepublicAct::find(['id' => $id])->toArray()[0];
        return view('pre_1992_content.third_republic_preamble', compact('allThirdRepublic'));   
    }

    public function third_republic_content($id){
        $thirdArticle = ThirdRepublicArticle::find(['id' => $id])->toArray()[0];
        return view('pre_1992_content.third_republic_content', compact('thirdArticle'));
    }


    //PNDC LAW
    public function pndc_law(){
        $allPndcLaws   = PndcLaw::all();
        return view('pre_1992_content.pndc_law', compact('allPndcLaws'));
    }

    public function pndc_title($id){
        $pndcLaw    = PndcLaw::find(['id' => $id])->toArray()[0];
        $pndcArticles1  = PndcArticle::where(['pndc_law_title' => $id])->get();
        $unique         = $pndcArticles1->sortBy('part')->sortBy('priority');
        $pndcArticles  = $unique;
        return view('pre_1992_content.pndc_table', compact('pndcLaw', 'pndcArticles'));
    }

    public function pndc_preamble($id){
        $pndcLaw = PndcLaw::find(['id' => $id])->toArray()[0];
        return view('pre_1992_content.pndc_preamble', compact('pndcLaw'));   
    }

    public function pndc_content($id){
        $pndcArticle = PndcArticle::find(['id' => $id])->toArray()[0];
        return view('pre_1992_content.pndc_content', compact('pndcArticle'));
    }


    //NLC DECREE
    public function nlc_decree(){
        $allNlcDecrees  = NlcDecree::all();
        return view('pre_1992_nlc.nlc_decree', compact('allNlcDecrees'));
    }

    public function nlc_title($id){
        $nlcDecree      = NlcDecree::find(['id' => $id])->toArray()[0];
        $nlcArticles1    = NlcDecreeArticle::where(['nlc_decree_title' => $id])->get();
        $unique         = $nlcArticles1->sortBy('part')->sortBy('priority');
        $nlcArticles  = $unique;
        return view('pre_1992_nlc.nlc_table', compact('nlcDecree', 'nlcArticles'));
    }

    public function nlc_preamble($id){
        $nlcDecree = NlcDecree::find(['id' => $id])->toArray()[0];
        return view('pre_1992_nlc.nlc_preamble', compact('nlcDecree'));   
    }

    public function nlc_content($id){
        $nlcArticle = NlcDecreeArticle::find(['id' => $id])->toArray()[0];
        return view('pre_1992_nlc.nlc_content', compact('nlcArticle'));
    }



    //NRC DECREE
    public function nrc_decree(){
        $allNrcDecrees  = NrcDecree::all();
        return view('pre_1992_nrc.nrc_decree', compact('allNrcDecrees'));
    }

    public function nrc_title($id){
        $nrcDecree      = NrcDecree::find(['id' => $id])->toArray()[0];
        $nrcArticles1    = NrcDecreeArticle::where(['nrc_decree_title' => $id])->get();
        $unique         = $nrcArticles1->sortBy('part')->sortBy('priority');
        $nrcArticles  = $unique;
        return view('pre_1992_nrc.nrc_table', compact('nrcDecree', 'nrcArticles'));
    }

    public function nrc_preamble($id){
        $nrcDecree = NrcDecree::find(['id' => $id])->toArray()[0];
        return view('pre_1992_nrc.nrc_preamble', compact('nrcDecree'));   
    }

    public function nrc_content($id){
        $nrcArticle = NrcDecreeArticle::find(['id' => $id])->toArray()[0];
        return view('pre_1992_nrc.nrc_content', compact('nrcArticle'));
    }



    //SMC DECREE
    public function smc_decree(){
        $allSmcDecrees  = SmcDecree::all();
        return view('pre_1992_smc.smc_decree', compact('allSmcDecrees'));
    }

    public function smc_title($id){
        $smcDecree      = SmcDecree::find(['id' => $id])->toArray()[0];
        $smcArticles1    = SmcDecreeArticle::where(['smc_decree_title' => $id])->get();
        $unique         = $smcArticles1->sortBy('part')->sortBy('priority');
        $smcArticles  = $unique;
        return view('pre_1992_smc.smc_table', compact('smcDecree', 'smcArticles'));
    }

    public function smc_preamble($id){
        $smcDecree = SmcDecree::find(['id' => $id])->toArray()[0];
        return view('pre_1992_smc.smc_preamble', compact('smcDecree'));   
    }

    public function smc_content($id){
        $smcArticle = SmcDecreeArticle::find(['id' => $id])->toArray()[0];
        return view('pre_1992_smc.smc_content', compact('smcArticle'));
    }
}
