@foreach($allSmcDecrees as $allSmcDecree)
    <tr>
        <td>
        	<a href="/pre_1992_legislation/smc-title/{{ $allSmcDecree->id}}"><li style="list-style: none;">{{ $allSmcDecree->title }}</li></a>
        </td>   
    </tr>
@endforeach