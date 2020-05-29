  
@extends('layouts.default')

@section('content')
    @if($posts->count() > 0 )
        @foreach($posts as $post)
            <div class="panel">
                <div class="panel-heading">
                    <h3>
                        <a href="/posts/{{$post->slug}}">
                            {{ $post->title }}
                        </a>
                    </h3>
                </div>

                <div class="panel-body">
                </div>
                <div class="panel footer">
                <span class="label info">
                 <<i class='fas fa-edit'></i> Edit Post {{$post->created }}
                </span>
               &nbsp 
                </div>
                <span class="label-primary">
                 <<i class='fas fa-user'></i> Edit Post {{$post->user->name}}
                </span>
            </div>
            
        @endforeach
        {{ $posts->links() }}
    @else
        <div class="alert alert-info">
            <strong>Ops</strong> No Posts
        </div>
    @endif

@endsection