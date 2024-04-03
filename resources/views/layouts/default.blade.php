<!DOCTYPE html>
<html>

<head>
    <title> {{ $title }} </title>
    <meta name="description" content="@yield('meta_desc')">

    @include('includes.head')
</head>

<body>
    <div class="boxed_wrapper">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </div>
</body>

</html>