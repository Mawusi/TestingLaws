@foreach($districtCourts as $districtCourt)
    <tr>
        <td>
            <a href="/judgement/district-court-case-title/{{ $districtCourt->id}}"><li style="list-style: none;">{{ $districtCourt->case_title }}</li></a>
        </td> 
        <td>{{ $districtCourt->year }}</td>  
    </tr>
@endforeach