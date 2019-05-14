

<!--THE NEW CODE FOR THE DYNAMIC ACCORDION-->


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

      <?php $i=1; foreach ($groupSection as $part => $section) { ?>
        <div class="panel panel-default">

            <!--Articles Part-->
            <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
              <p class="panel-title">

                <a <?php if($i>1){ echo 'class="collapsed"'; } ?> role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                  {{ $part }}
                </a>                
              </p>
            </div>

            <!--Articles Section-->
            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php if($i==0) echo 'in' ;?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
              <div class="panel-body">
                <a class="section_link" href="/post_1992_legislation/act-content/{{ @$myArticle->id }}"><li style="list-style: none;">{{ $part }}</li></a>
              </div>
            </div>
          </div>
      <?php $i++; } ?>

</div>  

{{-- <div class="panel-group table-wrapper-scroll-acts" id="accordion" role="tablist" aria-multiselectable="true">

      <?php $i=1; foreach ($myArticles as $myArticle) { ?>
        <div class="panel panel-default">

            <!--Articles Part-->
            <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
              <p class="panel-title">
                <a <?php if($i>1) echo 'class="collapsed"' ;?>       role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                  {{ $myArticle->part }}
                </a>                
              </p>
            </div>

            <!--Articles Section-->
            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php if($i==0) echo 'in' ;?>" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
              <div class="panel-body">
                <a class="section_link" href="/post_1992_legislation/act-content/{{ $myArticle->id }}"><li style="list-style: none;">{{ $myArticle->section }}</li></a>
              </div>
            </div>
          </div>
      <?php $i++; } ?>
      <?php if($c>1) echo '<div class="collapsed"> ;?>

    </div>   --}}


           



            