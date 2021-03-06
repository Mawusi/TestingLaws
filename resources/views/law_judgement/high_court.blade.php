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
                                <th>All High Court Cases</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($highCourts as $highCourt)
                                <tr>
                                    <td>
                                        <a href="/judgement/high-court-case-title/{{ $highCourt->id}}"><li style="list-style: none;">{{ $highCourt->case_title }}</li></a>
                                    </td>   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                            @include('AllPosts.container_main_all')
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