            
<?php $oldpart = ''; $c=1; ?>

    <div class="panel-group table-wrapper-scroll-acts" id="accordion" role="tablist" aria-multiselectable="true">

    @foreach($myArticles as $myArticle )    
        <?php 
        $closure = ($oldpart !== '' && $oldpart !== $myArticle->part)?"</div></div>":"";
        if ($oldpart !== $myArticle->part){
        $c++;
        echo  $closure;
        ?>
        <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{{ $c }}">
                    <p class="panel-title">              
                        <a <?php if($c>=1) echo 'class="collapsed"';?> role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $c }}" aria-expanded="false" aria-controls="collapse{{ $c }}'"><p>{{$myArticle->part}}</p>
                        </a>
                    </p>
                </div>

        <div id="collapse{{ $c }}" class="panel-collapse collapse <?php if($c==1) echo 'in' ;?>" role="tabpanel" aria-labelledby="heading{{$c}}">
        <div class="panel-body">
        <?php }
        $oldpart = $myArticle->part; ?>
                    
        <a class="section_link" href="/post_1992_legislation/act-content/{{ $myArticle->id }}"><li style="list-style: none;">{{ $myArticle->section }}</li></a>
        {{-- </div>
             </div>
        --}}
    @endforeach 

    </div>
    </div> 


    