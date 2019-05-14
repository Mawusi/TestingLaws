@foreach($allPosts as $allPost)
    <tr>
        <td>
        	<a href="/post_1992_legislation/act-title/{{ $allPost->id }}"><li style="list-style: none;">{{ $allPost->title }}</li></a>
        </td>   
    </tr>
@endforeach