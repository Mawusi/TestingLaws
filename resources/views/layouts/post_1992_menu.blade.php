<div class="container-fluid">
<div class="navbar navbar-inverse">
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
        {{ menu('post_1992_menu', 'bootstrap') }}
      {{-- </ul> --}}
      <form class="navbar-form navbar-right">
        <input class="form-control" id="mysearch" type="text" aria-label="Search">
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</div>
