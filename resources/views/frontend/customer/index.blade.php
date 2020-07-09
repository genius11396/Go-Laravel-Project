@extends('frontend.customer.master')

@section('content')
<div id="img" style="background-image: url('{{asset('frontendtemplate/images/car.jpeg')}}');">
  <div class="container-fluid">
    <div class="container py-5 d-flex justify-content-end">
      <div class="card col-lg-6 col-md-10 col-sm-10">
        <div class="card-block">
          <form action="{{route('customer.searchdriver')}}" method="POST">
            {{csrf_field()}}
            <div class="row">

            <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
              <label for="division">Pick up place/Division </label>
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
                <select class="form-control" name="pickupdate" id="exampleFormControlSelect1">
                  <option value="{{date('y-m-d')}}">{{date('M - d')}}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 1day'))
                  }}">{{
                    date("M - d",strtotime('today + 1day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 2day'))
                  }}">{{
                    date("M - d",strtotime('today + 2day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 3day'))
                  }}">{{
                    date("M - d",strtotime('today + 3day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 4day'))
                  }}">{{
                    date("M - d",strtotime('today + 4day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 5day'))
                  }}">{{
                    date("M - d",strtotime('today + 5day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 6day'))
                  }}">{{
                    date("M - d",strtotime('today + 6day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 7day'))
                  }}">{{
                    date("M - d",strtotime('today + 7day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 8day'))
                  }}">{{
                    date("M - d",strtotime('today + 8day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 9day'))
                  }}">{{
                    date("M - d",strtotime('today + 9day'))
                  }}</option>
                </select>
               </div>
              </div>

              <div class="form-group col-lg-3 col-md-6">
               <div class="p-3">
                <label for="exampleFormControlSelect1">Pick up </label>
                <input type="text" name="pickuptime" class="form-control" placeholder="00:00">
               </div>
              </div>

              <div class="form-group col-lg-3 col-md-6">
               <div class="p-3">
                <label for="exampleFormControlSelect1">Time</label>
                <select class="form-control" name="pickuptimeam" id="exampleFormControlSelect1">
                  <option value="AM">AM</option>
                  <option value="PM">PM</option>
                </select>
                </div>
              </div>

              <div class="form-group col-lg-6 col-md-6">
                <div class="p-3">
                  <label for="dropdate">Drop off Date </label>
                  <select class="form-control" id="dropdate" name="dropdate">
                   <option value="{{date('y-m-d')}}">{{date("M - d")}}</option>
                   <option value="{{
                    date('y-m-d',strtotime('today + 1day'))
                  }}">{{
                    date("y-m-d",strtotime('today + 1day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 2day'))
                  }}">{{
                    date("M - d",strtotime('today + 2day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 3day'))
                  }}">{{
                    date("M - d",strtotime('today + 3day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 4day'))
                  }}">{{
                    date("M - d",strtotime('today + 4day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 5day'))
                  }}">{{
                    date("M - d",strtotime('today + 5day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 6day'))
                  }}">{{
                    date("M - d",strtotime('today + 6day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 7day'))
                  }}">{{
                    date("M - d",strtotime('today + 7day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 8day'))
                  }}">{{
                    date("M - d",strtotime('today + 8day'))
                  }}</option>
                   <option value="{{
                    date('y-m-d',strtotime('today + 9day'))
                  }}">{{
                    date("M - d",strtotime('today + 9day'))
                  }}</option>
                </select>
              </div>
            </div>

              <div class="mb-4 py-3 px-4 col-lg-12">

@role('customer')
       <button type="submit" class="btn btn-info btn-block">Search</button>
@else
    <a href="{{route('login')}}" class="btn btn-info btn-block">Search</a>
@endrole


              </div>
            </div>
          </form>
        </div>
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
    console.log(res);
    var html='';
    jQuery.each(res, function (key, value) {
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
    jQuery.each(res, function (key, value) {
      // console.log(value.name);
      html+=`<option value="${value.id}">${value.name}</option>`
      $("#dropoffcity").html(html);
    });
  });
})
})
</script>
@endsection


