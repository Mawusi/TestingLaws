
@foreach($northAmericaJudgements as $northAmericaJudgement)
    <tr>
        <td>{{ $northAmericaJudgement->country }}</td>
        <td>
            <a href="/judgement/{{ $northAmericaJudgement->country }}/{{ $northAmericaJudgement->id}}"><li style="list-style: none;">{{ $northAmericaJudgement->case_title }}</li></a>
        </td>
        <td>{{ $northAmericaJudgement->year }}</td>  
    </tr>
@endforeach