<!doctype html>
<html lang="en">
<head>
    @include('layouts.metadata')
    <title>@yield('title') | Stagesite</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>
<body>

@include('layouts.header')

<div class="container">

    @include('layouts.aside')
    @yield('content')
</div>

@include('layouts.footer')



</body>
</html>