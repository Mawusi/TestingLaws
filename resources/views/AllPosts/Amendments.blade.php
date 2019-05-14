
	
	@foreach($allPostsAmends as $allPostsAmend)
		<tr>
		    <td>
				<a href="/post_1992_legislation/amended-title/{{ $allPostsAmend->id }}"><li style="list-style: none;">{{ $allPostsAmend->name }}</li>
				</a>
		    </td>   
		</tr>
	@endforeach

