<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('css/main.css') }}">--}}
    @vite([
//        'resources/css/app.css',
        'resources/css/bootstrap.css',
        'resources/css/main.css',
        'resources/js/app.js',
        'resources/js/bootstrap.bundle.js',
    ])
    <title>@yield('title', 'PHPZone')</title>
    <meta name="description" content="{{ $description ?? ''}}">
</head>
<body>

@section('navbar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages.create') }}">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@show

<div class="container mt-3">

    @yield('content')

</div>

@include('layouts.incs.footer', ['footer_data' => 'Hello from layout'])

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>--}}
</body>
</html>
