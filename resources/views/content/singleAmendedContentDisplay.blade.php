            

<?php $oldpart = ''; $c=1; $closure = ''; ?>

<div class="panel-group table" id="accordion" role="tablist" aria-multiselectable="true">

@foreach($amendedContents as $amendedContent )    
<?php 
$closure = ($oldpart !== '' && $oldpart !== $amendedContent->part)?"</div></div></div>":"";
if ($oldpart !== $amendedContent->part){
    $c++;
    echo $closure;
    ?>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading{{$c}}">
            <p class="panel-title"> 
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}"><b>{{
                ($amendedContent->part == '')? 'SECTIONS':$amendedContent->part}}</b></a>
            </p>
        </div>

        <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
            <div class="panel-body">
<?php }
                    $oldpart = $amendedContent->part; ?>
        
            <a data-scroll-to="body"
               data-scroll-focus="body"
               data-scroll-speed="400"
               data-scroll-offset="-50" class="sinlge_amended_act_content_link" href="/post_1992_legislation/amended-act-content/{{ $amendedContent->id }}"><li style="list-style: none;">{{ $amendedContent->section }}</li></a> 
@endforeach 
</div>
</div>
</div>

</div>

    