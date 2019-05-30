@foreach($circuitCourts as $circuitCourt)
    <tr>
        <td>
            <a href="/judgement/circuit-court-case-title/{{ $circuitCourt->id}}"><li style="list-style: none;">{{ $circuitCourt->case_title }}</li></a>
        </td> 
        <td>{{ $circuitCourt->year }}</td>  
    </tr>
@endforeach