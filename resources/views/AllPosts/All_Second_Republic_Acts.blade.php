@foreach($allSecondRepublics as $allSecondRepublic)
    <tr>
        <td>
        	<a href="/pre_1992_legislation/second_republic-title/{{ $allSecondRepublic->id}}"><li style="list-style: none;">{{ $allSecondRepublic->title }}</li></a>
        </td>   
    </tr>
@endforeach