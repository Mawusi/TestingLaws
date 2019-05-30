@extends('layouts.main')


@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection

@section('content')

@include('layouts.post_1992_menu')

    <div class="container-fluid row-margin">
        <div class="row">
            <div class="col-md-7" >
                <div class="list-group">
                    <table class="table table-striped table-condensed" id="datatable">
                        <thead>
                            <tr>
                                <th>All Legislative Instruments</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allRegulations as $allRegulation)
                            <tr>
                                <td>
                                    <a href="/post_1992_legislation/regulation-title/{{ $allRegulation->id }}"><li style="list-style: none;">{{ $allRegulation->title }}</li></a>
                                </td> 
                                <td>{{ $allRegulation->year }}</td>  
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>   
            </div>
            @include('AllPosts.container_main_regulation')
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