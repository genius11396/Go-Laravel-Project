@extends('frontend.driver.master')

@section('nav')

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


      <a href="">
          <button class="btn btn-info">Order List</button>
        </a>

        <a href="">
          <button class="btn btn-info m-2">Check Orders</button>
        </a>

    @role('driver')
    <ul class="m-2">
        <!-- Authentication Links -->
        @guest
        @else   
        <div id="username">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                    <span style="border-radius: 100px; background-color: #028686; padding: 9px;">{{ Auth::user()->initials() }}  </span>
                    <span class="caret"></span>
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
    @else
        <a href="{{route('login')}}">
          <button class="btn btn-info">Login</button>
        </a>

        <button class="btn btn-info m-2" data-toggle="modal" data-target="#myModal">
          Register
        </button>
    @endrole

        

            <div id="myModal" class="modal fade" role="dialog" >
                <div class="modal-dialog">

                  <div class="modal-content modalbg">
                    <div class="modal-header justify-content-center">
                      <h3 class="modal-title">Registration</h3>
                    </div>
                    <div class="modal-body d-flex justify-content-center" id="link">
                      <a href="{{route('register')}}" class="p-2"><button class="btn btn-outline-light">Register for Customer</button></a>
                      <a href="{{route('driverform')}}" class="p-2">
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

@endsection

@section('content')

<div class="container-fluid">
  <div class="container">

    <p class="text-center pt-5" style="font-size: 28px;">You have no orders yets</p>
    <div class="outcard d-flex justify-content-center">
      <div class="card col-lg-9 col-md-12 col-sm-12">
        <div class="card-block">
          <form method="POST" enctype="multipart/form-data" action="">
            @csrf
            <input type="hidden" name="cusname" id="cusname" value="1">
            <input type="hidden" name="driname" id="driname" value="1">
            <input type="hidden" name="pupplace" id="pupplace" value="ygn">
            <input type="hidden" name="doffplace" id="doffplace" value="bago">
            <input type="hidden" name="pupdate" id="pupdate" value="8/7/2020">
            <input type="hidden" name="doffdate" id="doffdate" value="10/7/2020">
            <input type="hidden" name="puptime" id="puptime" value="10:00 AM">
            <input type="hidden" name="price" id="price" value="90000">
            <input type="hidden" name="cartype" id="cartype" value="Van">
          <div class="row px-3 pr-sm-0 pt-3 pb-0"  style="transition: all 0.5s ease;">

            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="logoframe p-1 pt-4" style="height: 40px; width: auto;" >
                <img src="{{asset('frontendtemplate\images\go_logo.png')}}" style="height: 100px;width:auto;" alt="">
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 pl-sm-4 ">
              <p >Customer Name</p>
              <p >Pick-up Place</p>
              <p >Drop-off Place</p>
              <p >Price</p>



            </div>
            @foreach($orders as $order)
            <div class="col-lg-4 col-md-3 col-sm-5 pl-sm-4  pl-1 bg-light">
              <p ><i class="fas fa-caret-right"></i>{{$order->user_id}}</p>
              <p ><i class="fas fa-caret-right"></i> Pick-up Date</p>
              <p ><i class="fas fa-caret-right"></i> Pick-up Date</p>
              <p ><i class="fas fa-caret-right"></i> Pick-up Date</p>

            </div>
            @endforeach
            <div class="btn-group col-lg-3 col-md-3">

             <button type="submit" class="btn btn-primary m-1 rounded" style="height: 40px">Accept</button>
             <a href="#" class="btn btn-danger m-1 rounded " style="height: 40px;">Cancle</a>
           </div>


           {{--  @if(Auth::user()->id==$driver->id)
            <div class="col-lg-4 col-md-4 p-0 col-sm-5">
              <p ><i class="fas fa-caret-right"></i> {{$userdetails[0]}} \ {{$userdetails[1]}}</p>
              <p><i class="fas fa-caret-right"></i> {{$userdetails[2]}} \ {{$userdetails[3]}} \ {{$userdetails[5]}} \ {{$userdetails[6]}}</p>
              <p><i class="fas fa-caret-right"></i>{{$userdetails[4]}} \ </p>   

            </div>

            --}}

            <div class="col-lg-3 col-md-3 col-sm-5 pl-sm-4 offset-sm-2 offset-md-2 offset-lg-2 p-0 hideclass">
              <p >Pick-up Date</p>
              <p >Drop-off Date</p>
              <p >Pick-up Time</p>
              <p >Price</p>
              <p >Car Type</p>
            </div>
            <div class="col-lg-4 col-md-4 pr-5 col-sm-5 hideclass">
              <p><i class="fas fa-caret-right"></i> 10/7/2020</p>
              <p><i class="fas fa-caret-right"></i> 20/7/2020</p>
              <p><i class="fas fa-caret-right"></i> 10:00 AM</p>
              <p><i class="fas fa-caret-right"></i> 30000 MMK(one day)</p>
              <p><i class="fas fa-caret-right"></i> Van</p>
            </div>

          </div>
          <div class="d-flex justify-content-center bg-light" id="showmore">
            <i class="fas fa-chevron-down"></i></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('footer')
    <footer class="pt-2" style="background-color: #202e2f; text-align: center;">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-12 ">
                    <p class="text-white pb-3">All right reserved</p>
                </div>
            </div>  
        </div>
    </footer>

@endsection

@section ('script')

@endsection