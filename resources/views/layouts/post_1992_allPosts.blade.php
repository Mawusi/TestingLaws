<div class="container-fluid" id="main_act">
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand"><strong>Post-1992 Legislation</strong></a>-->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      {{-- <ul class="nav navbar-nav"> --}}
        {{ menu('post_1992_allPosts', 'bootstrap') }}
      {{-- </ul> --}}
      <form class="navbar-form navbar-right">
        <i class="fas fa-search" aria-hidden="true"></i>
        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</div>