@extends('layouts.default')

@section('content')
<h1>Add new Post</h1>
<hr/>
{!! Form::open(['action'=>'PostController@store','method'=>'POST']) !!}

<div class="form-group">
{{Form::label('Title')}}
{{Form::text('title','',[ 'placeholder'=>'enter post title','class'=>'form-control' ])}}
</div>

<div class="form-group">
{{Form::label('Body')}}
{{Form::textarea('body','',[ 'placeholder'=>'enter post title','class'=>'form-control' ])}}
</div>



{!! Form::close() !!}

@endsection