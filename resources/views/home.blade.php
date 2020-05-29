@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your posts</h3>
                    <thhead>
                    <table class="table table-sripped">
                    <tr>
                    <th>Title</th>
                    <th>created</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                    </thhead>
                    </table>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                    <td> {{$post->title}} </td>
                    <td> {{$post->created_at}} </td>
                    <td> {{$post->title}} </td>
                    <td> {{$post->title}} </td> 
                      {!! Form::open(['action'=> ['PostController@update', $post->id ], 'method'=>'POST' ])  !!}
                  {{ Form::hidden('_method', 'DELETE') }}     
                   <button class="btn btn-danger" type="submit">
                         <i class="fas fa-trash"></i> Delete Post
                    </button>

            {!! Form::close() !!}
                    </tr>
                     @endforeach
                    </tbody>


                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
