<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Weibo') 微聊</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>

<body>

    @include('layouts._header')
    <div class="container">
        <div class=" col-md-12">
            @include('shared._messages')
            @yield('content')
        </div>
        @include('layouts._footer')
    </div>

</body>

</html>
