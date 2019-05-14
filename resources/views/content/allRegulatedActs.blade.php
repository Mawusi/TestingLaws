


<table class="table table-striped table-condensed" id="regulated_datatable">
    <thead>
        <tr>
            <th>All Regulations on <b>{{ $myAct['title'] }}</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach($regulatedActs as $regulatedAct)
        <tr>
            <td>
                <a href="/post_1992_legislation/single-regulation-title/{{ $regulatedAct->id }}" class="regulated_link"><li style="list-style: none;">{{ $regulatedAct->title }}</li></a>
            </td>   
        </tr>
        @endforeach
    </tbody>
</table>




            


                