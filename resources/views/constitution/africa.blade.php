
@extends('layouts.main')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection

@section('content')

    @include('layouts.constitution_menu')

    <div class="container-fluid row-margin">
        <div class="row">
            <div class="col-md-8">
                <div class="list-group">
                    <table class="table table-striped table-condensed" id="datatable">
                        <thead>
                            <tr>
                                <th>Name of Country</th>
                                <th>Constitution Name</th>
                                <th>Year of Constitution</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($africaConstitutions as $africaConstitution)
                        <tr>
                            <td>{{ $africaConstitution->name }}</td>
                            <td>
                                <a href="/constitution/all-countries/act-title/{{ $africaConstitution->id }}"><li style="list-style: none;">{{ $africaConstitution->constitution_name }}</li></a>
                            </td>
                            <td>{{ $africaConstitution->year }}</td>   
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                            {{--@include('AllPosts.container_main_all')--}}
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