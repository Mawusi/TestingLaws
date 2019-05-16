@foreach($internationalCases as $internationalCase)
    <tr>
        <td>
            <a href="/judgement/international-case-title/{{ $internationalCase->id}}"><li style="list-style: none;">{{ $internationalCase->case_title }}</li></a>
        </td>   
    </tr>
@endforeach