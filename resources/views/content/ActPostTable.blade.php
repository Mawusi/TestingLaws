
@extends('layouts.main')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <style type="text/css">

            .header {
            padding: 1px 1px;
            background: #555;
            color: #f1f1f1;
            text-align: center;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            }
            ::-webkit-scrollbar {
            width: 7px;
            }
            div::-webkit-scrollbar-button {
            display: block;
            width: 17px;
            height: 17px;
            }
            div::-webkit-scrollbar-button:decrement:start {
            background-color:lightblue;
            border:1px solid #eee;
            }
            div::-webkit-scrollbar-button:increment:start {
            background-color:lightblue;
            border:1px solid #eee;
            }
            div::-webkit-scrollbar-button:decrement:end {
            background-color:lightblue;
            border:1px solid #eee;
            }
            div::-webkit-scrollbar-button:increment:end {
            background-color:lightblue;
            border:1px solid #eee;;
            }
            ::-webkit-scrollbar-thumb {
            background: #888; 
            }
            ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
            border-radius: 10px;
            }
            ::-webkit-scrollbar-thumb:hover {
            background: #555; 
            }
            .content {
            padding: 16px;
            }
    </style>
@endsection

@section('content')

    @include('layouts.general_post_1992_tab')

    <div class="container-fluid" style="margin-bottom: 5em;"> 
        {{-- Nav tabs --}}
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <!-- Acts -->
            <li class="active">
                <a href="#tableOfContentTab" data-toggle="tab">Acts Table of Contents</a>
            </li>
            <li class="tabPanedHide_acts_content">
                <a href="#contentTab" data-toggle="tab">Acts Content</a>
            </li>


            <!-- Amendments -->
            <li class="tabPanedHide_amendments">
                <a href="#all_amendmentsTab" data-toggle="tab">Amendments</a>
            </li>
            <li class="tabPanedHide_amendments_table">
                <a href="#amended_table_of_Content_Tab" data-toggle="tab">Amendments Table of Contents</a>
            </li>
            <li class="tabPanedHide_amendments_content">
                <a href="#amendmentcontentTab" data-toggle="tab">Amended Content</a>
            </li>
            

            <!-- Regulations -->
            <li class="tabPanedHide_regulations">
                <a href="#all_regulationsTab" data-toggle="tab">Regulations</a>
            </li>
            <li class="tabPanedHide_regulations_table">
                <a href="#regulated_table_of_Content_Tab" data-toggle="tab">Regulations Table of Contents</a>
            </li>
            <li class="tabPanedHide_regulations_content">
                <a href="#regulatedcontentTab" data-toggle="tab">Regulation Content</a>
            </li>



            <!-- Memorandum -->
            <!-- <li>
                <a href="" data-toggle="tab">Memorandum</a>
            </li>  -->
            
        </ul>

        {{-- tab panes content --}}
        <div id="my-tab-content" class="tab-content">

            <!-- ACTS TABLE OF CONTENT -->
            <div id="tableOfContentTab" class="tab-pane fade in active">

                <div class="row">
                    <div class="col-md-6">
                        <h5><b>{{ $myAct['title'] }}</b></h5>
                        <span>View All
                            <a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/all-amended-acts/{{ $myAct['id'] }}"><b> Amendents</b></a> /
                            <a class="all_regulations_link" id="all_regulations_link_toggle" href="/post_1992_legislation/all-regulated-acts/{{ $myAct['id'] }}"><b> Regulations</b></a>
                        </span>
                        <hr>

                        {{-- <a data-scroll-to="#main_act"
                           data-scroll-focus="#main_act"
                           data-scroll-speed="400"
                           data-scroll-offset="-50" 
                           class="preamble_link" id="preamble_link_toggle" href="/post_1992_legislation/acts-preamble/{{ $myAct['id'] }}"><p>Introductory Text</p>
                        </a> --}}
                        <a class="preamble_link" id="preamble_link_toggle" href="/post_1992_legislation/acts-preamble/{{ $myAct['id'] }}"><p>Introductory Text</p>
                        </a>
                            <!-- Parts and Sections Display -->
                            @include('content.parts_sections')
                            
                            <div class="col-md-12 text-center">
                                <ul id="myPager" class="pagination"></ul>
                                <p><a href="#" data-scroll-to="body">Move to Top</button></p>
                            </div>
                    </div>

                            <!-- Downloads and Advertisement -->
                            @include('content.container_plain')
                </div>

            </div>


            <!-- ACTS CONTENTS -->
            <div id="contentTab" class="tab-pane fade">
                <div class="row" style="margin-bottom: 0.1em;">
                     <div class="col-md-10 table-wrapper-scroll-display">
                        <div id="display_content"></div>
                        <div id="display_preamble"></div>
                        <div id="display_view_all_section"></div>  
                    </div>
                    
                    @include('content.container_details_act')
                </div>

                <div class="row show">
                    <div class="pager col-md-10 col-md-offset-6">
                     <ul class="pager">
                        <li><a href="#" id="previous_content_act">Previous</a></li>
                        <li><a href="#" id="next_content_act">Next</a></li>
                     </ul>
                    </div>
                </div>

            </div>

            <!-- ALL AMENDMENTS LISTS -->
            <div id="all_amendmentsTab" class="tab-pane fade">
                <div class="row" style="margin-top: 1em">
                        <div class="col-md-6">
                            <div id="all_amendments" class="amended_act_toggle"></div>
                        </div>
                        @include('content.container_plain')
                </div>
            </div>

            <!-- AMENDMENTS TABLE OF CONTENTS -->
            <div id="amended_table_of_Content_Tab" class="tab-pane fade">
                <div class="row" style="margin-top: 1em">
                    <div class="col-md-6">
                    <div id="amended_table_of_content" class="amended_act_toggle_content"></div>   
                    </div>
                    @include('content.container_plain')
                </div>
            </div>

            <!-- AMENDMENTS CONTENT -->
            <div id="amendmentcontentTab" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-8 table-wrapper-scroll-display">
                        <div id="single_preamble_amended_content"></div>
                        <div id="single_amended_content"></div>
                        <div id="single_view_all_sections_amend"></div> 
                    </div>
                    
                        <div id="single_container_details_amend"></div>

                        {{-- ADVERTISEMENT --}}
                        <div class="col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title">Advertisement</h3></div>
                                <div class="panel-body">
                                    <div class="embed-responsive embed-responsive-4by3">{{--<iframe width="420" height="345" src="https://www.youtube"></iframe>--}}</div>        
                                </div>
                            </div>
                        </div>
                </div>

                <!-- NEXT AND PREVIOUS -->
                <div class="row show">
                    <div class="pager col-md-8 col-md-offset-6">
                     <ul class="pager">
                        <li><a href="#" id="previous_content_act">Previous</a></li>
                        <li><a href="#" id="next_content_act">Next</a></li>
                     </ul>
                    </div>
                </div>

            </div>


            <!--ALL REGULATION LIST -->
            <div id="all_regulationsTab" class="tab-pane fade">
                <div class="row" style="margin-top: 1em">
                     <div class="col-md-6">
                        <div id="all_regulations" class="regulation_act_toggle"></div>  
                    </div>
                    @include('content.container_plain')
                </div>
            </div>

            <!-- REGULATIONS TABLE OF CONTENTS -->
            <div id="regulated_table_of_Content_Tab" class="tab-pane fade">
                <div class="row" style="margin-top: 1em">
                        <div class="col-md-6">
                        <div id="regulated_table_of_content" class="regulation_act_toggle_content"></div>   
                        </div>
                        @include('content.container_plain')
                </div>
                <!-- @include('content.container_details_act') -->
            </div>

            <!-- REGULATIONS CONTENTS -->
            <div id="regulatedcontentTab" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-8 table-wrapper-scroll-display">
                        <div id="single_preamble_regulation_content"></div>
                        <div id="single_regulation_content"></div>
                        <div id="single_view_all_sections_regulation"></div> 
                    </div>
                    
                        <div id="single_container_details_regulation"></div>

                        {{-- ADVERTISEMENT --}}
                        <div class="col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title">Advertisement</h3></div>
                                <div class="panel-body">
                                    <div class="embed-responsive embed-responsive-4by3">{{--<iframe width="420" height="345" src="https://www.youtube"></iframe>--}}</div>        
                                </div>
                            </div>
                        </div>
                </div>

                <!-- NEXT AND PREVIOUS -->
                <div class="row show">
                    <div class="pager col-md-8 col-md-offset-6">
                     <ul class="pager">
                        <li><a href="#" id="previous_content_act">Previous</a></li>
                        <li><a href="#" id="next_content_act">Next</a></li>
                     </ul>
                    </div>
                </div>

            </div>




            <!-- Memorandum
            <div id="memorandumTab" class="tab-pane fade">
                <h3>Memorandum</h3>
                @include('content.container_details_act')
            </div> -->


        </div>
    </div><!--end of container-fluid-->

@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
@endsection










    


    
















