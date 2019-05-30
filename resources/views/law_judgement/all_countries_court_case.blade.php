@extends('layouts.main')

@section('assets')

    <style type="text/css">

            .header_only {
            padding: 5px 1px;
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

    @include('law_judgement.general_law_judgement_tab_others')

    <div class="container-fluid"><span style="color:red;">Africa Court Cases: {{ $allJudgementLaw['country'] }}</span> / <b>{{ $allJudgementLaw['case_title'] }}</b></div>
        <div class="container-fluid">
            <div class="row content">
                <div class="col-md-10 judgement_display">
                    <div id="display_content">
                        <div class="header_only">
                            <h4><b>{{ $allJudgementLaw['case_title'] }}</b></h4>
                        </div>
                        <div class="content">	
                            <p>{!! $allJudgementLaw['content'] !!}</p> 
                        </div>
                    </div> 
                    <div id="display_view_all_section"></div>   
                </div>
                    {{--@include('law_judgement.africa_container_plain')--}}
            </div>
        </div         
@endsection