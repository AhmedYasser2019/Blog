<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin area</title>
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">--}}
    @yield('styles')
</head>
<body>
@include('includes.admin-header')
    @yield('content')
    @yield('scripts')
</body>
</html>