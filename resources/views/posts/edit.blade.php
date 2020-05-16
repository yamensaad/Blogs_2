@extends('layouts.default')

@section('content')
<h1>Edit {{$post->title}}</h1>
<hr/>
{!! Form::open(['action'=>['PostController@update',$post->id] ,'method'=>'POST']) !!}

<div class="form-group">
{{Form::label('Title')}}
{{Form::text('title','$post->title',[ 'placeholder'=>'enter post title','class'=>'form-control' ])}}
</div>

<div class="form-group">
{{Form::label('Body')}}
{{Form::textarea('body','$post->body',[ 'placeholder'=>'enter post body','class'=>'form-control' ])}}
</div>

<div class="form-group pull-right">
{{Form::submit('save',['class'=>'btn btn-primary'])}}
</div>



{!! Form::close() !!}

@endsection