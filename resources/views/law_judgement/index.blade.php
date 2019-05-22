@extends('layouts.main')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection

@section('content')

    @include('layouts.judgement_menu')

    <div class="container-fluid row-margin">
        <div class="row">
            <div class="col-md-7" >
                <div class="list-group">
                    <table class="table table-striped table-condensed" id="datatable">
                        <thead>
                            <tr>
                                <th>All Laws Judgements</th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('law_judgement.index_supreme')
                            @include('law_judgement.index_high')
                            @include('law_judgement.index_circuit_court')
                            @include('law_judgement.index_court_of_appeal')
                            @include('law_judgement.index_district_court')
                            {{--@include('law_judgement.index_international_cases')--}}
                        </tbody>
                    </table>
                </div>
            </div>
                            @include('law_judgement.judgement_contain_main')
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function(){
            $('#datatable').DataTable();
        });
    </script>
@endsection