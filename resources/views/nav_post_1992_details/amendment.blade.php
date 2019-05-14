@extends('layouts.main')

@section('content')

@include('layouts.post_1992_details_specific')

<div class="container-fluid">

        <a href="">Click to preview all Amendments</a>
    </div>
    <hr>

		   {{-- @foreach($myAmendedTitles as $myAmendedTitle)
                <a class="amendment_link" href="/post_1992_legislation/act-title/{{ $myAmendedTitle->id }}">
                <ul>
                    <li>
                        {{ $myAmendedTitle->amended_title }}
                    </li>
                </ul>
                </a>
            @endforeach --}}
                


@endsection