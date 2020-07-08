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

<body style="position: relative;min-height: 100vh"> 
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
            <a href="{{route('login')}}" class="p-2 btn btn-outline-light">
                Login
            </a>

            <button class="btn btn-outline-light m-2" data-toggle="modal" data-target="#myModal">
              Register
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @else
                <div id="username">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                    </li>
                </div>
                    @endguest
                </ul>
            </div>

          

            <div id="myModal" class="modal fade" role="dialog" >
                <div class="modal-dialog">

                  <div class="modal-content modalbg">
                    <div class="modal-header justify-content-center">
                      <h3 class="modal-title">Registration</h3>
                    </div>
                    <div class="modal-body d-flex justify-content-center" id="link">
                      <a href="{{route('register')}}" class="p-2"><button class="btn btn-outline-light">Register for Customer</button></a>
                      <a href="{{route('driverregister.create')}}" class="p-2">
                        <button class="btn btn-outline-light">Register for Driver</button></a>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </nav>

    @yield('content')

    @yield('script')
       
        <footer class="pt-2" style="position: absolute;bottom: 0;width:100%;height: 5rem; background-color: #202e2f; text-align:center;">
         <p class="text-white py-3">All right reserved</p>

    </footer>
</body>

</html>