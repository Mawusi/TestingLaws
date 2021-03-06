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
                                <th>All Second Republic Acts</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($allSecondRepublics as $allSecondRepublic)
                            <tr>
                                <td>
                                    <a href="/pre_1992_legislation/second_republic-title/{{ $allSecondRepublic->id}}"><li style="list-style: none;">{{ $allSecondRepublic->title }}</li></a>
                                </td>   
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>   
            </div>
            @include('pre_1992_content.container_main_second_rep')
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