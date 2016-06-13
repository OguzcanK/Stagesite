<!doctype html>
<html lang="en">
<head>
    @include('layouts.metadata')
    <title>@yield('title') | ContactenBeheer</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>

@include('layouts.header')

    <div class="container">
    <h1 id="title">
    </h1>

        @include('layouts.aside')
        @yield('content')
</div>

    @include('layouts.footer')

    @yield('script')
</body>
</html>