<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>@yield('title', $title ?? env('APP_NAME'))</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    @vite([
        'resources/css/bootstrap.css',
        'resources/css/SimpleBlog.css',
        'resources/js/bootstrap.bundle.js',
    ])
</head>
<body>
<div id="wrap">

    @include('layouts.incs.blog-header')

        @yield('content')

    @include('layouts.incs.blog-footer')


</div>


</body>
</html>
