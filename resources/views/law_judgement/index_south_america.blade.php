
@foreach($southAmericaJudgements as $southAmericaJudgement)
    <tr>
        <td>{{ $southAmericaJudgement->country }}</td>
        <td>
            <a href="/judgement/{{ $southAmericaJudgement->country }}/{{ $southAmericaJudgement->id}}"><li style="list-style: none;">{{ $southAmericaJudgement->case_title }}</li></a>
        </td> 
        <td>{{ $southAmericaJudgement->year }}</td>  
    </tr>
@endforeach