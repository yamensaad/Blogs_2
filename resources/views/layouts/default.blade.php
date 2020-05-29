<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name','posts2') }}</title>

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

@include('elements.navbar')
    <div class="container">
        @include('elements.flash') 
        @yield('content')
    </div>

</body>
</html>
