<!doctype html>
<html lang="en">
<head>
    @include('common.admin.meta')

    <title>@yield('title', 'Learn')</title>
    @yield('style')
</head>
<body>


    @yield('main')

    @include('common.admin.js')
    @yield('script')
</body>
</html>




