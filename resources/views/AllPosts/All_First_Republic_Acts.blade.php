@foreach($allFirstRepublics as $allFirstRepublic)
    <tr>
        <td>
        	<a href="/pre_1992_legislation/first_republic-title/{{ $allFirstRepublic->id}}"><li style="list-style: none;">{{ $allFirstRepublic->title }}</li></a>
        </td>   
    </tr>
@endforeach