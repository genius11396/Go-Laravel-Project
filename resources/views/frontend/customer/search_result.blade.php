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
		
			<div class=" col-lg-2 col-md-12 col-sm-12 pr-5 pb-3">
				<button class="rounded allbutton ml-0 h-50 cardetails" style="background-color: #018ABE">Details</button>
				<button type="submit" class="rounded allbutton h-50 order" data-toggle="modal" data-target="#myModal2" style="width: 80px;" data-driver_id="{{$sameone->id}}" data-cartype="{{$sameone->cartype}}" data-total="{{$sameone->price * $interval}}" data-user_id="{{Auth::user()->id}}" data-pickupdivision="{{$userorderdetails[0]}}" data-pickupcity="{{$userorderdetails[1]}}" data-dropoffdivision="{{$userorderdetails[2]}}" data-dropoffcity="{{$userorderdetails[3]}}" data-pickupdate="{{$userorderdetails[4]}}" data-dropdate="{{$userorderdetails[5]}}" data-pickuptime="{{$userorderdetails[6]}}" data-pickuptimeam="{{$userorderdetails[7]}}" >Order</button></div>



			<div class="cardetail col-lg-2 col-md-4 col-sm-4 offset-lg-2">
				<div class="text-center">
					<i class="fas fa-home" id="icon"></i>
					<p>{{$sameone->division_id}}</p>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-4 cardetail">
				<div class="text-center">
					<i class="fas fa-money-bill" id="icon"></i>
					<p>{{$sameone->price}}(per day)</p>
				</div>

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
					<p>{{$samezero->price * $interval}}(total)</p>
				</div>
			</div>

			<div class="col-sm-4 d-lg-none">

			</div>
			


			<div class=" col-lg-2 col-md-12 col-sm-12 pr-5 pb-3">
				<button class=" allbutton rounded ml-0 h-50 cardetails">Details</button>
				<button type="submit" class="rounded allbutton h-50 order" data-toggle="modal" data-target="#myModal2" style="width: 80px;" data-driver_id="{{$samezero->id}}" data-cartype="{{$samezero->cartype}}" data-total="{{$samezero->price * $interval}}" data-user_id="{{Auth::user()->id}}" data-pickupdivision="{{$userorderdetails[0]}}" data-pickupcity="{{$userorderdetails[1]}}" data-dropoffdivision="{{$userorderdetails[2]}}" data-dropoffcity="{{$userorderdetails[3]}}" data-pickupdate="{{$userorderdetails[4]}}" data-dropdate="{{$userorderdetails[5]}}" data-pickuptime="{{$userorderdetails[6]}}" data-pickuptimeam="{{$userorderdetails[7]}}" >Order</button></div>

				<div class="cardetail col-lg-2 col-md-4 col-sm-4 offset-lg-2">
					<div class="text-center">
						<i class="fas fa-home" id="icon"></i>
						<p>{{$samezero->division_id}}</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-4 cardetail">
					<div class="text-center">
						<i class="fas fa-money-bill" id="icon"></i>
						<p>{{$samezero->price }}(per day)</p>
					</div>


				</div>
			</div>

		</div>
		@endforeach
		@endif

	</div>


	<div id="myModal2" class="modal fade" role="dialog" >
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
	@endsection

	@section('script')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.cardetail').hide();
			$(".cardetails").click(function(){
				$(".cardetail").toggle('slow');
			});
			$(".order").click(function(){
				$(this).css({"background-color":"#02457A","border-color":"#02457A"});
				$(this).html("Ordered");
				var user_id = $(this).data('user_id');
				var driver_id = $(this).data('driver_id');
				var cartype = $(this).data('cartype');
				var total = $(this).data('total');
				var pickupdivision = $(this).data('pickupdivision');
				var pickupcity = $(this).data('pickupcity');
				var dropoffdivision = $(this).data('dropoffdivision');
				var dropoffcity = $(this).data('dropoffcity');
				var pickupdate = $(this).data('pickupdate');
				var dropdate = $(this).data('dropdate');
				var pickuptime = $(this).data('pickuptime');
				var pickuptimeam = $(this).data('pickuptimeam');
				console.log(driver_id);
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.post("/requestorder",{
					user_id:user_id,
					driver_id:driver_id,
					cartype:cartype,
					pickupdivision:pickupdivision, 
					pickupcity: pickupcity,
					dropoffdivision:dropoffdivision,
					dropoffcity:dropoffcity,
					pickupdate:pickupdate,
					dropdate:dropdate,
					pickuptime:pickuptime,
					pickuptimeam:pickuptimeam,
					total:total
				},function(res){
					
				});
			});
		});
	</script>
	@endsection