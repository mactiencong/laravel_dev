<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/layout.css') }}" />
</head>
<body>
    <div id="wrapper">
        @include('layout.header')
        <div id="content">
            @yield('content')
        </div>
        @include('layout.footer')
    </div>
</body>
</html>