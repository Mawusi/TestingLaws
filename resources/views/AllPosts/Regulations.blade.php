
	
	@foreach($allRegulations as $allRegulation)
		<tr>
		    <td>
		    	<a href="/post_1992_legislation/regulation-title/{{ $allRegulation->id }}"><li style="list-style: none;">{{ $allRegulation->title }}</li>
		    	</a>
		    </td>   
		</tr>
	@endforeach

