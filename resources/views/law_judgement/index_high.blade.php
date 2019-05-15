@foreach($highCourts as $highCourt)
    <tr>
        <td>
            <a href="/judgement/high-court-case-title/{{ $highCourt->id}}"><li style="list-style: none;">{{ $highCourt->case_title }}</li></a>
        </td>   
    </tr>
@endforeach