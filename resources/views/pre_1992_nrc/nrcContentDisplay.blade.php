            

<?php $oldpart = ''; $c=1; $closure = ''; ?>

<div class="panel-group table" id="accordion" role="tablist" aria-multiselectable="true">

    @foreach($nrcArticles as $nrcArticle )    
            <?php 
            
                $closure = ($oldpart !== '' && $oldpart !== $nrcArticle->part)?"</div></div></div>":"";
                if ($oldpart !== $nrcArticle->part){
                    $c++;
                    echo $closure;
            ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{{$c}}">
                <p class="panel-title"> 
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}"><b>{{
                    ($nrcArticle->part == '')? 'SECTIONS':$nrcArticle->part}}</b></a>
                </p>
            </div>

            <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
                <div class="panel-body">
    <?php }
                        $oldpart = $nrcArticle->part; ?>
            <!-- <table class="table table-striped table-condensed">
                    <tr>
                        <td>     -->
                <a data-scroll-to="#main_nlc"
                data-scroll-focus="#main_nlc"
                data-scroll-speed="400"
                data-scroll-offset="-50" class="content_link" sid="{{ $nrcArticle->id }}"  href="/pre_1992_legislation/nrc-content/{{ $nrcArticle->id }}">
                <li style="list-style: none;">{{ $nrcArticle->section }}</li>
                </a>      
            <!-- </td>
                    </tr>      
                </table> -->
    @endforeach 
        
            </div>
        </div>
    </div>

</div>

    