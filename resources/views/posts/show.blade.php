@extends('layouts.default')

@section('content')
<h1>{{ $post->title}} </h1>
<h1>{{$post->title}}</h1>
<a herf="/posts/{{$post->id}}/edit" class="btn btn-default"> 
Edit Post
 </a>
<hr />
<div>
{{!! $post->body !!}}
</div>	
@endsection



