@foreach($supremeCourts as $supremeCourt)
    <tr>
        <td>
            <a href="/judgement/supreme-court-case-title/{{ $supremeCourt->id}}"><li style="list-style: none;">{{ $supremeCourt->case_title }}</li></a>
        </td>   
    </tr>
@endforeach