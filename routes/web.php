<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Main Page
Route::get('/','PageController@index'); //Home Page


//Constitution routes
Route::get('/constitution', 'ConstitutionController@index');
Route::get('/constitution/Ghana','ConstitutionController@ghana');
Route::get('/constitution/Africa','ConstitutionController@africa');
Route::get('/constitution/Europe','ConstitutionController@europe');
Route::get('/constitution/Asia','ConstitutionController@asia');
Route::get('/constitution/America','ConstitutionController@america');

//Pre_1992 routes
Route::get('/pre_1992_legislation','Pre1992Controller@index');

	//First republic route
	Route::get('/pre_1992_legislation/first_republic','Pre1992Controller@first_republic');
	Route::get('/pre_1992_legislation/first_republic-title/{id}','Pre1992Controller@first_republic_title');
	Route::get('/pre_1992_legislation/first-republic-preamble/{id}','Pre1992Controller@first_republic_preamble');
	Route::get('/pre_1992_legislation/first-republic-content/{id}','Pre1992Controller@first_republic_content');

	//Second republic route
	Route::get('/pre_1992_legislation/second_republic','Pre1992Controller@second_republic');
	Route::get('/pre_1992_legislation/second_republic-title/{id}','Pre1992Controller@second_republic_title');
	Route::get('/pre_1992_legislation/second-republic-preamble/{id}','Pre1992Controller@second_republic_preamble');
	Route::get('/pre_1992_legislation/second-republic-content/{id}','Pre1992Controller@second_republic_content');

	//Third republic route
	Route::get('/pre_1992_legislation/third_republic','Pre1992Controller@third_republic');
	Route::get('/pre_1992_legislation/third_republic-title/{id}','Pre1992Controller@third_republic_title');
	Route::get('/pre_1992_legislation/third-republic-preamble/{id}','Pre1992Controller@third_republic_preamble');
	Route::get('/pre_1992_legislation/third-republic-content/{id}','Pre1992Controller@third_republic_content');

	//Pndc Law
	Route::get('/pre_1992_legislation/PNDC_law','Pre1992Controller@pndc_law');
	Route::get('/pre_1992_legislation/pndc-title/{id}','Pre1992Controller@pndc_title');
	Route::get('/pre_1992_legislation/pndc-preamble/{id}','Pre1992Controller@pndc_preamble');
	Route::get('/pre_1992_legislation/pndc-content/{id}','Pre1992Controller@pndc_content');

	//Nlc Decree
	Route::get('/pre_1992_legislation/NLC_decree','Pre1992Controller@nlc_decree');
	Route::get('/pre_1992_legislation/nlc-title/{id}','Pre1992Controller@nlc_title');
	Route::get('/pre_1992_legislation/nlc-preamble/{id}','Pre1992Controller@nlc_preamble');
	Route::get('/pre_1992_legislation/nlc-content/{id}','Pre1992Controller@nlc_content');

	//Nrc Decree
	Route::get('/pre_1992_legislation/NRC_decree','Pre1992Controller@nrc_decree');
	Route::get('/pre_1992_legislation/nrc-title/{id}','Pre1992Controller@nrc_title');
	Route::get('/pre_1992_legislation/nrc-preamble/{id}','Pre1992Controller@nrc_preamble');
	Route::get('/pre_1992_legislation/nrc-content/{id}','Pre1992Controller@nrc_content');

	//Smc Decree
	Route::get('/pre_1992_legislation/SMC_decree','Pre1992Controller@smc_decree');
	Route::get('/pre_1992_legislation/smc-title/{id}','Pre1992Controller@smc_title');
	Route::get('/pre_1992_legislation/smc-preamble/{id}','Pre1992Controller@smc_preamble');
	Route::get('/pre_1992_legislation/smc-content/{id}','Pre1992Controller@smc_content');



	//Post_1992 routes
Route::get('/post_1992_legislation','Post1992Controller@index');
// Route::get('/post_1992_legislation/{year}','Post1992Controller@index_filter'); //index filtering
Route::get('/post_1992_legislation/act-title/{id}','Post1992Controller@act_title');
Route::get('/post_1992_legislation/acts-preamble/{id}','Post1992Controller@acts_preamble');
Route::get('/post_1992_legislation/act-content/{id}','Post1992Controller@content');
Route::get('/post_1992_legislation/all-amended-acts/{id}','Post1992Controller@all_amended_acts');
Route::get('/post_1992_legislation/all-regulated-acts/{id}','Post1992Controller@all_regulated_acts');

			//Route for PDF for Post Acts
			Route::get('/Introductory_text/{id}', 'PdfController@introductory_text_pdf');
			Route::get('/article-pdf/{id}', 'PdfController@article_pdf');

	
		   // DETAILS PAGES 
		   //Amendments
		   //---------------------------------------------------------------------------------------------------------------
		   Route::get('/post_1992_legislation/amendments','Post1992Controller@amendments');
		   Route::get('/post_1992_legislation/amended-title/{id}','Post1992Controller@amended_title');
		   Route::get('/post_1992_legislation/single-amended-title/{id}','Post1992Controller@single_amended_title');
		   Route::get('/post_1992_legislation/acts-amended-preamble/{id}','Post1992Controller@acts_amended_preamble');
		   Route::get('/post_1992_legislation/single-acts-amended-preamble/{id}','Post1992Controller@single_acts_amended_preamble');
		   Route::get('/post_1992_legislation/single-container-details-amendments/{id}','Post1992Controller@single_container_details_amendedment');

		   // Route::get('/post_1992_legislation/amendments/{year}','Post1992Controller@filter_amendments'); //Filtering amendments year
		   Route::get('/post_1992_legislation/amendments/{year}/{category}','Post1992Controller@filter_amendments'); //Filtering amendments year and category
		   Route::get('/post_1992_legislation/amended-act-content/{id}','Post1992Controller@amended_content');
		   //---------------------------------------------------------------------------------------------------------------
		   //---------------------------------------------------------------------------------------------------------------
		   
		   //Regulations
		   Route::get('/post_1992_legislation/regulations','Post1992Controller@regulations');
		   Route::get('/post_1992_legislation/regulation-title/{id}','Post1992Controller@regulation_title');
		   Route::get('/post_1992_legislation/single-regulation-title/{id}','Post1992Controller@single_regulation_title');
		   Route::get('/post_1992_legislation/regulations/{year}','Post1992Controller@filter_regulations'); //Filtering regulations year
		   Route::get('/post_1992_legislation/regulation-preamble/{id}','Post1992Controller@regulation_preamble');
		   Route::get('/post_1992_legislation/single-regulation-preamble/{id}','Post1992Controller@single_regulation_preamble');
		   Route::get('/post_1992_legislation/single-container-details-regulation/{id}','Post1992Controller@single_container_details_regulation');
		   Route::get('/post_1992_legislation/regulation-content/{id}','Post1992Controller@RegulationContent');
		   //---------------------------------------------------------------------------------------------------------------
		   //---------------------------------------------------------------------------------------------------------------
		   
		   //Memorandum
		   Route::get('/post_1992_legislation/memorandum','Post1992Controller@memorandum');

			// ACTS OF PARLIAMENT
		   Route::get('/post_1992_legislation/acts_of_parliament/{id}','Post1992Controller@actsOfParliament');
		   Route::get('/post_1992_legislation/acts_of_parliament/{id}/{year}','Post1992Controller@filter_actsOfParliament'); //Filtering acts of parliament year

//Judgement routes
Route::get('/judgement','JudgementController@index');
	//Supreme Court
	Route::get('/judgement/supreme_court','JudgementController@supreme_court');
	Route::get('/judgement/supreme-court-case-title/{id}','JudgementController@supreme_court_case');
	Route::get('/judgement/supreme-court-case-view/{id}','JudgementController@supreme_court_case_view');
	//High Court
	Route::get('/judgement/high_court','JudgementController@high_court');
	Route::get('/judgement/high-court-case-title/{id}','JudgementController@high_court_case');
	Route::get('/judgement/high-court-case-view/{id}','JudgementController@high_court_case_view');


Route::get('/judgement/court_of_appeal','JudgementController@court_of_appeal');
Route::get('/judgement/circuit_court','JudgementController@circuit_court');
Route::get('/judgement/district_court','JudgementController@district_court');
Route::get('/judgement/international_cases','JudgementController@international_cases');

//Forum routes
Route::get('/forum','ForumController@index');


//Admin route
Route::group(['prefix' => 'ajaxx'], function () {
    Voyager::routes();
});


