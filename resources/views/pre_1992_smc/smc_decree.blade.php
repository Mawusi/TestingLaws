@extends('layouts.main')


@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endsection

@section('content')

@include('layouts.pre_1992_menu')

    <div class="container-fluid row-margin">
        <div class="row">
            <div class="col-md-7" >
                <div class="list-group">
                    <table class="table table-striped table-condensed" id="datatable">
                        <thead>
                            <tr>
                                <th>All Smc Decree</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allSmcDecrees as $allSmcDecree)
                            <tr>
                                <td>
                                    <a href="/pre_1992_legislation/smc-title/{{ $allSmcDecree->id}}"><li style="list-style: none;">{{ $allSmcDecree->title }}</li></a>
                                </td>   
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>   
            </div>
            @include('pre_1992_content.container_main_nlc')
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