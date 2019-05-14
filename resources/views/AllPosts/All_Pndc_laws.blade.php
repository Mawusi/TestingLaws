@foreach($allPndcLaws as $allPndcLaw)
    <tr>
        <td>
        	<a href="/pre_1992_legislation/pndc-title/{{ $allPndcLaw->id}}"><li style="list-style: none;">{{ $allPndcLaw->title }}</li></a>
        </td>   
    </tr>
@endforeach