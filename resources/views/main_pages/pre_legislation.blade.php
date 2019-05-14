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
                                <th>All Pre 1992 Legislation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('AllPosts.All_First_Republic_Acts')
                            @include('AllPosts.All_Second_Republic_Acts')
                            @include('AllPosts.All_Third_Republic_Acts')
                            @include('AllPosts.All_Pndc_laws')
                            @include('AllPosts.All_Nlc_decrees')
                            @include('AllPosts.All_Nrc_decrees')
                            @include('AllPosts.All_Smc_decrees')
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