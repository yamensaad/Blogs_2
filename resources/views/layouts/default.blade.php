<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name','posts2') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
 
</head>
<body>

@include('elements.navbar')
    <div class="container">
        @include('elements.flash') 
        @yield('content')
    </div>

</body>
</html>
