@extends('layouts.default')

<h1>Contact US</h1>

@section('content')
{!! Form::open(['action'=>'PagesController@dosend','method'=>'POST']) !!}

<div class="form-group">
{{Form::label('Name')}}
{{Form::text('title','',[ 'placeholder'=>'enter your name ','class'=>'form-control' ])}}
</div>

<div class="form-group">
{{Form::label('Body')}}
{{Form::textarea('body','',[ 'placeholder'=>'enter email','class'=>'form-control '])}}
</div>
<div class="form-group">
{{Form::label('Name')}}
{{Form::text('title','',[ 'placeholder'=>'Enter subject ','class'=>'form-control' ])}}
</div>  
<div class="form-group">
{{Form::label('Name')}}
{{Form::text('title','',[ 'placeholder'=>'enter your massage ','class'=>'form-control' ])}}
</div>

<div class="form-group pull-right">
{{Form::submit('save',['class'=>'btn btn-primary'])}}
</div>



{!! Form::close() !!}

@endsection