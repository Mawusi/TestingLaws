


<table class="table table-striped table-condensed" id="amend_datatable">
    <thead>
        <tr>
            <th>All Amendments on <b>{{ $myAct['title'] }}</b></th>
        </tr>
    </thead>
    <tbody>
    @foreach($amendedActs as $amendedAct)
        <tr>
            <td>
                <a href="/post_1992_legislation/single-amended-title/{{ $amendedAct->id }}" class="amended_link"><li style="list-style: none;">{{ $amendedAct->name }}</li></a>
            </td>   
        </tr>
    @endforeach
    </tbody>
</table>




            


                