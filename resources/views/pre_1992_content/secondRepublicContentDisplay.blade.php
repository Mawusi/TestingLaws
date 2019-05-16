            

<?php $oldpart = ''; $c=1; $closure = ''; ?>

<div class="panel-group table" id="accordion" role="tablist" aria-multiselectable="true">

    @foreach($secondArticles as $secondArticle )    
            <?php 
            
                $closure = ($oldpart !== '' && $oldpart !== $secondArticle->part)?"</div></div></div>":"";
                if ($oldpart !== $secondArticle->part){
                    $c++;
                    echo $closure;
            ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{{$c}}">
                <p class="panel-title"> 
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}"><b>{{
                    ($secondArticle->part == '')? 'SECTIONS':$secondArticle->part}}</b></a>
                </p>
            </div>

            <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
                <div class="panel-body">
    <?php }
                        $oldpart = $secondArticle->part; ?>
            <!-- <table class="table table-striped table-condensed">
                    <tr>
                        <td>     -->
                <a data-scroll-to="body"
                data-scroll-focus="body"
                data-scroll-speed="400"
                data-scroll-offset="-50" class="content_link" sid="{{ $secondArticle->id }}"  href="/pre_1992_legislation/second-republic-content/{{ $secondArticle->id }}">
                <li style="list-style: none;">{{ $secondArticle->section }}</li>
                </a>      
            <!-- </td>
                    </tr>      
                </table> -->
    @endforeach 
        
            </div>
        </div>
    </div>

</div>

    