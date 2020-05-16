

@extends('layouts.default')


@section('content')
@if($posts->count()>0)
@foreach($posts as $post)


@endforeach
{{$posts->links()}}
@else
<div class="alert alert-info">
<strong>OPPs </strong> noposts
</div>
@endif
@endsection