            

            <?php $oldpart = ''; $c=1; ?>

            <div class="panel-group table-wrapper-scroll-acts" id="accordion" role="tablist" aria-multiselectable="true">

            @foreach($myArticles as $myArticle )    
            <?php 
            $closure = ($oldpart !== '' && $oldpart !== $myArticle->part)?"</div>":"";
            if ($oldpart !== $myArticle->part){
                $c++;

                echo $closure.'<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headinghome">
                        <p class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsehome_'.$c.'" aria-expanded="false" aria-controls="collapsehome"><p>'.$myArticle->part.'   <button type="button" class="btn btn-info btn-xs pull-right">Sections <span class="badge">7</span></button></p></a>
                        </p>
                    </div>';
            }
                                $oldpart = $myArticle->part; ?>
                    
                    <div id="collapsehome_{{$c}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinghome">
                        <div class="panel-body">
                            <a class="section_link" href="/post_1992_legislation/act-content/{{ $myArticle->id }}"><li style="list-style: none;">{{ $myArticle->section }}</li></a>
                        </div>
                    </div>
            @endforeach 

            </div>
            </div> 