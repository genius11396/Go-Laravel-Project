@extends('frontend.driver.master')	
@section('content')

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

        <a href="{{route('policy')}}">
          <button class="btn btn-info">Policy</button>
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

<div class="container-fluid">
	<div class="container p-4">
		<p class="text-center " style="font-size: 30px;">Our Policy</p>
		<div class="d-flex justify-content-center">
			<div class="col-lg-5">
				<p><i class="fas fa-caret-right"></i> In one order, we will substract 20% from your amount</p>
				<p><i class="fas fa-caret-right"></i> In one order, we will substract 20% from your amount</p>
				<p><i class="fas fa-caret-right"></i> In one order, we will substract 20% from your amount</p>
			</div>
		</div>
	</div>
</div>



@endsection