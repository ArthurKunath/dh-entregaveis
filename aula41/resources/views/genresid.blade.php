{{ $genre->name}}
<br>
{{$genre->movies->implode("title", ", ")}}
