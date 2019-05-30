
@foreach($africaJudgements as $africaJudgement)
    <tr>
        <td>{{ $africaJudgement->country }}</td>
        <td>
            <a href="/judgement/{{ $africaJudgement->country }}/{{ $africaJudgement->id}}"><li style="list-style: none;">{{ $africaJudgement->case_title }}</li></a>
        </td> 
        <td>{{ $africaJudgement->year }}</td>  
    </tr>
@endforeach