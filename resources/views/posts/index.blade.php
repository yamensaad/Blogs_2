@extends('layouts.default')

@section('content')

<div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Posts</div>
                <div class="panel-body">
                
             
                    @foreach($posts as $post)
                        <a href="/posts/{{$post->id}}}" class="btn btn-primary btn-xs">
                           
                            {{$post->body }}
                        </a>
                    @endforeach
                </div>
            </div>
            
        </div>


@endsection