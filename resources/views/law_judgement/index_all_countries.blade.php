
@foreach($allJudgementLaws as $allJudgementLaw)
    <tr>
        <td>{{ $allJudgementLaw->country }}</td>
        <td>
            <a href="/judgement/{{ $allJudgementLaw->country }}/{{ $allJudgementLaw->id}}"><li style="list-style: none;">{{ $allJudgementLaw->case_title }}</li></a>
        </td> 
        <td>{{ $allJudgementLaw->year }}</td>  
    </tr>
@endforeach