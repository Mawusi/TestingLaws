            

<?php $oldpart = ''; $c=1; $closure = ''; ?>

<div class="panel-group table" id="accordion" role="tablist" aria-multiselectable="true">

    @foreach($myArticles as $myArticle)    
        <?php
            $ids[] = $myArticle->id;
            $closure = ($oldpart !== '' && $oldpart !== $myArticle->part)?"</div></div></div>":"";
            if ($oldpart !== $myArticle->part){
                $c++;
                echo $closure;
        ?>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading{{$c}}">
            <p class="panel-title"> 
                <span class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}">{{
                    ($myArticle->part == '')? 'SECTIONS':$myArticle->part}}
                </span>
            </p>
        </div>

        <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
            <div class="panel-body">
    <?php }
                    $oldpart = $myArticle->part
        ; ?>
            
            <!-- <table class="table table-striped table-condensed">
                <tr>
                    <td>     -->
                        <a data-scroll-to="body"
                           data-scroll-focus="body"
                           data-scroll-speed="400"
                           data-scroll-offset="-50" class="content_link" sid="{{ $myArticle->id }}" href="/post_1992_legislation/act-content/{{ $myArticle->id }}">
                            <li style="list-style: none;">{{ $myArticle->section }}</li>
                        </a>
                    <!-- </td>
                </tr>      
            </table> -->
    @endforeach 
        <input type="hidden" id="act_contents" value="<?php echo json_encode($ids); ?>" /> 

            </div>
        </div>
    </div>

</div>

    