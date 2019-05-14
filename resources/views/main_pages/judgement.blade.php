@extends('layouts.main')

@section('content')

@include('layouts.judgement_menu')

<div class="container row-margin">
        <div class="row">
            <div class="col-md-6">
                    <h2>All Law Judgements</h2>
                    @foreach($allLaws as $allLaw)
                        <ul>
                            <a href="#"><li>{{ $allLaw->title }}</li></a>
                        </ul>
                    @endforeach
            </div>

            <div class="col-md-3">
                <h2>Filters</h2>
            </div>

            <div class="col-md-3">
                <h2>Adverts</h2>
            </div>
        </div>
    </div>


@endsection