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
                                <th>All PNDC Laws</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allPndcLaws as $allPndcLaw)
                            <tr>
                                <td>
                                    <a href="/pre_1992_legislation/pndc-title/{{ $allPndcLaw->id}}"><li style="list-style: none;">{{ $allPndcLaw->title }}</li></a>
                                </td>   
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>   
            </div>
            @include('pre_1992_content.container_main_pndc')
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