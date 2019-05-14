@foreach($allThirdRepublics as $allThirdRepublic)
    <tr>
        <td>
        	<a href="/pre_1992_legislation/third_republic-title/{{ $allThirdRepublic->id}}"><li style="list-style: none;">{{ $allThirdRepublic->title }}</li></a>
        </td>   
    </tr>
@endforeach