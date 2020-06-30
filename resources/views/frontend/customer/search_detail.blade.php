@extends('frontend/master')
@section('content')
	<div class="my-5 text-center">
		<img src="{{asset('frontendtemplate/images/icon3.svg')}}" class="img-fluid card-img" style="width: 60px;"><h2>Car Detail</h2>
		<!-- <div style="padding-left: 250px;padding-right: 250px;"><hr></div> -->
	</div>

	<div class="container">
		<div class=" no-gutters my-1" id="bg">
			<div class="row mt-5">
				<div class="col-lg-4 col-md-4 col-sm-4" >
					<img src="{{asset('frontendtemplate/images/car1.jpg')}}" class="img-fluid card-img " width="100">
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8s" >
					<ul class="list-unstyled">
						<li><b>Car Name:</b> Suzuki Ertiga</li>
						<li><b>Car Type:</b>  MPV-type vehicle</li>
						<li><b>Car No:</b>  1H/3850</li>
						<li><b>Seatsing Capacity:</b>  7 (with driver)</li>
						<li><b>Wheelbase:</b>  2740 mm</li>
						<li><b>Turning Radius:</b>  5.2 m</li>	
					</ul>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<h4><b>Safe in Every Sense</b></h4>
							<ul>
								<li>Heartect Platform</li>
								<li>Dual Airbags</li>
								<li>Hill Hold Technology</li>
								<li>Electronic Stability Program</li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<h4><b>Style that complements everyone</b></h4>
							<ul>
								<li>Comfort for all</li>
								<li>Third Row Recliner Seats</li>
								<li>Flexible Luaggage Space</li>
								<li>Large Luaggage Compartment</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end pr-5 pb-3">
					<button data-toggle="modal" data-target="#myModal" class="btn btn-outline-info">Order</button>
				</div>
			</div>
		</div>

		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<div class="modal-content">
					<div class="modal-header">
						<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
						<h4 class="modal-title">Order Accept</h4>
					</div>
					<div class="modal-body">
						<p>We will reply to you soon.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>

	</div>
@endsection