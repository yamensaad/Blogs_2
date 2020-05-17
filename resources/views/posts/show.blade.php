@extends('layouts.default')

@section('content')
    <h1>{{ $post->title }} </h1>
  
    <div class="clearfix">
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-default">
            <i class='fas fa-edit'></i> Edit Post
        </a>

    <hr />
    <div>
        {!! $post->body !!}
    </div>
@endsection