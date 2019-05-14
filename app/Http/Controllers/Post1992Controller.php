<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post1992LegislationArticle;
use App\Post1992LegislationAct;
use App\AmendedTitle;
use App\Post1992AmendedArticle;
use App\RegulationTitle;
use App\RegulationArticle;
use App\Post1992Category;

class Post1992Controller extends Controller
{
    //ALL POST LEGISLATION ACTS
    public function index(){
        $allPosts       = Post1992LegislationAct::all();
        $allPostsAmends = AmendedTitle::all();
        $allRegulations = RegulationTitle::all();
        //$categories     = Post1992Category::all();
        return view('main_pages.post_legislation', compact('allPosts', 'allPostsAmends', 'allRegulations'));
    }

    // Filtering
    // public function index_filter($year){
    //     $bool = false;
    //     $where = array();
    //     if($year != "0"){   
    //         $where['year'] = $year;
    //         $bool = true;
    //     }
        // if($category != "0"){   
        //     $where['post1992_category_name'] = $category;
        //     $bool = true;
        // }

    //     $allPosts       = ($bool)?Post1992LegislationAct::where($where)->get():Post1992LegislationAct::all();
    //     $allPostsAmends = ($bool)?AmendedTitle::where($where)->get():AmendedTitle::all();
    //     $allRegulations = ($bool)?RegulationTitle::where($where)->get():RegulationTitle::all();
    //     return view('main_pages.post_legislation', compact('allPosts', 'allPostsAmends', 'allRegulations'));
    // }
    
    public function act_title($id){
        $myAct              = Post1992LegislationAct::find(['id' => $id])->toArray()[0];
        $myArticles1        = Post1992LegislationArticle::where(['post1992_legislation_act_title' => $id])->get();
        $myAmendedTitles    = AmendedTitle::where(['post1992_legislation_act_title' => $id])->get();  
        $unique             = $myArticles1->unique()->sortBy('part')->sortBy('priority'); 
        $myArticles         = $unique;
        return view('content.ActPostTable', compact('myAct', 'myArticles', 'myAmendedTitles'));
    }
    public function all_amended_acts($id){
        $myAct              = Post1992LegislationAct::find(['id' => $id])->toArray()[0];
        $amendedActs        = AmendedTitle::where(['post1992_legislation_act_title' => $id])->get();
        return view('content.allAmendedActs', compact('myAct','amendedActs'));
    }

    public function all_regulated_acts($id){
        $myAct              = Post1992LegislationAct::find(['id' => $id])->toArray()[0];
        $regulatedActs      = RegulationTitle::where(['post1992_legislation_act_title' => $id])->get();
        return view('content.allRegulatedActs', compact('myAct', 'regulatedActs'));
    }

    public function acts_preamble($id){
        $myAct = Post1992LegislationAct::find(['id' => $id])->toArray()[0];
        return view('content.preambleTable', compact('myAct'));
    }

    public function content($id){
        $myContent          = Post1992LegislationArticle::find(['id' => $id])->toArray()[0];
        return view('content.postContent', compact('myContent', 'myAct'));
    }

    
    //ALL ACTS OF PARLIAMENT
    public function actsOfParliament($id = 1){
        $myActsOfParliaments    = Post1992LegislationAct::where(['post1992_group_name' => $id])->get();
        return view('content.actsOfParliament', compact('myActsOfParliaments'));
    }

    // Filtering
    public function filter_actsOfParliament($id = 1, $year){
        $bool = false;
        $where = array();
        if($year != "0"){   
            $where['year'] = $year;
            $bool = true;
        }

        $myActsOfParliaments = ($bool)?Post1992LegislationAct::where($where)->get():Post1992LegislationAct::all();
        return view('content.actsOfParliament', compact('myActsOfParliaments'));
    }


    //AMENDMENTS
    public function amendments(){
        $allPostsAmends = AmendedTitle::all();
        $categories     = Post1992Category::all();
        return view('content.amendments', compact('allPostsAmends', 'categories'));
    }

    // Filtering
    public function filter_amendments($year, $category){
        $bool = false;
        $where = array();
        if($year != "0"){   
            $where['year'] = $year;
            $bool = true;
        }
        if($category != "0"){   
            $where['post1992_category_name'] = $category;
            $bool = true;
        }
        $allPostsAmends = ($bool)?AmendedTitle::where($where)->get():AmendedTitle::all();
        $categories     = ($bool)?AmendedTitle::where($where)->get():AmendedTitle::all();
        return view('content.amendments', compact('allPostsAmends', 'categories'));
    }

    
    public function amended_content($id){
        $myContent = Post1992AmendedArticle::find(['id' => $id])->toArray()[0];
        return view('content.amendedpostContent', compact('myContent'));
    }

    public function acts_amended_preamble($id){
        $myAmended = AmendedTitle::find(['id' => $id])->toArray()[0];
        return view('content.amendedPreamble', compact('myAmended'));
    }

    public function single_acts_amended_preamble($id){
        $myAmended = AmendedTitle::find(['id' => $id])->toArray()[0];
        return view('content.single_amendedPreamble', compact('myAmended'));
    }

    public function single_container_details_amendedment($id){
        $amendedContents1       = Post1992AmendedArticle::where(['amended_title_name' => $id])->get();
        $unique                 = $amendedContents1->sortBy('part')->sortBy('priority');
        $amendedContents        = $unique;
        return view('content.single_container_details_amendments', compact('amendedContents'));
    }

    public function amendment($id){
        $myAmendedTitles    = AmendedTitle::where(['post1992_legislation_act_title' => $id])->get();
        return view('nav_post_1992_details.amendment', compact('myAmendedTitles'));
    }

    public function amended_title($id){
        $amendedAct             = AmendedTitle::find(['id' => $id])->toArray()[0];
        $amendedContents1       = Post1992AmendedArticle::where(['amended_title_name' => $id])->get();  
        $unique                 = $amendedContents1->sortBy('part')->sortBy('priority');
        $amendedContents        = $unique;
        return view('content.amendedTable', compact('amendedAct', 'amendedContents'));
    }

    public function single_amended_title($id){
        $amendedAct             = AmendedTitle::find(['id' => $id])->toArray()[0];
        $amendedContents1       = Post1992AmendedArticle::where(['amended_title_name' => $id])->get();  
        $unique                 = $amendedContents1->sortBy('part')->sortBy('priority');
        $amendedContents        = $unique;
        return view('content.single_amendedTable', compact('amendedAct', 'amendedContents'));
    }


    
    //REGULATIONS
    public function regulations(){
        $allRegulations = RegulationTitle::all();
        // $categories     = Post1992Category::all();
        return view('content.regulations', compact('allRegulations'));
    }

    //Filtering
    public function filter_regulations($year){
        $bool = false;
         $where = array();
         if($year != "0"){   
             $where['year'] = $year;
             $bool = true;
         }
         // if($category != "0"){   
         //     $where['categories'] = $category;
         //     $bool = true;
         // }
         $allRegulations = ($bool)?RegulationTitle::where($where)->get():RegulationTitle::all();
         return view('content.regulations', compact('allRegulations')); 
     }

    public function regulation_title($id){
        $regulationTitle        = RegulationTitle::find(['id' => $id])->toArray()[0];
        $regulationContent1     = RegulationArticle::where(['regulation_title_title' => $id])->get();  
        $unique                 = $regulationContent1->sortBy('part')->sortBy('priority');
        $regulationContents     = $unique;
        return view('content.regulationTable', compact('regulationTitle', 'regulationContents'));
    }

    public function single_container_details_regulation($id){
        $regulationContent1     = RegulationArticle::where(['regulation_title_title' => $id])->get();  
        $unique                 = $regulationContent1->sortBy('part')->sortBy('priority');
        $regulationContents     = $unique;
        return view('content.single_container_details_regulation', compact('regulationContents'));
    }

    public function single_regulation_title($id){
        $regulationTitle        = RegulationTitle::find(['id' => $id])->toArray()[0];
        $regulationContent1     = RegulationArticle::where(['regulation_title_title' => $id])->get();  
        $unique                 = $regulationContent1->sortBy('part')->sortBy('priority');
        $regulationContents     = $unique;
        return view('content.single_regulationTable', compact('regulationTitle', 'regulationContents'));
    }

    public function regulation_preamble($id){
       $regulationTitle = RegulationTitle::find(['id' => $id])->toArray()[0];
       return view('content.regulationPreamble', compact('regulationTitle'));   
    }

    public function single_regulation_preamble($id){
        $regulationTitle = RegulationTitle::find(['id' => $id])->toArray()[0];
        return view('content.single_regulationPreamble', compact('regulationTitle'));   
     }

    public function RegulationContent($id){
        $regulationContent = RegulationArticle::find(['id' => $id])->toArray()[0];
        return view('content.regulationContent', compact('regulationContent'));
    }

    // MEMORANDUM
    public function memorandum(){
        return view('nav_post_1992_details.memorandum');
    }

}
        //descending order
        // $unique       = $myArticles1->unique()->sortBy('part', SORT_REGULAR, true);