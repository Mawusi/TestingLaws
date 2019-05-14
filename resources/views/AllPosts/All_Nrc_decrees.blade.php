@foreach($allNrcDecrees as $allNrcDecree)
    <tr>
        <td>
        	<a href="/pre_1992_legislation/nrc-title/{{ $allNrcDecree->id}}"><li style="list-style: none;">{{ $allNrcDecree->title }}</li></a>
        </td>   
    </tr>
@endforeach