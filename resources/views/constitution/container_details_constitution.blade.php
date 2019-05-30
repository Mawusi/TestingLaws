
{{-- DOWNLOADS AND PRINT OPTIONS --}}
<div class="col-md-2"> 
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Views and Downloads</h3>
      </div>
      <div class="panel-body">

        {{-- View all sections --}}
        <div class="btn-group">
              <button type="button" class="btn btn-default">View Constitution Articles</button>
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu table-wrapper-scroll-view">
                
                @foreach($constitutionContents as $constitutionContent)
                  <li><a class="view_all_section_link" href="/constitution/constitution-content/{{ $constitutionContent->id }}">{{$constitutionContent->section }}</a></li>
                @endforeach  
                    
              </ul>
        </div>
        <hr>

        {{-- Downloads 
        <label>Downloads</label>
            <a href="/article-pdf/{{ $myArticle->id }}"><li style="list-style: none;">Current Section(PDF)</li></a>
            <a href=""><li style="list-style: none;">Whole Act (PDF)</li></a> 
        <hr>
        --}}
        {{-- Print Options --}}
        <label>Print Options</label>
            <a href=""><li style="list-style: none;">Whole Act</li></a>
            <a href=""><li style="list-style: none;">Current Section(PDF)</li></a>
        <hr>

    </div>
  </div>
</div>

{{-- ADVERTISEMENT
<div class="col-md-2">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Advertisement</h3>
      </div>
      <div class="panel-body">
        <div class="embed-responsive embed-responsive-4by3">
        iframe width="420" height="345" src="https://www.youtube"></iframe>      
      </div>        
      </div>
    </div>
</div>
--}}