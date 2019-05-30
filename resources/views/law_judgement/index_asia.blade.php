
@foreach($asiaJudgements as $asiaJudgement)
    <tr>
        <td>{{ $asiaJudgement->country }}</td>
        <td>
            <a href="/judgement/{{ $asiaJudgement->country }}/{{ $asiaJudgement->id}}"><li style="list-style: none;">{{ $asiaJudgement->case_title }}</li></a>
        </td> 
        <td>{{ $asiaJudgement->year }}</td>  
    </tr>
@endforeach