@foreach($courtOfAppeals as $courtOfAppeal)
    <tr>
        <td>
            <a href="/judgement/court-of-appeal-case-title/{{ $courtOfAppeal->id}}"><li style="list-style: none;">{{ $courtOfAppeal->case_title }}</li></a>
        </td>   
    </tr>
@endforeach