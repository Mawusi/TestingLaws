<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post1992LegislationArticle;
use App\Post1992LegislationAct;
use PDF;

class PdfController extends Controller
{
     public function article_pdf($id){
     	$myContent = Post1992LegislationArticle::find(['id' => $id])->toArray()[0];
    	$pdf = PDF::loadView('content.postContent', compact('myContent'));
		return $pdf->download('Financial_Administration_Act.pdf');
    }

    public function introductory_text_pdf($id){
    	$myAct = Post1992LegislationAct::find(['id' => $id])->toArray()[0];
    	$pdf = PDF::loadView('content.preambleTable', compact('myAct'));
		return $pdf->download('Introductory_text_Financial_Administration_Act.pdf');
    }
}
