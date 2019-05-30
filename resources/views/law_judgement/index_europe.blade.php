
@foreach($europeJudgements as $europeJudgement)
    <tr>
        <td>{{ $europeJudgement->country }}</td>
        <td>
            <a href="/judgement/{{ $europeJudgement->country }}/{{ $europeJudgement->id}}"><li style="list-style: none;">{{ $europeJudgement->case_title }}</li></a>
        </td> 
        <td>{{ $europeJudgement->year }}</td>  
    </tr>
@endforeach