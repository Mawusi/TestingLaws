@foreach($allConstitutions as $allConstitution)
    <tr>
        <td>{{ $allConstitution->name }}</td>

        <td>
        	<a href="/constitution/all-countries/act-title/{{ $allConstitution->id }}"><li style="list-style: none;">{{ $allConstitution->constitution_name }}</li></a>
        </td>
        <td>{{ $allConstitution->year }}</td>   
    </tr>
@endforeach