@extends('layouts.main')

@section('content')

<div class="container">

  <div class="row">

    {{-- @section('assets')
    <link rel="stylesheet" href="{{ asset('css/asset.css') }}">
    @endsection --}}

    @include('layouts.home_intro')

  </div>  

  <div class="row row-margin">
    <div class="col-md-6">
        <h4>Latest Law News</h4>

        <div class="row">
		{{-- @foreach($pages as $page)
			<div class="col-md-12">
            {{ $page->title }}
				<a href="/page/{{ $page->slug }}">
					<img src="{{ Voyager::image( $page->image ) }}" class="img-responsive" style="width:10em; height:10em">
				</a>
                <span>{!! $page->body !!}</span>
                <span>{!! $page->excerpt !!}</span>
			</div>
		@endforeach --}}
		</div>
        
    </div>

    <div class="col-md-4">
        <h4>Current Bills Development</h4>
        <ul>
            <li><a href="#">Education Bill 2019</a></li>
            <li><a href="#">Tax Amendment Bill 2019</a></li>
            <li><a href="#">Increase Amendment Bill 2019</a></li>
        </ul>
    </div>

    <div class="col-md-2">
        <h4>New acts Passed</h4> 
        <ul>
            <li><a href="#">Education Act 2019</a></li>
            <li><a href="#">Friends Act 2019</a></li>
            <li><a href="#">Aliens Act 2019</a></li>
            <li><a href="#">Food Act 2019</a></li>
            <li><a href="#">Peoples Act 2019</a></li>
        </ul>
    </div>
  </div>
</div>

@endsection