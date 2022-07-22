<!DOCTYPE html>
<html>
<head>
    @include ('layout.head')
</head>
<body>
    @include ('layout.header')
    <div class="container">
        @include ('layout.sidebar')
        @yield('content')
    </div>

    @include ('layout.footer')

</body>
</html>
