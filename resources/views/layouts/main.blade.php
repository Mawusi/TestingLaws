<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ setting('site.title') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->
        
        <!-- <link rel="stylesheet" href="{{ asset('css/material-bootstrap.css') }}"> -->

        <!-- Compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

        <!-- Compiled and minified JavaScript -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->


        @yield('assets')

        
    </head>
    {{-- <body style="background-color: lightblue;"> --}}
    <body style="background-color: #F8F8F8;">
        <div class="container-fluid">
            <header class="clearfix">
                <div class="container-fluid pull-right">
                    {{ menu('main', 'bootstrap') }}
                </div>
                <div class="pull-left">   
                    @include('layouts.sitelogo')
                </div>
            </header>
            @yield('content')
        </div>

        <div class="container"> 
            @include('layouts.footer')
        </div>
            
        

        <!--scripts-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>   
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/myscript.js') }}"></script>

        @yield('scripts')

    </body>
</html>
