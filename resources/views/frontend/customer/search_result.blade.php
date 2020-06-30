@extends('frontend/master')
@section('content')
	<div class="my-5 text-center">
		<img src="{{asset('frontendtemplate/images/icon3.svg')}}" class="img-fluid card-img" style="width: 60px;"><h2>Car Search List</h2>
		<!-- <div style="padding-left: 250px;padding-right: 250px;"><hr></div> -->
	</div>


	<div class="container mb-2 ">
		<div class=" no-gutters my-1" id="border">
			<div class="row mt-5">
				<div class="col-lg-2 col-md-4 col-sm-4" >
					<img src="{{asset('frontendtemplate/images/car1.jpg')}}" class="img-fluid card-img " style="width:200px;">
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4" >
					<div class="text-center">
					<i class="fas fa-users" id="icon"></i>
					<p>6 passengers</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
					<i class="fas fa-money-bill" id="icon"></i>
					<p>100000mmk</p>
					</div>
				</div>
				<div class="col-sm-4 d-lg-none">
					
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
					<i class="fas fa-car" id="icon"></i>
					<p>Nay Paing Soe</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
					<i class="fas fa-phone-alt" id="icon"></i>
					<p>091234545</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-end pr-5 pb-3">
					<a href="" class="pr-2"><button class="btn btn-outline-info">Order</button></a>
					<a href="{{route('detail')}}"><button class="btn btn-outline-info">Detail</button></a>
				</div>
			</div>
		</div>

		<div class=" no-gutters my-1" id="border">
			<div class="row mt-5">
				<div class="col-lg-2 col-md-4 col-sm-4" >
					<img src="{{asset('frontendtemplate/images/car1.jpg')}}" class="img-fluid card-img " style="width:200px;">
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4" >
					<div class="text-center">
					<i class="fas fa-users" id="icon"></i>
					<p>6 passengers</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
					<i class="fas fa-money-bill" id="icon"></i>
					<p>100000mmk</p>
					</div>
				</div>
				<div class="col-sm-4 d-lg-none">
					
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
					<i class="fas fa-car" id="icon"></i>
					<p>Nay Paing Soe</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4">
					<div class="text-center">
					<i class="fas fa-phone-alt" id="icon"></i>
					<p>091234545</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-12 col-sm-12 d-flex justify-content-end pr-5 pb-3">
					<a href="" class="pr-2"><button class="btn btn-outline-info">Order</button></a>
					<a href="{{route('detail')}}"><button class="btn btn-outline-info">Detail</button></a>
				</div>
			</div>
		</div>
	</div>




@endsection