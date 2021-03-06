@extends('layouts.main')

@section('assets')

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

@include('layouts.general_pre_1992_tab')

<div class="container-fluid" style="margin-bottom: 5em;"> 

    {{-- Nav tabs --}}
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active">
            <a href="#tableOfContentTab" data-toggle="tab">Table of Contents</a>
        </li>
        <li class="tabPanedHide_acts_content">
            <a href="#contentTab" data-toggle="tab">Contents</a>
        </li>   
    </ul>

    {{-- tab panes content --}}
    <div id="my-tab-content" class="tab-content">

        {{-- table of Contents --}}
        <div id="tableOfContentTab" class="tab-pane fade in active">

            <div class="row">
                <div class="col-md-6">
                   <h5><b>{{ $allsecondRepublic['title'] }}</b></h5>
                   <hr>
                   <a class="preamble_link" id="preamble_link_toggle" href="/pre_1992_legislation/second-republic-preamble/{{ $allsecondRepublic['id'] }}">
                      <p>Introductory Text</p>
                   </a>
                   
                    
                       @include('pre_1992_content.secondRepublicContentDisplay')

                        <div class="col-md-12 text-center">
                            <ul id="myPager" class="pagination"></ul>
                            <p><a href="#" data-scroll-to="body">Move to Top</button></p>
                        </div>
                    
                </div> 
                    @include('content.container_plain')
            </div> 
        </div>


        {{-- Contents --}}
        <div id="contentTab" class="tab-pane fade">
          <div class="row">
              <div class="col-md-10 table-wrapper-scroll-display">
                  <div id="display_content"></div>
                  <div id="display_preamble"></div>
                  <div id="display_view_all_section"></div>
              </div>
              @include('pre_1992_content.container_details_second_republic')
          </div>   

          <div class="row show">
            <div class="pager col-md-10 col-md-offset-6">
              <ul class="pager">
                  <li><a href="#" id="previous_content_reg">Previous</a></li>
                  <li><a href="#" id="next_content_reg">Next</a></li>
              </ul>
            </div>
          </div>

         </div>      
            
    </div><!--end of row-->
</div><!--end of container-fluid-->

@endsection




