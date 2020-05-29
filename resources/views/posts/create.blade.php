@extends('layouts.default')

@section('content')
<h1>Add new Post</h1>
<hr/>
{!! Form::open(['action'=>'PostController@store','method'=>'POST','files'=>true]) !!}

<div class="form-group">
{{Form::label('Title')}}
{{Form::text('title','',[ 'placeholder'=>'enter post title','class'=>'form-control' ])}}
</div>

<div class="form-group">
{{Form::label('Body')}}
{{Form::textarea('body','',[ 'placeholder'=>'enter post title','class'=>'form-control ckeditor'])}}
</div>

<div class="form-group pull-right">
{{Form::submit('save',['class'=>'btn btn-primary'])}}
<div class="form-group">
        {{ Form::label('Featured Image') }}
        {{ Form::file('photo', ['class'=>'form-control' ]) }}
    </div>  
</div>



{!! Form::close() !!}

@endsection