
@extends('frontend.master')

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
            <a href="" class="p-2">
                <button class="btn btn-outline-light">
                Login
                </button>
            </a>

            <button class="btn btn-outline-light m-2" data-toggle="modal" data-target="#myModal">
              Register
            </button>
          

            <div id="myModal" class="modal fade" role="dialog" >
                <div class="modal-dialog">

                  <div class="modal-content modalbg">
                    <div class="modal-header justify-content-center">
                      <h3 class="modal-title">Registration</h3>
                    </div>
                    <div class="modal-body d-flex justify-content-center" id="link">
                      <a href="" class="p-2"><button class="btn btn-outline-light">Register for Customer</button></a>
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
@endsection

@section('content')
<div id="img" style="background-image: url('{{asset('frontendtemplate/images/car.jpeg')}}');">
  <div class="container-fluid">
    <div class="container py-5 d-flex justify-content-end">
      <div class="card col-lg-6 col-md-10 col-sm-10">
        <div class="card-block">

          <form action="" method="POST">
            {{csrf_field()}}
            <div class="row">

            <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
              <label for="division">Pick up place/City </label>
              <select class="form-control " id="division" name="pickupdivision">
                <option value="">Select Division</option>
                @foreach($division as $row)
                <option value="{{$row->id}}">
                  {{$row->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
              <label for="city">Pick up place/Township </label>
              <select class="form-control " id="city" name="pickupcity">
              </select>
             </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
              <label for="dropoffdivision">Drop off place/City </label>
              <select class="form-control " id="dropoffdivision" name="dropoffdivision">
                <option value="">Select Division</option>
                @foreach($division as $row)
                <option value="{{$row->id}}">
                  {{$row->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
              <div class="p-3">
                <label for="dropoffcity">Drop off place/Township </label>
                <select class="form-control" id="dropoffcity" name="dropoffcity">
                </select>
              </div>
            </div>

              <div class="form-group col-lg-6 col-md-6">
               <div class="p-3">
                <label for="exampleFormControlSelect1">Pick up Date </label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value="{{date('M - d')}}">{{date('M - d')}}</option>
                  <option value="{{
                    date('M - d',strtotime('today + 1day'))
                  }}">{{
                    date("M - d",strtotime('today + 1day'))
                  }}</option>
                  <option value="{
                    date('M - d',strtotime('today + 2day'))
                  }}">{{
                    date("M - d",strtotime('today + 2day'))
                  }}</option>
                  <option value="{
                    date('M - d',strtotime('today + 3day'))
                  }}">{{
                    date("M - d",strtotime('today + 3day'))
                  }}</option>
                  <option value="{
                    date('M - d',strtotime('today + 4day'))
                  }}">{{
                    date("M - d",strtotime('today + 4day'))
                  }}</option>
                  <option value="{
                    date('M - d',strtotime('today + 5day'))
                  }}">{{
                    date("M - d",strtotime('today + 5day'))
                  }}</option>
                  <option value="{
                    date('M - d',strtotime('today + 6day'))
                  }}">{{
                    date("M - d",strtotime('today + 6day'))
                  }}</option>
                  <option value="{
                    date('M - d',strtotime('today + 7day'))
                  }}">{{
                    date("M - d",strtotime('today + 7day'))
                  }}</option>
                  <option value="{
                    date('M - d',strtotime('today + 8day'))
                  }}">{{
                    date("M - d",strtotime('today + 8day'))
                  }}</option>
                  <option value="{
                    date('M - d',strtotime('today + 9day'))
                  }}">{{
                    date("M - d",strtotime('today + 9day'))
                  }}</option>
                </select>
               </div>
              </div>

              <div class="form-group col-lg-3 col-md-6">
               <div class="p-3">
                <label for="exampleFormControlSelect1">Pick up </label>
                <input type="text" class="form-control" placeholder="00:00">
               </div>
              </div>

              <div class="form-group col-lg-3 col-md-6">
               <div class="p-3">
                <label for="exampleFormControlSelect1">Time</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>AM</option>
                  <option>PM</option>
                </select>
                </div>
              </div>

              <div class="form-group col-lg-6 col-md-6">
                <div class="p-3">
                  <label for="exampleFormControlSelect1">Drop off Date </label>
                  <select class="form-control" id="exampleFormControlSelect1">
                   <option >{{date("M - d")}}</option>
                   <option>{{
                    date("M - d",strtotime('today + 1day'))
                  }}</option>
                  <option>{{
                    date("M - d",strtotime('today + 2day'))
                  }}</option>
                  <option>{{
                    date("M - d",strtotime('today + 3day'))
                  }}</option>
                  <option>{{
                    date("M - d",strtotime('today + 4day'))
                  }}</option>
                  <option>{{
                    date("M - d",strtotime('today + 5day'))
                  }}</option>
                  <option>{{
                    date("M - d",strtotime('today + 6day'))
                  }}</option>
                  <option>{{
                    date("M - d",strtotime('today + 7day'))
                  }}</option>
                  <option>{{
                    date("M - d",strtotime('today + 8day'))
                  }}</option>
                </select>
              </div>
            </div>

              <div class="mb-4 py-3 px-4 col-lg-12">
                <a href="{{route('result')}}" class="btn btn-info btn-block">Search</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
<div class="pt-2" style="background-color: #202e2f; text-align: center;">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-12 ">
                    <p class="text-white pb-3">All right reserved</p>
                </div>
            </div>  
        </div>
    </div>
@endsection

@section ('script')
<script type="text/javascript">
  $(document).ready(function(){

// pickup select divison ajaxSetup
$("#division").change(function(){
  var id=$(this).val();
  // console.log(id);
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.post("/fetch",{id:id},function(res){
    var html='';
    jQuery.each(JSON.parse(res), function (key, value) {
      // console.log(value.name);
      html+=`<option value="${value.id}">${value.name}</option>`
      $("#city").html(html);
    });
  });
})

// dropoff select divison ajaxSetup
$("#dropoffdivision").change(function(){
  var id=$(this).val();
  // console.log(id);
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.post("/dropfetch",{id:id},function(res){
    var html='';
    jQuery.each(JSON.parse(res), function (key, value) {
      // console.log(value.name);
      html+=`<option value="${value.id}">${value.name}</option>`
      $("#dropoffcity").html(html);
    });
  });
})
})
</script>
@endsection


