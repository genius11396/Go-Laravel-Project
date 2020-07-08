@extends('frontend.customer.master')
@section('content')
	<div class="mt-5 mb-3 text-center">
		<img src="{{asset('frontendtemplate/images/icon3.svg')}}" class="img-fluid card-img" style="width: 60px;"><h2>Car Search List</h2>
		<!-- <div style="padding-left: 250px;padding-right: 250px;"><hr></div> -->
	</div>


	<div class="container pb-5 ">
		{{--		foreach   --}}


		@if(sizeof($usersdriver)>0)
@foreach($usersdriver as $sameone)
		<div class=" no-gutters my-1" id="border">
				<div class="row mt-5">
				<div class="col-lg-2 col-md-4 col-sm-4" >
					<img src="{{asset('frontendtemplate/images/car1.jpg')}}" class="img-fluid card-img " style="width:200px;">
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
						<i class="fas fa-user-alt" id="icon"></i>
					<!-- <i class="fas fa-car" id="icon"></i> -->
					<p>{{$sameone->name}}</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
					<i class="fas fa-phone-alt" id="icon"></i>
					<p>{{$sameone->phone}}</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4" >
					<div class="text-center">
					<i class="fas fa-car" id="icon"></i>
					<p>{{$sameone->cartype}}</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
					<i class="fas fa-money-bill" id="icon"></i>
					<p>{{$sameone->price * $interval}}</p>
					</div>
				</div>
				<div class="col-sm-4 d-lg-none">
					
				</div>
				<div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-end pr-5 pb-3">
					 <a href="{{route('customer.details',$sameone->id)}}"  >
					 	<button class="btn btn-info mr-2"><i class="fa fa-eye"></i></button>
					 </a>

					 <a href="">		
					 	<button class="btn btn-info">Booking</button>
					 </a>
				

				</div>
			</div>

		</div>
@endforeach
@endif

		{{--		foreach   --}}


@if(sizeof($samedivision)>0)
@foreach($samedivision as $samezero)
		<div class=" no-gutters my-1" id="border">
				<div class="row mt-5">
				<div class="col-lg-2 col-md-4 col-sm-4" >
					<img src="{{asset('frontendtemplate/images/car1.jpg')}}" class="img-fluid card-img " style="width:200px;">
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
						<i class="fas fa-user-alt" id="icon"></i>
					<!-- <i class="fas fa-car" id="icon"></i> -->
					<p>{{$samezero->name}}</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
					<i class="fas fa-phone-alt" id="icon"></i>
					<p>{{$samezero->phone}}</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4" >
					<div class="text-center">
					<i class="fas fa-car" id="icon"></i>
					<p>{{$samezero->cartype}}</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
					<i class="fas fa-money-bill" id="icon"></i>
					<p>{{$samezero->price * $interval}}</p>
					</div>
				</div>
				<div class="col-sm-4 d-lg-none">
					
				</div>
				<div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-end pr-5 pb-3">
				 <a href="{{route('customer.details',$samezero->id)}}"  >
				 	<button class="btn btn-info mr-2"><i class="fa fa-eye"></i></button>
				 </a>
				 <a href=""  >
				 	<button class="btn btn-info">Booking</button>
				 </a>
				</div>
			</div>

		</div>
@endforeach
@endif

	</div>




@endsection