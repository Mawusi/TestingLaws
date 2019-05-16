            

<?php $oldpart = ''; $c=1; $closure = ''; ?>

<div class="panel-group table" id="accordion" role="tablist" aria-multiselectable="true">

    @foreach($regulationContents as $regulationContent )    
            <?php 
                $ids[] = $regulationContent->id;
                $closure = ($oldpart !== '' && $oldpart !== $regulationContent->part)?"</div></div></div>":"";
                if ($oldpart !== $regulationContent->part){
                    $c++;
                    echo $closure;
            ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{{$c}}">
                <p class="panel-title"> 
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}"><b>{{
                    ($regulationContent->part == '')? 'SECTIONS':$regulationContent->part}}</b></a>
                </p>
            </div>

            <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
                <div class="panel-body">
    <?php }
                        $oldpart = $regulationContent->part; ?>
            <!-- <table class="table table-striped table-condensed">
                    <tr>
                        <td>     -->
                <a data-scroll-to="body"
                data-scroll-focus="body"
                data-scroll-speed="400"
                data-scroll-offset="-50" class="content_link" sid="{{ $regulationContent->id }}"  href="/post_1992_legislation/regulation-content/{{ $regulationContent->id }}">
                <li style="list-style: none;">{{ $regulationContent->section }}</li>
                </a>      
            <!-- </td>
                    </tr>      
                </table> -->
    @endforeach 
        <input type="hidden" id="regulation_contents" value="<?php echo json_encode($ids); ?>" />
            </div>
        </div>
    </div>

</div>

    