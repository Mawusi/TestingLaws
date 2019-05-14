


  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{ asset('mp4/bg.mp4') }}" type="video/mp4">
  </video>
  {{-- <div class="overlay"></div> --}}
  <div class="container-fluid">
            <header class="clearfix">
                <div class="container-fluid pull-right">
                    <h2 style="color: white;">{{ menu('main', 'bootstrap') }}</h2>
                </div>
                <div class="pull-left">   
                    @include('layouts.sitelogo')
                </div>    
            </header>
            {{-- @yield('content') --}}
  </div>
