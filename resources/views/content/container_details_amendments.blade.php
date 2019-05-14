
{{--CONTAINER DETAIL --}}

{{-- DOWNLOADS AND PRINT OPTIONS --}}
<div class="col-md-2"> 
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Views and Downloads</h3>
      </div>
      <div class="panel-body">

            {{-- 
              <a href=""><li style="list-style: none;">View all sections</li></a>      
            <li><a href="/Introductory_text/{{ $myAct['id'] }}">Introductory Text</a></li>
            <li role="separator" class="divider" style="width:600px"></li>

            @foreach($myArticles as $myArticle)
              <li><a href="/article-pdf/{{ $myArticle->id }}">{{$myArticle->section }}</a></li>
              <li role="separator" class="divider" style="width:600px"></li>
            @endforeach
            <li role="separator" class="divider" style="width:600px"></li>

            <li><a href="#">Financial Administration Act</a></li>

         <div class="btn-group">
              <button type="button" class="btn btn-primary">Download PDF</button>
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <a href=""><li style="list-style: none;">Whole Act (PDF)</li></a>
                <a href=""><li style="list-style: none;">Current Section(PDF)</li></a>        
              </ul>
        </div> 
        --}}

        {{-- View all sections --}}
        <div class="btn-group">
              <button type="button" class="btn btn-default">All Amended Sections</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu table-wrapper-scroll-view">

                @foreach($amendedContents as $title)
                <li><a class="view_all_section_link" href="/post_1992_legislation/amended-act-content/{{ $title->id }}">{{ $title->section }}</a></li>
                {{-- <li role="separator" class="divider" style="width:600px"></li> --}}
                @endforeach

                {{-- <a href=""><li style="list-style: none;">Whole Act (PDF)</li></a>
                <a href=""><li style="list-style: none;">Current Section(PDF)</li></a> --}}        
              </ul>
        </div>
        <hr>

        {{-- Downloads --}}
        <label>Downloads</label>
            <a href=""><li style="list-style: none;">Whole Act (PDF)</li></a>
            <a href=""><li style="list-style: none;">Current Section(PDF)</li></a>
        <hr>

        <label>Print Options</label>
            <a href=""><li style="list-style: none;">Whole Act</li></a>
            <a href=""><li style="list-style: none;">Current Section(PDF)</li></a>
        <hr>

    </div>
  </div>
</div>

{{-- ADVERTISEMENT --}}
<div class="col-md-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Advertisement</h3>
      </div>
      <div class="panel-body">
        <div class="embed-responsive embed-responsive-4by3">
        {{--<iframe width="420" height="345" src="https://www.youtube"></iframe>--}}       
      </div>        
      </div>
    </div>
</div>









{{-- <li><a href="/Introductory_text/{{ $myAct['id'] }}">Introductory Text</a></li>
<li role="separator" class="divider" style="width:600px"></li>
@foreach($myArticles as $myArticle)
  <li><a href="/article-pdf/{{ $myArticle->id }}">{{$myArticle->section }}</a></li>
  <li role="separator" class="divider" style="width:600px"></li>
@endforeach
<li role="separator" class="divider" style="width:600px"></li>
<li><a href="#">Financial Administration Act</a></li>--}}