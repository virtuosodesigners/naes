<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @section('head')
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap-theme.min.css')}}" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}" type="text/css" >
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css" >
        <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>

    @show
</head>

<body>
@yield('body')
</body>
</html>