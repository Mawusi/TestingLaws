@foreach($allNlcDecrees as $allNlcDecree)
    <tr>
        <td>
        	<a href="/pre_1992_legislation/nlc-title/{{ $allNlcDecree->id}}"><li style="list-style: none;">{{ $allNlcDecree->title }}</li></a>
        </td>   
    </tr>
@endforeach