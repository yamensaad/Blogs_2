@extends('layouts.default')

<h1>Contact US</h1>

@section('content')
<form action="">
<div class="form-group">
<label for='name'>Name</label>
<input type="text" class="form-control" name="name" />
</div>
</form>
<div class="form-group">
<label for='name'>Email</label>
<input type="text" class="form-control" name="email" />
</div>
<div class="form-group pull-right">
<button class='btn btn-info' > Send to me  </button>
</div>
</form>

@endsection