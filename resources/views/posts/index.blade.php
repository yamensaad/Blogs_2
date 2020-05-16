@extends('layouts.default')

@section('content')
@foreach($posts as $post)
<div class="panel">
<div class="panel-heading">
<h3>{{$post->title}}</h3>
</div>

<div class= "panel-body">
{{$post->body}}
</div>
</div>
@endforeach
@endsection