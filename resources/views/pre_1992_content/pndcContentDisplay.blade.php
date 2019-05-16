            

<?php $oldpart = ''; $c=1; $closure = ''; ?>

<div class="panel-group table" id="accordion" role="tablist" aria-multiselectable="true">

    @foreach($pndcArticles as $pndcArticle )    
            <?php 
            
                $closure = ($oldpart !== '' && $oldpart !== $pndcArticle->part)?"</div></div></div>":"";
                if ($oldpart !== $pndcArticle->part){
                    $c++;
                    echo $closure;
            ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{{$c}}">
                <p class="panel-title"> 
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}"><b>{{
                    ($pndcArticle->part == '')? 'SECTIONS':$pndcArticle->part}}</b></a>
                </p>
            </div>

            <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
                <div class="panel-body">
    <?php }
                        $oldpart = $pndcArticle->part; ?>
            <!-- <table class="table table-striped table-condensed">
                    <tr>
                        <td>     -->
                <a data-scroll-to="body"
                data-scroll-focus="body"
                data-scroll-speed="400"
                data-scroll-offset="-50" class="content_link" sid="{{ $pndcArticle->id }}"  href="/pre_1992_legislation/pndc-content/{{ $pndcArticle->id }}">
                <li style="list-style: none;">{{ $pndcArticle->section }}</li>
                </a>      
            <!-- </td>
                    </tr>      
                </table> -->
    @endforeach 
        
            </div>
        </div>
    </div>

</div>

    