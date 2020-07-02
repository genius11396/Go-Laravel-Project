<!DOCTYPE html>
<html>
<head>
    <title>Go</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="text/css" href="{{asset('frontendtemplate/images/icon3.svg')}}" >

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/font.css')}}">

    <script type="text/javascript" src="{{asset('frontendtemplate/bootstrap/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontendtemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontendtemplate/js/custom.js')}}"></script>
</head>

<body>

    <nav class="navbar navbar-dark" style="height: 80px; background-color: #202e2f;">
        <div class="container-fluid">

            <div class="d-flex flex-grow-1">
            <a href="#">
                <img src="{{asset('frontendtemplate/images/go_logo.png')}}" height="100">

                <span id="car" style="position: absolute;">
                    <img src="{{asset('frontendtemplate/images/car.svg')}}" height="100">
                </span>

            </a>
            </div>
            <a href="" class="p-2">
                <button class="btn btn-outline-light">
                Login
                </button>
            </a>
            <a href="" class="p-2">
                <button class="btn btn-outline-light">
                Register
                </button>
            </a>
        </div>
    </nav>


    @yield('content')

    <div class="pt-2" style="background-color: #202e2f; text-align: center;">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-12 ">
                    <p class="text-white pb-3">All right reserved</p>
                </div>
            </div>  
        </div>
    </div>


</body>
</html>