@extends('frontend.customer.master')
@section('content')
	<div class="my-5 text-center">
		<img src="{{asset('frontendtemplate/images/icon3.svg')}}" class="img-fluid card-img" style="width: 60px;"><h2>Car Detail</h2>
		<!-- <div style="padding-left: 250px;padding-right: 250px;"><hr></div> -->
	</div>
 
	<div class="container">
		<div class=" no-gutters my-1" id="bg">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4" >
					<img src="{{asset('frontendtemplate/images/car1.jpg')}}" class="img-fluid card-img " width="100">
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8" style="line-height: 30px;" >
					<ul class="list-unstyled">
						<li><b>Driver Name:</b> {{$driver->name}}</li>
						<li><b>Car Type:</b> {{$driver->cartype}} </li>
						<li><b>Car No:</b> {{$driver->carno}}</li>
						<li><b>From :</b>  {{$driverhomedivision->name}}</li>
					</ul>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<h4><b>Safe in Every Sense</b></h4>
							<ul>
								<li>Air Con</li>
								<li>Dual Airbags</li>
						     	<li>Comfort for all</li>
							</ul>
  						</div>
				
					</div>
				</div>
				

				<div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end pr-5 pb-3">
						<a><button class="btn btn-info mr-3" style="width: 100px;">Back</button></a>
					<button data-toggle="modal" data-target="#Order" class="btn btn-info" style="width: 100px;">Booking</button>


	
				</div>
			</div>
		</div>

		<div id="Order" class="modal fade" role="dialog" >
			<div class="modal-dialog">

				<div class="modal-content modalbg">
					<div class="modal-header justify-content-center">
						<h3 class="modal-title">Order Accept</h3>
						<!-- <button type="button" class="close text-white" data-dismiss="modal">&times;</button> -->
					</div>
					<div class="modal-body">
						<p>We will reply to you soon.</p>
						<img src="{{asset('frontendtemplate/images/reply.svg')}}" class="img-fluid" width="30">
						<img src="{{asset('frontendtemplate/images/reply.svg')}}" class="img-fluid" width="30">
						<img src="{{asset('frontendtemplate/images/reply.svg')}}" class="img-fluid" width="30">
						<img src="{{asset('frontendtemplate/images/reply.svg')}}" class="img-fluid" width="30">
						<img src="{{asset('frontendtemplate/images/reply.svg')}}" class="img-fluid" width="30">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>

	</div>
@endsection