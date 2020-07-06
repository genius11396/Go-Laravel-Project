<!DOCTYPE html>
<html>
<head>
    <title>Go</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="icon" type="text/css" href="{{asset('frontendtemplate/images/icon3.svg')}}" >

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/font.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/select2.min.css')}}">

    <script type="text/javascript" src="{{asset('frontendtemplate/bootstrap/js/jquery.min.js')}}"></script>



    <script type="text/javascript" src="{{asset('frontendtemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontendtemplate/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontendtemplate/js/select2.min.js')}}"></script>
</head>

<body> 
    @yield('nav')

    @yield('content')

    @yield('script')
    
    @yield('footer')
</body>
</html>