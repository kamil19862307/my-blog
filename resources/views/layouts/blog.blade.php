<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>@yield('title', $title ?? env('APP_NAME'))</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    @vite([
        'resources/css/app.css',
        'resources/css/SimpleBlog.css',
        'resources/sass/main.sass',
        'resources/js/app.js',
    ])
</head>
<body>
<div id="wrap">

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
